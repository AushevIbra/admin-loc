@extends('layouts.admin')
@section('content')
<div class="container-fluid">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="box_general padding_bottom">
        <div class="dishes-create">
            <h1>Создать категорию</h1>
            <div class="dishes-form">
                <form id="w0" action="{{route('dishes.store')}}" method="post" enctype='multipart/form-data'>
                    {{csrf_field()}}
                    <div class="form-group field-dishes-title required">
                        <label class="control-label" for="dishes-title">Название</label>
                        <input type="text" id="dishes-title" class="form-control" name="title" maxlength="255" aria-required="true">
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group field-dishes-title required">
                        <label class="control-label" for="dishes-title">Описание</label>
                        <textarea class="form-control" name="description"></textarea>
                        <div class="help-block"></div>
                    </div>

					<div class="form-group field-dishes-title required">
                        <label class="control-label" for="dishes-title">Категория</label>
                        <select name="category" class="form-control">
                        	@foreach($category as $item)
								<option value="{{$item->id}}">{{$item->title}}</option>
                        	@endforeach
                        </select>
                        <div class="help-block"></div>
                    </div>

                     <div class="form-group field-dishes-title required">
                        <label class="control-label" for="dishes-title">Цена</label>
                        <input type="number" class="form-control" name="price" />
                        <div class="help-block"></div>
                    </div>

                    <div class="form-group field-dishes-img">
                        <label class="control-label" for="dishes-img">Изображение</label>
                        <input type="file" id="dishes-img" class="form-control" name="img" maxlength="255">
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Отправить</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
