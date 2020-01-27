<?php

namespace App\Http\Controllers;

use App\Notifa;
use Illuminate\Http\Request;


class NotifaController extends Controller
{
    public function create() {
        $notifas = Notifa::all();
        return view('notifa.create', compact('notifas'));
    }
    
    public function store() {
        Notifa::create($this->validateNotifa());  
        return redirect('/notifa/create');
    }

    protected function validateNotifa() {
        return request()->validate([
            'title' => 'required',
            'msg' => 'required',
        ]);
    }
}
