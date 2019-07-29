@extends('layouts.app')
@section('content')
<form method="POSt" action='/jobs'>
<!-- {{csrf_field()}} -->
@csrf
<div class="container">
  <div class="form-group">
    <label >Job Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Job Title">
  </div>
  <div class="form-group">
    <label >Job Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection