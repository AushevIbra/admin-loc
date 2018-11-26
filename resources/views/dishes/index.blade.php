@extends('layouts.admin')
@section('content')
<div class="box_general padding_bottom">
    <a href="{{route('dishes.create')}}" class="btn btn-primary">Создать</a>
    <button>test</button>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Цена</th>
                <th class="action-column">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dishes as $key => $item)
            <tr data-key="{{$key}}">
                <td>{{$key + 1}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->price}}</td>
                <td style="display: flex; justify-content: space-around;"><a href="{{route('dishes.show', ['id' => $item->id])}}" title="Info"><span class="fa fa-eye"></span></a>
                    <a href="{{route('dishes.edit', $item->id)}}" title="Update" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"><i class="fa fa-pencil"></i></span></a>
                    <form action="{{ route('dishes.destroy', ['id' => $item->id]) }}" method="post">
                        {!! method_field('delete') !!}
                        {!! csrf_field() !!}
                        <button style="border: none;" type="submit"><a href="javascript:void(0)"><i class="fa fa-trash"></i></a></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

     {{$dishes->links()}}
</div>
@endsection
