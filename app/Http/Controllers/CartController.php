<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //
    public function index(){
        $showProduct = Product::query()->get();
        return view('frontend.cart.index', compact('showProduct'));
    }

    public function cart(){
       return view('cart');
    }

    public function add($id){
    }
}
