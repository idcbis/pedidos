<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

class ShippingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    public function dashboard () {
        $orders = Order::OrderBy('id', 'DESC')->get();
        return view('shipping.home', compact('orders'));
    }
}


