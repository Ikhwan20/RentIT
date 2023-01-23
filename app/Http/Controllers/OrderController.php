<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Utility;
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

        $order = new Order();
        $order->utility_id = $utility;
        $order->renter = $renter;
        $order->start = $start;
        $order->end = $end;
        $order->duration = $duration;
        $order->totalPrice = $totalPrice;
        $order->save();

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
}
