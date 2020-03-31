@extends('layouts.main')

@section('title')
    @parent <title>Админка</title>
@endsection

@section('content')
    <div>
        <h2>Здесь админка</h2>
        <a href="{{route('admin::news::create')}}">Создать новость</a>
    </div>
@endsection
