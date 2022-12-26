<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $requestData = $request->all();
        $requestData["renter"] = Auth::id();
        $order = Order::create($requestData);
        return view('stripe', ['order'=> $order]);
    }
}
