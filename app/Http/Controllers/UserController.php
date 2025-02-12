<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function isUser(){
        return view('frontend.index');
        // return view('user.dashboard');
    }
}
