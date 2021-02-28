@extends('layout.app')

@section('content')
	<form action="/cars" method="POST">
		@csfr
		<div>
			<input type="text" name="name" placeholder="car name...">
			<input type="text" name="founded" placeholder="founded...">
			<input type="text" name="descriptopn" placeholder="description...">
			<button type="submit" value="submit">Submit</button>
		</div>
	</form>
@endsection;
