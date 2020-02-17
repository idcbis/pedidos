<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (\Auth::user()->isAdmin()) {
            return \Redirect::to('/dashboard');
        }

        $products = Product::get();
        return view('users.newOrder', compact('products'));
    }

    public function orderHistory() {
        return view('users.orderHistory');
    }

}
