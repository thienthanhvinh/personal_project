<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function detail() {
        return view('cart.detail');
    }
    function checkout() {
        return view('cart.checkout');
    }
}
