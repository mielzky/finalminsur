@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
          <br><br>
          <br><br>
          <br><br>
        <img src="logo.png" alt="">
      </div>
      <div class="col">
          <br>
        <div class="card">
            <div class="card-header cardhead bg-success">Take Survey</div>
            <div class="card-body">
                <div class="list-group">
                    <center><div><h2>Choose Departments</h2></div></center>
                    @foreach ($deptsur as $deptsurs)
                        <br>
                            <a href="{{ $deptsurs->publicPath() }}" class="btn btn-success">
                                <b>{{ $deptsurs->dept }}</b>
                            </a>
                            </p> 
                        
                    @endforeach
                    
                </div>
            </div>
        </div>
      </div>
      {{-- <div class="col">
        
      </div> --}}
    </div>
</div>

@endsection
