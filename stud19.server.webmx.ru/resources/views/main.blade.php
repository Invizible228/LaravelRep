@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
  	<img id="MainImg" src="images/{{ $data->img }}">
	<p>
	{!! $data->content !!}
	
@endsection