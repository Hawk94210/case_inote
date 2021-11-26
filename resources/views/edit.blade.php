@extends('master')
@section('content')
<form method="POST">
  @csrf
    <div class="form-group">
      <label >Name</label>
      <input name="name" type="text" class="form-control" value="{{ $inote->name }}" >
    </div>
    <div class="form-group">
      <label >Note</label>
      <input name="note" type="text" class="form-control" value="{{ $inote->note }}">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection