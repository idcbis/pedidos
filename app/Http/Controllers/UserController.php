<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Stock;
use App\Order;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function filterOnlyNumeric($data) {
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
        $response = $this->filterOnlyNumeric($data);
        
        if(count($response) > 0) {
            $order = new Order();
            $order->user_id = \Auth::user()->id;
            $order->order = json_encode($response);

            if($order->save()) {
                return \Redirect::route('userOrderHistory')->with('success', 'Orden enviada');
            } else {
                return \Redirect::back()->with('error', 'Fallo el envío de la orden, inténtalo de nuevo');
            }
        } else {
            return \Redirect::back()->with('error', 'Fallo el envío de la orden, inténtalo de nuevo');
        }

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
        $resultOrders = \Auth::user()->orders;
        $orders = $resultOrders->sortByDesc('id');

        return view('users.orderHistory', compact('orders'));
    }

    public function orderDetail($id) {
        $order = \Auth::user()->orders()->where('id', $id)->first();
        if(!empty($order)) {
            $products = json_decode($order->order);
            /* dd($test); */
            $state = $order->state;
            return view('users.orderDetail', compact('products', 'state'));
        }
        dd('error');
    }
}
