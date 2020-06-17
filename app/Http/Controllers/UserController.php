<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Stock;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function isNumeric($data) {
        $filtered = \Arr::where($data, function ($value, $key) {
            return is_numeric($value);
        });
        return $filtered;
    }

    public function home() {
        $products = Product::get();
        return view('users.newOrder', compact('products'));
    }

    public function newOrder(Request $request) {
        $data = $request->all();

        $response = $this->isNumeric($data);
        dd($response);
    }

    public function stock() {
        return view('users.stock');
    }

    public function postStock(Request $request) {
        $stock = new Stock();
        $stock->fill($request->all());
        $stock->save();

        if($stock->save()) {
            return redirect()->route('userHome');
        }
        else {
            return 'Existio un error';
        }
    }

    public function orderHistory() {
        return view('users.orderHistory');

    }
}
