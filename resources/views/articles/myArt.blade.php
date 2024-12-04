@extends('layouts.master')
@section('title', 'Articles')
@section('content')
    <h2 class="text-3xl font-bold mb-6">Mes Articles</h2>
    @if ($articles)
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 p-6 md:px-12 bg-gray-100 rounded-lg shadow-md">
        @foreach ($articles as $article)
            @include('articles.index')
        @endforeach
    </div>
    @else
        <p class="text-gray-500">Pas d'articles disponibles</p>
    @endif
@endsection