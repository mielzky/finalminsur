<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Deptsur;
use App\Notifa;

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
        $deptsur = auth()->user()->deptsurs;
        $deptsurs = Deptsur::all();
        $notifa = Notifa::latest('id')->first();
        //  dd($deptsur);
        // return view('home', compact('deptsurs'));
        if (auth()->user()->dept == 'Admin') {
            return view('home', compact('deptsurs'));
        }
        return view('home2', compact('deptsur', 'notifa'));
        
    }
}
