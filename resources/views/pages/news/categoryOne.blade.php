@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('content')
    <h1>Категория {{$category['category_ru']}}</h1>
    @forelse ($news as $element)

        <a href="{{route('news::newsOne', ['category' => $category['category_en'], 'id' => $element['id']])}}">{{$element['title']}}</a>
        <br>
    @empty
        Новостей в нет!
    @endforelse
@endsection
