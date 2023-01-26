<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use App\Models\Order;

class ImageController extends Controller
{
    public function uploadBefore(Request $request) {
 
    // Store the image
    $fileName = time().$request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->storeAs('images', $fileName, 'public');
    $photo = '/storage/'.$path;

    $order_id = $request->input('order_id');

    // Create a new Image instance
    $image = new Image();
    $image->image_before = $photo;
    $image->order_id = $order_id;
        

    // Save the image to the database
    $image->save();

    // Redirect or return a response
    return redirect()->route('order.active')->with('success','Image uploaded successfully');

        
    }

    public function uploadAfter(Request $request, Order $order) {
 
    // Store the image
    $fileName = time().$request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->storeAs('images', $fileName, 'public');
    $photo = '/storage/'.$path;

    $order_id = $request->input('order_id');
    
    // Create a new Image instance
    $image = Image::where('order_id', $order_id)->first();
    $image->image_after = $photo;
    // Save the image to the database
    $image->save();

    // Redirect or return a response
    return redirect()->route('order.ended')->with('success','Image uploaded successfully');

        
    }

    public function show()
    {
        $image = Image::all();
        return view('utilitiescheck', ['image' => $image]);
    }

    public function before($id)
    {
        $order = Order::where('id', $id)->first();
        return view('imagebefore', ['order' => $order]);
    }

    public function after($id)
    {
        $order = Order::where('id', $id)->first();
        return view('imageafter', ['order' => $order]);
    }
}
