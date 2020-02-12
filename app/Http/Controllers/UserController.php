<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class UserController extends Controller
{
    public function newOrder() {
        $products = Product::get();
        dd($products);
        return view('users.newOrder');
    }

    public function orderHistory() {
        return view('users.orderHistory');
    }
}
