@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}
	
	@foreach ($attachdata as $item)
		<h2 id="PTitle">{{ $item->title }} </h2>
		<img id="photoI" src="images/Photos/{{$item->img}}"> <p></p>
		<p>{{ $item->content }}</p>
		<a id="photoA" href="{{ $item->guid }}" target="_blank">Подробнее: {{ $item->title }}</a>
	<p></p>
	<p></p>
		@endforeach	

@endsection