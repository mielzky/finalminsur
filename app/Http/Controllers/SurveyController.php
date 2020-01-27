<?php

namespace App\Http\Controllers;

use App\Deptsur;
use App\Survey;
use App\Surv;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function create(Deptsur $deptsur) {
        return view('survey.create', compact('deptsur'));
    }

    public function store(Deptsur $deptsur) {
        $data = request()->validate([
            'survey.survey' => 'required',
            'answers.*.answer' => 'required',
        ]);
        
        $survey = $deptsur->surveys()->create($data['survey']);
        $survey->answers()->createMany($data['answers']);

        return redirect('/deptsur/'.$deptsur->id);
    }

    public function destroy(Deptsur $deptsur, Survey $survey) {
        $survey->answers()->delete();
        $survey->delete();

        return redirect('/deptsur/'.$deptsur->id);
    }
}
