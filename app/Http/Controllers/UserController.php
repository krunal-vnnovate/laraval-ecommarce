<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class UserController extends Controller
{
    public function isUser(){

        // For Shopping cart Count items
        if(Auth::id()){
            $user = Auth::user();
            $userId = $user->id;
            $count = Cart::where('users_id',$userId)->count();
        } else{
            $count = '';
        }

        return view('frontend.index', compact('count'));
        // return view('user.dashboard');
    }
}
