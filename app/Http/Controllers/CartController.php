<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;
class CartController extends Controller
{
    //
    function add_to_cart(Request $request)
    {

        if($request->session()->has('user'))
        {

            $product_id = $request->product_id;
            $user_id = $request->session()->get('user')->id;

            $cart = new Cart;
            $cart->product_id = $product_id;
            $cart->user_id = $user_id;
            $cart->save();
            redirect('/detail/{$product_id}');
        }else{
            redirect('/');
        }
    }

   static function cart_item()
    {
        $user_id = Session::get('user')['id'];

        return Cart::where('user_id', $user_id)->count();
    }

    function cartList()
    {

        $cart_data = DB::table('cart')->join('products', 'cart.product_id','=','products.id')->where('cart.user_id',Session::get('user')['id'])->select('products.*')->get();
       return view('cart', ['cart'=>$cart_data]);

    }
}
