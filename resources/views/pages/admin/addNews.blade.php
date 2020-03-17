@extends('layouts.main')

@section('title')
    @parent <title>Админка</title>
@endsection

@section('content')
    <div>
        <hr>
        <h2>Добавление новой новости</h2>
        <form action=''>
            <p><input placeholder='Введите название новости' name='text'></p>
            <p><input placeholder='Введите описание новости' name='text'></p>
            <p><input placeholder='Введите краткое описание новости' name='text'></p>
            <p><input type='submit' value='Создать'></p>
        </form>
    </div>
@endsection
