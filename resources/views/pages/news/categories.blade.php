@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('content')
    <div>
        <h1>Категории новостей</h1>
        @foreach($categories as $key => $value)
            <a href="{{route('news::category', ['category' => $key])}}">{{$value}}</a>
        @endforeach
    </div>
@endsection

