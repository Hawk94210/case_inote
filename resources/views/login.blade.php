@extends('master')
@section('content')
<form method="POST">
  @csrf
    <div class="form-group">
      <label >Email</label>
      <input name="email" type="email" class="form-control" value="{{ old('email') }}">
    </div>
    <div class="form-group">
      <label >Password</label>
      <input name="password" type="password" class="form-control">
    </div>
    @if (Session::has('errors'))
        <p class="alert alert-danger">{{ Session::get('errors') }}</p>
    @endif
    <div class="form-group form-check">
      <input name="check" value="check" type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection