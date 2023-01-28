<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Utility;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        $utility = $request->input('utility');
        $renter = Auth::id();
        $start = $request->input('start');
        $end = $request->input('end');

        $orders = Order::where('utility_id', $utility)->get();
        
        //if else that check if $start and $end are within $orders->start and $orders->end
        foreach($orders as $order) {
            $orderStart = new \DateTime($order->start);
            $orderEnd = new \DateTime($order->end);
            $inputStart = new \DateTime($start);
            $inputEnd = new \DateTime($end);
    
            if(($inputStart >= $orderStart && $inputStart < $orderEnd) || ($inputEnd > $orderStart && $inputEnd <= $orderEnd)) {
                session()->flash('message', 'Date has been occupied');
                return redirect()->back();
            }
        }

        $datetime1 = new \DateTime($start);
        $datetime2 = new \DateTime($end);
        $interval = new \DateInterval('PT1H');
        $period = new \DatePeriod($datetime1, $interval, $datetime2);

        $duration = 0;

        foreach ($period as $dt) {
            $duration++;
        }
        
        $UtilityData = Utility::where('id', $utility)->get();
        
        $totalPrice = $UtilityData[0]->prices * $duration;
        $userid = $UtilityData[0]->owner;

        $user = User::where('id', $userid)->get();

        $order = new Order();
        $order->utility_id = $utility;
        $order->renter = $renter;
        $order->start = $start;
        $order->end = $end;
        $order->duration = $duration;
        $order->totalPrice = $totalPrice / 24;
        $order->save();

        $userincome = $user[0]->income + $totalPrice / 24;
        $utilincome = $UtilityData[0]->income + $totalPrice / 24;

        DB::table('users')
    ->updateOrInsert(
        ['id' => $UtilityData[0]->owner],
        ['income' => $userincome]
    );

    DB::table('utility')
    ->updateOrInsert(
        ['id' => $utility],
        ['income' => $utilincome]
    );

        return view('stripe', ['order'=> $order, 'utility' => $UtilityData[0]]);
    }

    public function showactiveorder(){
        $id = Auth::id();
        $orders = Order::where('renter', $id)->where('active', true)->get();
        if ($orders->isEmpty()) {
            return redirect()->route('booking.dash')->with('message', 'You have no upcoming order');
        }
        $utility_ids = $orders->pluck('utility_id');
        $utilities = Utility::whereIn('id', $utility_ids)->get();
        return view('utility/order', ['orders'=> $orders, 'utility' => $utilities]);
    }

    public function showupcomingorder(){
        $id = Auth::id();
        $orders = Order::where('renter', $id)->where('active', false)->where('ended', false)->get();
        if ($orders->isEmpty()) {
            return redirect()->route('booking.dash')->with('message', 'You have no upcoming order');
        }
        $utility_ids = $orders->pluck('utility_id');
        $utilities = Utility::whereIn('id', $utility_ids)->get();
        return view('utility/order', ['orders'=> $orders, 'utility' => $utilities]);
    }


    public function showendedorder(){
        $id = Auth::id();
        $orders = Order::where('renter', $id)->where('ended', true)->get();
        if ($orders->isEmpty()) {
            return redirect()->route('booking.dash')->with('message', 'You have no upcoming order');
        }
        $utility_ids = $orders->pluck('utility_id');
        $utilities = Utility::whereIn('id', $utility_ids)->get();
        return view('utility/order', ['orders'=> $orders, 'utility' => $utilities]);
    }

    public function showorder(){
        $orders = Order::all();
        if ($orders->isEmpty()) {
            return redirect()->route('booking.dash')->with('message', 'No order');
        }
        $utility_ids = collect();
        foreach($orders as $order) {
            $utility_ids->push($order->utility_id);
        }
        $utilities = Utility::whereIn('id', $utility_ids)->get();
        $images = $orders->map(function ($order) {
            return Image::where('order_id', $order->id)->first();
        });
        return view('admin/order', ['orders'=> $orders, 'utility' => $utilities, 'image' => $images]);
    }
}
