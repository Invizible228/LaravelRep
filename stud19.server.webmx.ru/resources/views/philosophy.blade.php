@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}
	
	@if (isset($attachdata))
		@foreach ($attachdata as $item)
			<h2>{{ $item->title }}</h2>
			<img id="imgKawaii" src="../images/Philosophy/{{ $item->img }}">							
			<p>{!! $item->content !!}</p>
		@endforeach
	@endif	

@endsection