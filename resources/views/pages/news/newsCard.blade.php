@extends('layouts.main')

@section('title')
    @parent <title>{{$item['title']}}</title>
@endsection

@section('content')
    <h1>{{ $item['title'] }}</h1>
    <p>{{ $item['content'] }}</p>
    <a href="{{route('news::category', ['category' => $category])}}">Назад</a>
@endsection
