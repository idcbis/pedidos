<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShippingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    public function dashboard () {
        return view('shipping.home');
    }
}


