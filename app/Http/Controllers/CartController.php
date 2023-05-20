<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    //
    function add_to_cart(Request $request)
    {
        $product_id = $request->input();
        $user_id = $request->session()->get('user')->id;
        return $user_id;
    }
}
