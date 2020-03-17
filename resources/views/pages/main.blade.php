@extends('layouts.main')

@section('title')
    @parent <title>Главная</title>
@endsection

@section('content')
    <div>
        <h1>Добро пожаловать на новостной портал {{$name}}</h1>
    </div>
@endsection
