<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function index(){
        $showProduct = Product::query()->get();
       
        if(Auth::id()){
            $user = Auth::user();
            $userId = $user->id;
            $count = Cart::where('users_id',$userId)->count();

            $cart = Cart::where('users_id', $userId)->get();
        } else{
            $count = '';
        }

        return view('frontend.cart.index', compact('showProduct','count','cart'));
    }

    public function cart(){
       return view('cart');
    }

    public function add($id){

        $product_id = $id;
        $user = Auth::user();
        $users_id = $user->id;

        // if(Auth::id()){
        //     $user = Auth::user();
        //     $userId = $user->id;
        //     $count = Cart::where('users_id',$userId)->count();
        // } else{
        //     $count = '';
        // }

        $data = new cart;

        $data->users_id = $users_id;
        $data->product_id = $product_id;
        $data->save();

        return redirect()->back();
    }

    public function delete($id){

        // dd($id);
        $isItemDelete = Cart::destroy($id);
        // dd($isItemDelete);

        if($isItemDelete){
            return redirect()->back();
        } else {
            echo "Record Can't be deleted!!";
        }
    }
}

