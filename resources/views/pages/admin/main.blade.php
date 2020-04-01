@extends('layouts.main')

@section('title')
    @parent Админка
@endsection

@section('content')
    <div>
        <h2>Здесь админка</h2>
        <a href="{{route('admin::news::addNews')}}">Создать новость</a> <br>
        <a href="{{route('admin::news::getData')}}">Запрос на выгрузку новостей</a>
    </div>
@endsection
