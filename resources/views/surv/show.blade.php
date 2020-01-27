@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <center><h1>{{ $deptsur->dept }}</h1></center>
                <form action="/surv/{{ $deptsur->id }}-{{ Str::slug($deptsur->dept) }}" method="post">
                    @csrf

                    @foreach ($deptsur->surveys as $key => $survey)
                    <br><div class="card">
                    <div class="card-header bg-success"><strong>{{ $key + 1 }}. </strong><b>{{ $survey->survey }}</b></div>
                        <div class="card-body">
                        <ul class="list-group">
                            @foreach ($survey->answers as $answer)
                                <label for="answer{{ $answer->id }}">
                                    <li class="list-group-item">
                                    <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" value="{{ $answer->id }}">
                                        {{ $answer->answer }}
                                    </li>
                                    <input type="hidden" name="responses[{{ $key }}][survey_id]" value="{{ $survey->id }}">
                                </label>
                            @endforeach
                        </ul>
                        </div>
                    </div>
                    @endforeach
                    
                <br>
                <div class="card">
                    <div class="card-header bg-info"><b>Remarks</b></div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="remarks">Suggestions/Feedback:</label>
                                <input name="surv[remarks]" type="text" class="form-control" id="remarks" aria-describedby="deptHelp">
                            </div>
                    </div>
                </div>

                <br>
                <center><button type="submit" class="btn btn-dark">Complete Survey</button></center>
            </form>

            </div>
        </div>
    </div>
@endsection