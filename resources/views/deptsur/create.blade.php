@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success">Create Survey For Department</div>
                    <div class="card-body">
                        <form action="/deptsur" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="dept">Department Name:</label>
                                <input name="dept" type="text" class="form-control" id="dept" aria-describedby="deptHelp">
                            </div>
                            <button type="submit" class="btn btn-primary center">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection