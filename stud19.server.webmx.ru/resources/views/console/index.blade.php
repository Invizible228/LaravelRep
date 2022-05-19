@extends('layouts.app')

@section('content')
	
	<h1>Консоль управления</h1>
	<h2>Редактирование данных</h2>
	
	<!-- выводим записи верхнего уровня, добавляем ссылку на изменение -->
	@foreach ($data as $item)
		<h4>
			{{ $item->title }} (<a href="/console/update/{{ $item->id }}">Редактировать страницу</a>) 
		</h4>
	@endforeach
    <form action="/form" method="post">
        <input type="submit" value="Добавить страницу">
    </form>
@endsection
