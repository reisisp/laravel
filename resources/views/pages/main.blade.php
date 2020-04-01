@extends('layouts.main')

@section('title')
    @parent Главная
@endsection

@section('content')
    <div>
        <h1>Добро пожаловать на новостной портал {{$name}}</h1>
    </div>
@endsection
