@extends('layouts.app')

@section('content')
	<div>
		<h2>This content from index</h2>
		<img src="{{URL('storage/scooter2.jpg')}}" width="100px" height="100px">
		<img src="{{URL('storage/scooter3.jpg')}}" width="100px" height="100px">
		<img src="{{URL('storage/scooter4.jpg')}}" width="100px" height="100px">
	</div>
@endsection;