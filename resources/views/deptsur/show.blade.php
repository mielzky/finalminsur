@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <center><h1>{{ $deptsur->dept }}</h1></center>

                <div class="card">
                <div class="card-header">{{ $deptsur->dept }}</div>
                    <div class="card-body">
                        <a class="btn btn-dark" href="/deptsur/{{ $deptsur->id }}/surveys/create">Add Question</a>
                    <a class="btn btn-dark" href="/surv/{{ $deptsur->id }}-{{ Str::slug($deptsur->dept) }}">Take Survey</a>
                    </div>
                </div>
                <br>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><button onclick="myFunction()" class="btn bg-success">Print this page</button></div>
                </div>
                <script>
                    function myFunction() {
                      window.print();
                    }
                </script>
                @foreach ($deptsur->surveys as $survey)
                <div><br>
                <div class="card">
                    <div class="card-header bg-success"><b>{{ $survey->survey }}</b></div>
                    <div class="card-body">
                    <ul class="list-group">
                        <?php $pos=1 ?>
                        @foreach ($survey->answers as $answer)

                            <li class="list-group-item d-flex justify-content-between">
                                <div>{{ $answer->answer }}</div>
                                @if ( $survey->responses->count() )
                            <div>{{ ($answer->responses->count() * 100) / $survey->responses->count() }}%</div> 
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    </div>
                </div>
                <div>
                <div class="card-footer" style="background: floralwhite; border-radius: 0px 0px 10px 10px;">
                <form action="/deptsur/{{ $deptsur->id }}/surveys/{{ $survey->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div><br>
        <div class="card">
            <div class="card-header bg-info">Remarks</div>
            <div class="card-body">
            <ul class="list-group">
                @foreach ($deptsur->survs as $survs)
                    <li class="list-group-item d-flex justify-content-between">
                        <div>{{ $survs->remarks }}</div> 
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
@endsection

