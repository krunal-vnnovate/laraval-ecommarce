<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index($id){
        // $showOrder = Cart::find($id);
        // return "Index function called!"."<br>".$id."Is your id";
        if(Auth::id()){
            $user = Auth::user();
            $userId = $user->id;
            $count = Cart::where('users_id',$userId)->count();

            $cart = Cart::where('users_id', $userId)->get();
        } else{
            $count = '';
        }

        return view('frontend.order.index', compact('count','cart'));
    }
    //
}
