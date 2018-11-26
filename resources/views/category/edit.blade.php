@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	 
		
		<div class="box_general padding_bottom">
			
			 <div class="category-create">

    <h1>Создать категорию</h1>

    
<div class="category-form">

    <form id="w0" action="{{route('category.update', ['id' => $category->id])}}" method="POST" enctype='multipart/form-data'>
    	 @method('PUT')
    	@csrf
	
		<div class="form-group field-category-title required">
			<label class="control-label" for="category-title">Название</label>
			<input type="text" id="category-title" class="form-control" name="title" maxlength="255" aria-required="true" value="{{$category->title}}">

			<div class="help-block"></div>
		</div>
		   
		  
		<div class="form-group">
		    <button type="submit" class="btn btn-success">Изменить</button>    
		</div>

    </form>
</div>

</div>
		</div>
	  </div>
@endsection
