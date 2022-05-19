@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}

	@foreach ($attachdata as $item)
		<h2>{{ $item->title }} </h2>
		<img id="novostiI" src="images/News/{{$item->img}}">
		<h3>
			{{ $item->content }}
			(<a id="novostiA" href="{{ $item->guid }}" target="_blank">Подробнее...</a>)
</h3>
	@endforeach

@endsection