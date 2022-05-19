<!doctype html> 
<html lang="ru">
	<head> 
		<meta charset="UTF-8">
		<title>Фридрих Ницше</title> 
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"><!--подключаем файл стилей-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	
<body>
		<!--блок навигации, одинаковый для все страниц сайта-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
		
			

			<li class="nav-item active">
				<a class="nav-link" href="/">ГЛАВНАЯ</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/about-nitchse">ФРИДРИХ НИЦШЕ</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/novosti">НОВОСТИ</a>
			</li>

			<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ФИЛОСОФИЯ</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="/philosophy/nitchse-philosophy">ФИЛОСОФИЯ НИЦШЕ</a>
						<a class="dropdown-item" href="/philosophy/merezhkovsky-philosophy">ФИЛОСОФИЯ МЕРЕЖКОВСКОГО</a>
						</div>
			</li>
						
				<li class="nav-item">
					<a class="nav-link" href="/photos">ФОТОГРАФИИ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/console">КОНСОЛЬ</a>
				</li>
				
			
		</ul>
		</div>
	</nav>
					
			<!--блок содержит раздел навигации и контент страницы-->		
		<div class="wrapper">			
			<div class="content"> 
				<div class="row">

				@yield('content')

				</div>
			</div>			
		</div>
		
	<footer><!--подвал сайта-->
		<div>
			<p><i>„Я не могу поверить в Бога, который хочет, чтобы его постоянно хвалили“. © Фридрих Ницше</i></p>
		</div>
	</footer>
</body>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>