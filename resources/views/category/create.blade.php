@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	 
		
		<div class="box_general padding_bottom">
			
			 <div class="category-create">

    <h1>Создать категорию</h1>

    
<div class="category-form">

    <form id="w0" action="{{route('category.store')}}" method="post" enctype='multipart/form-data'>
    	{{csrf_field()}}
	
		<div class="form-group field-category-title required">
		<label class="control-label" for="category-title">Название</label>
		<input type="text" id="category-title" class="form-control" name="title" maxlength="255" aria-required="true">

		<div class="help-block"></div>
		</div>
		    <div class="form-group field-category-img">
		<label class="control-label" for="category-img">Изображение</label>
		<input type="file" id="category-img" class="form-control" name="img" maxlength="255">

		<div class="help-block"></div>
		</div>
		  
		    <div class="form-group">
		        <button type="submit" class="btn btn-success">Отправить</button>    </div>

    </form>
</div>

</div>
		</div>
	  </div>
@endsection
