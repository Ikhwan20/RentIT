<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public $tempvar;

    public function upload(Request $request) {
 
       $name = $request->file('image')->getClientOriginalName();
       $request->file('image')->storeAs('public/images/profile/', $name);
       $tempvar = $name;

       return $tempvar;
        
    }

    public function render($value)
    {
        return view('utilitiescheck', ['tempvar' => $value]);
    }
}
