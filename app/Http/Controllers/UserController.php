<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {
        $products = Product::get();
        return view('users.newOrder', compact('products'));
    }

    public function orderHistory() {
        return view('users.orderHistory');
    }
}
