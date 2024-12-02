@extends('layouts.master')
@section('content')
<section class="mt-10">
    <h1 class="text-3xl font-bold mb-6">Création d'article</h1>
    <form action="/add" method="post" enctype="multipart/form-data" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
        @csrf
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col space-y-4">
                @include('partials.article-form', [
                    'name' => 'title',
                    'type' => 'text',
                    'label' => "Titre de l'article",
                    'class' => 'border w-full p-2 rounded',
                ])
                @include('partials.article-form', [
                    'name' => 'content',
                    'type' => 'text',
                    'label' => "Description de l'article",
                    'class' => 'border w-full p-2 rounded',
                ])
            </div>
            
            <div class="w-full my-4">
                @include('partials.article-form', [
                    'name' => 'image',
                    'type' => 'file',
                    'label' => 'Visuel de l\'article',
                    'class' => 'w-full p-2 rounded border',
                ])
            </div>
            <div class="w-full my-4">
                @include('partials.article-form', [
                    'name' => 'file_path',
                    'type' => 'file',
                    'label' => 'Fichier PDF',
                    'class' => 'w-full p-2 rounded border',
                ])
            </div>
        </div>

        <button type="submit" class="mt-4 p-2 text-white bg-blue-600 rounded hover:bg-blue-700">Ajouter</button>
    </form>
</section>

    
@endsection
