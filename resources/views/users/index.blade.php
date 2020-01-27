@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-success"><b>Dashboard</b></div>
                    <div class="card-body">
                        <div class="list-group">
                        <a href="/users" class="btn btn-success">Manage User</a><br>
                        <a href="/register" class="btn btn-success">Add User</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header bg-success"><strong><big>Manage User</big></strong></div>
                    <div class="card-body">
                        @foreach ($user as $user)
                            <br>
                            <div class="card">
                                <div class="card-header bg-info">
                                  <big><strong>{{ $user->name }}</strong></big>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title"><small>Department:</small> <strong>{{ $user->dept }}</strong></h5>
                                  <p class="card-text"><small>Contact:</small> <strong>{{ $user->phone }} | {{ $user->email }}</strong></p>
                        <div class="list-group">  
                                  <a href="/users/edit/{{ $user->id }}" class="btn btn-warning">Edit</a>
                                <form action="/users/delete/{{ $user->id }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <br>

                                    <div class="list-group">  
                                    <button  type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                                </div>
                              </div>
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection