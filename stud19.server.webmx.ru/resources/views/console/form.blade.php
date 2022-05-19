<!-- 
	используем одну форму и для добавления и для обновления записи
-->
<form class="console" action="/admin/modification" method="post" enctype="multipart/form-data">
	
	<input type="text" placeholder="Название" name="title" value="{{ isset($data->title)? $data->title : '' }}"><p>	
	<div class="InsertClass">
			<input type="button" id="bold" value="B">
			<input type="button" id="italic" value="I">
			<input type="button" id="underline" value="U">
			<input type="button" id="Alink" value="A">
			<input type="button" id="paragraph" value="P">
			<input type="button" id="HeaderFirLvl" value="H1">
			<input type="button" id="HeaderSecLvl" value="H2">
	</div>
	<textarea id="TArea" name="content">{{ isset($data->content)? $data->content : '' }}</textarea><p>
	<input type="text" placeholder="Имя" name="name" value="{{ isset($data->name)? $data->name : '' }}"><p>
	<input type="text" placeholder="Дата" name="" value="{{ isset($data->date)? $data->date : '' }}" readonly><p>
	<input type="text" placeholder="Ссылка" name="guid" value="{{ isset($data->guid)? $data->guid : '' }}" ><p>	
	<input type="text" placeholder="Изображение" name="path" value="{{ isset($data->img)? $data->img : '' }}" readonly><p>	
	<input type="file" name="image" /><p>
	
	<!-- 
	в скрытых полях храним некоторую служебную информацию, скрытую от глаз пользователя
		1) parent - если добавляем новую запись, нужен идентификатор родительской записи
		2) id - если обновляем запись, нужен первичный ключ обновляемой записи
	-->
	<input type="hidden" name="parent" value="{{ isset($parent)? $parent : '' }}"><p>
	<input type="hidden" name="id" value="{{ isset($data->id)? $data->id : '' }}"><p>	
	<!--...-->
	<div class="ButtonColours">
	<input type="submit" value="{{ isset($data)? 'Изменить' : 'Добавить' }}"><p>	
	</div>
	@csrf
	
</form>
<script type="text/javascript" src="/js/StyleConsole.js"></script>
