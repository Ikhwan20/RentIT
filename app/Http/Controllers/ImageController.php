<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\images;

class ImageController extends Controller
{
    public function upload(Request $request) {
 
       $name = $request->file('image')->getClientOriginalName();
       $request->image->move(public_path('images'), $name);
       $image = images::create([
        'image_path' => $name
      ]);

      return redirect() -> back();
        
    }

    public function render()
    {
        $name = images::all();
        return view('utilitiescheck', ['names' => $name]);
    }
}
