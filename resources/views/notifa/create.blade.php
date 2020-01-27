@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-info">Create Announcement</div>
                            <div class="card-body">
                                <form action="/notifa" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Announcement Title:</label>
                                        <input name="title" type="text" class="form-control" id="title" aria-describedby="deptHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Message:</label>
                                        <input name="msg" type="text" class="form-control" id="msg" aria-describedby="deptHelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary center">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3>Announcement</h3>
                
                
                @foreach ($notifas as $notifas)
                <br>
                <div class="card">
                    <div class="card-header bg-danger">{{ $notifas->title }}</div>
                    <div class="card-body">
                        <p>{{ $notifas->msg }}</p>
                    </div> 
                </div>
                @endforeach

                
            </div>
        </div>

    </div>
@endsection