@extends('layouts.master')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-3xl font-bold mt-5 mb-4">Titre: {{$article->title}}</h1>
    <p class="text-lg mb-6">Description: {{$article->content}}</p>
    <div class="flex gap-4 justify-between mb-6">
        <div class="flex gap-3 ">
            <a class="bg-blue-500 text-white border rounded p-2 hover:bg-blue-600" href="/edit/{{ $article->id }}">Éditer l'article</a>
            <form action="/article/{{ $article->id }}/delete" method="POST">
                @csrf
                @method('DELETE')
                <input class="text-white bg-red-500 border rounded p-2 hover:bg-red-600" type="submit" value="Supprimer l'article">
            </form></div>

        
        
    </div>
    @if ($article->file_path)
        <iframe src="{{ asset('storage/'.$article->file_path ) }}" class="w-full h-[500px] border rounded" frameborder="0"></iframe>
        <div class="m-5">
            <a class="bg-green-500 text-white border rounded p-2 hover:bg-green-600" href="" download="{{ asset('storage/'.$article->file_path ) }}">Télécharger le pdf</a>
        </div>
    @else
        <span class="text-gray-500">Aucun PDF associé</span>
    @endif
</div>
@endsection
