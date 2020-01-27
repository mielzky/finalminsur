<?php

namespace App\Http\Controllers;

use App\Deptsur;
use App\Survey;
use App\Surv;
use Illuminate\Http\Request;

class DeptsurController extends Controller
{
    public function create() {
        return view('deptsur.create');
    }

    public function store() {
        $data = request()->validate([
            'dept' => 'required',
        ]);

        // $data['user_id'] = auth()->user()->id;

        // $deptsur = Deptsur::create($data);
        $deptsur =  auth()->user()->deptsurs()->create($data);

        return redirect('/deptsur/'.$deptsur->id);
    }

    public function show(Deptsur $deptsur) {
        $deptsur->load('surveys.answers.responses.survs');
        $surv = Surv::get();
        // dd($surv);
        return view('deptsur.show', compact('deptsur'));
    }

}
