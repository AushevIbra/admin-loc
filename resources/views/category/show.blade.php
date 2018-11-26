@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	 
		
		<div class="box_general padding_bottom">
			
			 <div class="category-view">

    <h1>Пицца</h1>

    <div style="display: flex;">
    	<a class="btn btn-danger m-2" href="{{route('category.edit', $category->id)}}">Изменить</a>  
        <form class="m-2" action="{{ route('category.destroy', ['id' => $category->id]) }}" method="post">
			{!! method_field('delete') !!}
			{!! csrf_field() !!}
						 
            <button class="btn btn-danger" type="submit">Удалить</button>
		</form>       
          
    </div>

	    <table id="w0" class="table table-striped table-bordered detail-view">
	    	<tbody><tr><th>ID</th><td>{{$category->id}}</td></tr>
				<tr><th>Название</th><td>{{$category->title}}</td></tr>
				<!-- <tr><th>Изображение</th><td>qwe</td></tr> -->
				<tr><th>Описание</th><td>{{$category->description}}</td></tr>
			</tbody>
		</table>
</div>
		</div>
	  </div>
@endsection
