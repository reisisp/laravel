@extends('layouts.main')

@section('title')
    @parent Контакты
@endsection

@section('content')
    <div>
        <h2>Здесь контакты</h2>
        @include('elements.contactsPage.feedback')
    </div>
@endsection
