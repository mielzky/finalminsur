@extends('layouts.app')

@section('content')
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
                    <a href="/deptsur/create" class="btn btn-success">Add Department</a><br>
                    <a href="/users" class="btn btn-success">User Management</a><br>
                    <a href="notifa/create" class="btn btn-success">Announcement</a><br>
                    <a href="text" class="btn btn-success">Text Blast</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">

                <div class="card-header bg-success"><b>Departments</b></div>

                <div class="card-body">
                    <div class="list-group">
                        <br>
                        @foreach ($deptsurs as $deptsur)
                            <br>
                            <a href="/deptsur/{{ $deptsur->id }}" class="btn btn-success"><strong><big>{{ $deptsur->dept }}</big></strong></a>
                            {{-- <div class="mt-2">
                                <small>Share URL</small>
                                <p>
                                <a href="{{ $deptsur->publicPath() }}">
                                    {{ $deptsur->publicPath() }}
                                </a>
                                </p>
                            </div> --}}
                        @endforeach
                        
                    </div>
                </div>
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

                    <a href="/deptsur/create" class="btn btn-dark">Add Departmentp</a>
                    <a href="text" class="btn btn-dark">Text Blast</a>
                </div>
            </div>
<br>
<br>
<div class="card">

                <div class="card-header">Departments</div>

                <div class="card-body">
                    <div class="list-group">
                        <ul><br>
                        @foreach ($deptsurs as $deptsur)
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
