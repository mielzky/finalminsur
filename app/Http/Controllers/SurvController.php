<?php

namespace App\Http\Controllers;

use App\Deptsur;
use App\Surv;
use Illuminate\Http\Request;

class SurvController extends Controller
{
    public function show(Deptsur $deptsur, $slug) {

        $deptsur->load('surveys.answers');
        return view('surv.show', compact('deptsur'));
    }

    public function store(Deptsur $deptsur) {

        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.survey_id' => 'required',
            'surv.remarks' => 'required',
            
        ]);
        
        $surv = $deptsur->survs()->create($data['surv']);
        $surv->responses()->createMany($data['responses']);

        return redirect('/thanks');
        
    }


}
