@extends('pages.admin.main')

@section('content')
    <div>
        <hr>
        <h2>Добавление новой новости</h2>
        <form action='{{route('admin::news::addNews')}}' method="post">
            @csrf
            <label for="title">Название новости<br>
                <input name="title" placeholder='Введите название новости'>
            </label> <br>
            <label for="description">Краткое описание новости<br>
                <input name="description" placeholder='Введите краткое описание новости'>
            </label><br>
            <label for="fullNews">Тело новости<br>
                <textarea name='fullNews' placeholder='Введите новость'></textarea>
            </label><br>
            <b>Новость приватна?</b><br>
            <label>
                <input name="isPrivate" type="radio" value="1" checked>Да
            </label>
            <label>
                <input name="isPrivate" type="radio" value="0">Нет
            </label><br>
            <p><input type='submit' value='Создать'></p>
        </form>
    </div>
@endsection
