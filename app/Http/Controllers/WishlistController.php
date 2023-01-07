<?php

namespace App\Http\Controllers;

use App\Models\Utility;
use Maize\Markable\Models\Favorite;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $utility = Utility::whereHasFavorite(
            auth()->user()
        )->get(); 
        return view('wishlist',compact('utility'));
    }

    public function favoriteAdd($id)
    {
        $utility = Utility::find($id);
        $user = auth()->user();
        Favorite::add($utility, $user);
        session()->flash('success', 'Product is Added to Favorite Successfully !');

        return redirect()->route('wishlist');
    }

    public function favoriteRemove($id)
    {
        $utility = Utility::find($id);
        $user = auth()->user();
        Favorite::remove($utility, $user);
        session()->flash('success', 'Product is Remove to Favorite Successfully !');

        return redirect()->route('wishlist');
    }
}   