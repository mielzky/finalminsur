<?php

namespace App\Http\Controllers;

use App\Deptsur;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $deptsur = Deptsur::all();
        return view('welcome', compact('deptsur'));
    }

    public function thanks() {
        return view('tnx');
    }
}
