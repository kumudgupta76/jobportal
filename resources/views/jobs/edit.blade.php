@extends('layouts.app')
@section('content')
<form method="POST" action='/jobs/{{ $job->id }}'>
<!-- {{csrf_field()}} -->
{{ method_field('PATCH') }}
@csrf
<div class="container">
  <div class="form-group">
    <label >Job Title</label>
    <input type="text" class="form-control" id="title" name="title"  value="{{ $job->title }}">
  </div>
  <div class="form-group">
    <label >Job Description</label>
    <input value="{{ $job->description }}" type="text" class="form-control" id="description" name="description" rows="3" >
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>


@endsection