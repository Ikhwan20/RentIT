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
        $duration = $end - $start;
        
        $UtilityData = Utility::where('id', $utility)->get();
        
        foreach($UtilityData as $util){
            $totalPrice = $util->prices * $duration;
        }

        $order = Order::create(['utility'=>$utility, 'renter'=>$renter, 'start'=>$start, 'end'=>$end, 'duration'=>$duration, 'totalPrice'=>$totalPrice]);
        return view('stripe', ['order'=> $order, 'utility' => $UtilityData]);
    }

    public function showactiveorder(){
        $id = Auth::id();
        $order = Order::where('renter', $id)->where('active', true)->get();
        $utility = '{{ $order->utility }}';
        $UtilityData = Utility::where('id', $utility)->get();
        return view('utility/order', ['orders'=> $order, 'utility' => $UtilityData]);
    }

    public function showupcomingorder(){
        $id = Auth::id();
        $order = Order::where('renter', $id)->where('active', false)->where('ended', false)->get();
        $utility = Order::where('renter', $id)->where('active', false)->where('ended', false)->get('utility');
        $UtilityData = Utility::where('id', $utility)->get();
        return view('utility/order', ['orders'=> $order, 'utility' => $UtilityData]);
    }

    public function showendedorder(){
        $id = Auth::id();
        $order = Order::where('renter', $id)->where('ended', true)->get();
        $utility = $order->utility;
        $UtilityData = Utility::where('id', $utility)->get();
        return view('utility/order', ['orders'=> $order, 'utility' => $UtilityData]);
    }
}
