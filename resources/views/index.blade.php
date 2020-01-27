@extends('testk')

@section('content')
    @foreach ($testk as $test)
        <h3>{{ $test->name }}</h3>
    @endforeach
    
@endsection