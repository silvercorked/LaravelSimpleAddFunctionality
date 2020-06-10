@extends('layout.layout')

@section('content')
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	<form id="form" method="POST" action="{{ route('store') }}">
		@csrf
		@method('POST')
		<div class="form-group">
			<label for="title">Title*</label>
			<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter a title" required>
			<small id="emailHelp" class="form-text text-muted">Title your goal with something memerable!</small>
		</div>
		<div class="form-group">
			<label for="description">Description*</label>
			<input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp1" placeholder="Enter a description" required>
			<small id="emailHelp1" class="form-text text-muted">Describe your goal. Concise goals are better!</small>
		</div>
		<div class="form-group">
			<label for="target">Target</label>
			<input type="number" name="target" class="form-control" id="target" aria-describedby="emailHelp2">
			<small id="emailHelp2" class="form-text text-muted">Give a numerical target fi you'd like.</small>
		</div>
		<div class="form-group">
			<label for="progress">Progress</label>
			<input type="number" name="progress" class="form-control" id="progress" aria-describedby="emailHelp3">
			<small id="emailHelp3" class="form-text text-muted">Let us know how far you've progressed so far. Start at zero if you'd like.</small>
		</div>
		<div class="form-group">
			<label for="unit">Unit</label>
			<input type="text" name="unit" class="form-control" id="unit" aria-describedby="emailHelp4" placeholder="Enter unit.">
			<small id="emailHelp4" class="form-text text-muted">Enter a unit for your target. "calories", "classes" are some examples.</small>
		</div>
		<div>
			<p class="ml-2">* denotes a required field</p>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
