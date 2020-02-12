<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class UserController extends Controller
{
    public function newOrder() {
        $products = Product::get();
        return view('users.newOrder', compact('products'));
    }

    public function orderHistory() {
        return view('users.orderHistory');
    }
}
