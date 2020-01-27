<?php

namespace App\Http\Controllers;

use App\Testk;
use Illuminate\Http\Request;

class TestkController extends Controller
{
    public function index() {
        $testk = Testk::all();
        return view('index', compact('testk'));
    }

    public function create() {
        return view('testkcreate');
    }

    public function store() {
        request()->validate([
            'name' => 'required'
        ]);
        
        $testk = new Testk();
        $testk->name = request('name');
        $testk->save();

        return redirect('/testk');
    
    }
}
