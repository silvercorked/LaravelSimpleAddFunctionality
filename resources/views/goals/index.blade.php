@extends('layout.layout')

@section('content')
	<div class="row">
		<div class="col-10 offset-1 mt-5 pb-2 mb-2">
			<div class="row" style="border-bottom: 2px solid #000000 !important">
				<div class="col-5">
					<p class="text-center">Title</p>
				</div>
				<div class="col-5">
					<p class="text-center">Description</p>
				</div>
				<div class="col-2">
					<a class="btn btn-outline-primary btn-block" href="{{ route('create') }}">Create Goal</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-1">
		<div class="col-10 offset-1">
			@foreach($goals as $key => $goal)
				<div class="row mt-2">
					<div class="col-5">
						<p>{{ $goal->title }}</p>
					</div>
					<div class="col-5">
						<p>{{ $goal->title }}</p>
					</div>
					<div class="col-2">
						<a class="btn btn-outline-primary btn-block" href="#" onClick="alert('not yet implemented')">View</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection()