@extends('layouts.admin')

@section('content')
<div class="box_general padding_bottom">
      <a href="{{route('category.create')}}" class="btn btn-primary">Создать</a>
	  <table class="table table-striped table-bordered">
	  	<thead>
			<tr>
				<th>#</th><th>Название</th><th>Статус</th><th class="action-column">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($category as $key => $item)
				<tr data-key="{{$key}}">
					<td>{{$key + 1}}</td><td>{{$item->title}}</td>
					<td>{{$item->published == '0' ? 'Активна' : 'Отключена'}}</td>
					<td style="display: flex; justify-content: space-around;"><a href="{{route('category.show', ['id' => $item->id])}}" title="Info"><span class="fa fa-eye"></span></a> 
						<a href="{{route('category.edit', $item->id)}}" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"><i class="fa fa-pencil"></i></span></a> 
												
	

						<form action="{{ route('category.destroy', ['id' => $item->id]) }}" method="post">
						    {!! method_field('delete') !!}
						    {!! csrf_field() !!}
						 
                    		<button style="border: none;" type="submit"><a href="javascript:void(0)"><i class="fa fa-trash"></i></a></button>
						</form>
					</td>
				</tr>
      		@endforeach
		</tbody>
	  </table>
      
</div>
@endsection

