@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Questions</div>
                    <div class="card-body">
                        <form action="/deptsur/{{ $deptsur->id }}/surveys" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="survey"><b>Question</b></label>
                                <input name="survey[survey]" type="text" class="form-control" id="survey" aria-describedby="deptHelp">
                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <legend>Choices</legend>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer1">Choice 1</label>
                                            <input name="answers[][answer]" type="text" class="form-control" id="answer1" aria-describedby="deptHelp" value="Poor">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer2">Choice 2</label>
                                            <input name="answers[][answer]" type="text" class="form-control" id="answer1" aria-describedby="deptHelp" value="Fair">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer3">Choice 3</label>
                                            <input name="answers[][answer]" type="text" class="form-control" id="answer1" aria-describedby="deptHelp" value="Good">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer4">Choice 4</label>
                                            <input name="answers[][answer]" type="text" class="form-control" id="answer1" aria-describedby="deptHelp" value="Very Good">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="answer5">Choice 5</label>
                                            <input name="answers[][answer]" type="text" class="form-control" id="answer1" aria-describedby="deptHelp" value="Outstanding">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <button type="submit" class="btn btn-primary center">Add Question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection