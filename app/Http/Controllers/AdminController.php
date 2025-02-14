<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function isAdmin(){
        return view('admin-dashboard');
    }
}

