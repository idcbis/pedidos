<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        /* Si el usuario logueado es administrador */
        if (\Auth::user()->isAdmin()) {
            return redirect()->route('shippingDashboard');
        } else {
            /* Si el usuario logueado pertenece a una entidad pública */
            if (\Auth::user()->userBelongsToPublicCompany()) {
                if(\Auth::user()->userHasStock() == 0) {
                    return redirect()->route('userStock');
                }
            }
            return redirect()->route('userHome');
        }
    }
}
