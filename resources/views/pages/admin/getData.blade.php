@extends('pages.admin.main')

@section('content')
    <div>
        <hr>
        <h2>Запрос на выгрузку данных</h2>
        <form action='{{route('admin::news::getData')}}' method="post">
            @csrf
            <label for="name">Введите ФИО:<br>
                <input name="name" placeholder='Введите ФИО'>
            </label> <br>
            <label for="telephone">Телефон в формате 8-ххх-ххх-хххх:<br>
                <input type="tel" name="telephone" pattern="8-[0-9]{3}-[0-9]{3}-[0-9]{4}">
            </label><br>
            <label for="email">Электронный адрес:<br>
                <input type="email" required name="email">
            </label><br>
            <label for="information">Суть запроса<br>
                <textarea name='information' placeholder='Подробно опишите ваш запрос'></textarea>
            </label><br>
            <p><input type='submit' value='Отправить'></p>
        </form>
    </div>
@endsection
