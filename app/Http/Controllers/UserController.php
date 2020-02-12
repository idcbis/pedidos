<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function newOrder() {
        return view('users.newOrder');
    }

    public function orderHistory() {
        return view('users.orderHistory');
    }
}
