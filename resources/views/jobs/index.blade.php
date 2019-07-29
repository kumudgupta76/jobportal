@extends('layouts.app')
@section('content')
<div class="container">
	@foreach($jobs as $job)
	<!-- <div class="row-md-12"> -->
		<div class="card">
	  		<div class="card-body">
	  			<a href="/jobs/{{ $job->id }}">
					<h5 class="card-title">{{ $job->title }}</h5>
				</a>
				<p class="card-text">{{ $job->description }}
	    		<a href="#" class="btn btn-primary" style="float: right;">Apply</a> </p>
			</div>
		</div>
		<br>
	<!-- </div> -->
	@endforeach
</div>
@endsection

    
 