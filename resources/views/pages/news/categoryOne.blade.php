@extends('layouts.main')

@section('title')
    @parent <title>Новости</title>
@endsection

@section('content')
    <h1>Категория {{$category['rus']}}</h1>
    @forelse ($news as $key => $value)
        <div>
            <a href="{{route('news::newsOne', ['category' => $category['title'], 'id' => $value['id']])}}">{{$value['title']}}</a>
        </div>
    @empty
        Новостей в нет!
    @endforelse
@endsection
