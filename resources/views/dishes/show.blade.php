@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="box_general padding_bottom">
        <div class="dishes-view">
            <h1>{{$dishes->title}}</h1>
            <div style="display: flex;">
                <a class="btn btn-danger m-2" href="{{route('dishes.edit', $dishes->id)}}">Изменить</a>
                <form class="m-2" action="{{ route('dishes.destroy', ['id' => $dishes->id]) }}" method="post">
                    {!! method_field('delete') !!}
                    {!! csrf_field() !!}
                    <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
            </div>
            <table id="w0" class="table table-striped table-bordered detail-view">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{$dishes->id}}</td>
                    </tr>
                    <tr>
                        <th>Название</th>
                        <td>{{$dishes->title}}</td>
                    </tr>
                    <!-- <tr><th>Изображение</th><td>qwe</td></tr> -->
                    <tr>
                        <th>Описание</th>
                        <td>{{$dishes->description}}</td>
                    </tr>

                    <tr>
                        <th>Цена</th>
                        <td>{{$dishes->price}}</td>
                    </tr>

                    <tr>
                        <th>Категория</th>
                        <td>{{$cat->title}}</td>
                    </tr>

                    <tr>
                        <th>Изображение</th>
                        <td>
                        	<img src="{{asset('/storage/' . $dishes->img)}}" class="img-thumbnail" style="max-width: 200px;">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
