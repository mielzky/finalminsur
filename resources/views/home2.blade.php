@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-success"><b>Dashboard</b></div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="list-group">
                        <a href="/deptsur/create" class="btn btn-success">Add Department Survey</a><br>
                        <a href="" class="btn btn-success">Department Statistics</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <h3>Announcement</h3>
                    <div class="card">
                        <div class="card-header bg-danger"><b>{{ $notifa->title }}<b></div>
                        <div class="card-body">
                            <p>{{ $notifa->msg }}</p>
                        </div> 
                    </div>
                    <br>
                    <h3>Department Survey</h3>

                <div class="card">
    
                    <div class="card-header bg-success"><b>My Department</b></div>
    
                    <div class="card-body">
                        <div class="list-group">
                            <br>
                            @foreach ($deptsur as $deptsur)
                                <br>
                                <a href="/deptsur/{{ $deptsur->id }}" class="btn btn-success">{{ $deptsur->dept }}</a>
                                <div class="mt-2">
                                    <small>Share URL</small>
                                    <p>
                                    <a href="{{ $deptsur->publicPath() }}">
                                        {{ $deptsur->publicPath() }}
                                    </a>
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
    </div>             
    <br>
    {{-- <div class="card">
        <div class="card-header bg-danger">{{ $notifa->title }}</div>
        <div class="card-body">
            <p>{{ $notifa->msg }}</p>
        </div> 
    </div> --}}
                    {{-- <div class="card">
    
                    <div class="card-header">Departments</div>
    
                    <div class="card-body">
                        <div class="list-group">
                            <ul><br>
                            @foreach ($deptsur as $deptsur)
                                <br><li class="list-group-item">
                                <a href="/deptsur/{{ $deptsur->id }}">{{ $deptsur->dept }}</a>
                                <div class="mt-2">
                                    <small>Share URL</small>
                                    <p>
                                    <a href="{{ $deptsur->publicPath() }}">
                                        {{ $deptsur->publicPath() }}
                                    </a>
                                    </p>
                                </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
    </div> --}}
            </div>
          </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/deptsur/create" class="btn btn-dark">Add Department Survey</a>
                </div>
            </div>
<br>
<br>
<div class="card">

                <div class="card-header">Departments</div>

                <div class="card-body">
                    <div class="list-group">
                        <ul><br>
                        @foreach ($deptsur as $deptsur)
                            <br><li class="list-group-item">
                            <a href="/deptsur/{{ $deptsur->id }}">{{ $deptsur->dept }}</a>
                            <div class="mt-2">
                                <small>Share URL</small>
                                <p>
                                <a href="{{ $deptsur->publicPath() }}">
                                    {{ $deptsur->publicPath() }}
                                </a>
                                </p>
                            </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
</div>
                
        </div>
    </div> --}}
</div>
@endsection
