@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('content')
    <h1>{{$newsCard['title']}}</h1>
    <p>{{$newsCard['inform']}}</p>
    <br>
    <a href="{{route('news::category', ['category' => $category])}}">Назад</a>
@endsection
