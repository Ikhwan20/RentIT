<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin/userList', ['users' => $user]);
    }

    public function admin(){
        return view('admin/dashboard');
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Utility Deleted');  
    }
}
