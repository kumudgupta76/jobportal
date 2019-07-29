@extends('layouts.app')
@section('content')
<div class="container">
			<div class="card">
		  		<div class="card-body">
				<h5 class="card-title">{{ ($job->title) }}</h5>
				<p class="card-text">{{ $job->description }}</p>
		    	<a href="/jobs/{{ $job->id }}/edit" class="btn btn-primary" style="float: right;">Edit</a>
		    	<form method="POST" action='/jobs/{{ $job->id }}'>
				{{ method_field('DELETE') }}
				@csrf
		    	<button type="submit" class="btn btn-primary">Delete</button>
		    </form>
			</div>
		</div>
		<br>
</div>
@endsection
