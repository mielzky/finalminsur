@extends('testk')

@section('title')
    Create
@endsection

@section('content')
        <div class="row">
            <form  action="/testk" method="POST" class="col s12">
                @csrf
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="icon_prefix2" class="materialize-textarea" name="name"></textarea>
                  <label for="icon_prefix2">First Name</label>
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
            </form>
            @error('name') {{ $message }} @enderror
          </div>
@endsection