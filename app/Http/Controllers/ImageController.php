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

    public function upload2(Request $request) {
 
        $name2 = $request->file('image2')->getClientOriginalName();
        $request->image2->move(public_path('images'), $name2);
        $image2 = images::create([
         'image_path2' => $name2
       ]);
 
       return redirect() -> back();
         
     }

    public function render()
    {
        $name = images::all();
        return view('utilitiescheck', ['names' => $name]);
    }

    public function render2()
    {
        $name2 = images::all();
        return view('utilitiescheck', ['names2' => $name2]);
    }
}
