<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<h1>Список статей</h1>
@foreach ($articles as $article)
<a href="/articles/{{$article->id}}" <h2>{{$article->name}}</h2> </a>
<div>{{ Str::limit($article->body, 20) }}</div>
@endforeach
{{$articles->links()}}
@endsection