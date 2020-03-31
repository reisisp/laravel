@extends('layouts.main')

@section('title')
    @parent <title>Новости</title>
@endsection

@section('content')
    <div>
        <h1>Категории новостей</h1>
        @foreach($categories as $key => $value)
            <a href="{{route('news::category', ['category' => $value['title']])}}">{{$value['rus']}}</a>
        @endforeach
    </div>
@endsection

