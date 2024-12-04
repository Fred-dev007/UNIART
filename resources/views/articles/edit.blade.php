@extends('layouts.master')
@section('content')
<section class="mt-10">
    <h1 class="text-3xl">Edition d'article</h1>
    <form action="{{url('edit/'. $article->id )}}" method="POST" enctype="multipart/form-data" class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">
        @csrf
        @method('patch')
        <div class="flex flex-col space-y-4">
            @include('partials.article-form', [
                'name' => 'title',
                'type' => 'text',
                'label' => "Titre de l'article",
                'class' => 'border w-full p-2 rounded',
                'value'=> $article->title
            ])
    
            @include('partials.article-form', [
                'name' => 'description',
                'type' => 'text',
                'label' => "Description de l'article",
                'class' => 'border w-full p-2 rounded',
                'value'=> $article->description
            ])

            @if ($article->content)
            <textarea id="myeditorinstance"  class ='border w-full p-2 rounded' name ='content'>{!!$article->content!!}</textarea>
            @endif
    
            <div class="w-full">
                @include('partials.article-form', [
                    'name' => 'image',
                    'type' => 'file',
                    'label' => 'Visuel de l\'article',
                    'class' => 'w-full p-2 rounded border',
                    'value'=> $article->image 
                ])
            </div>
            @if ($article->file_path)  
            <div class="w-full">
                @include('partials.article-form', [
                    'name' => 'file_path',
                    'type' => 'file',
                    'label' => 'Fichier PDF',
                    'class' => 'w-full p-2 rounded border',
                    'value'=> "{{ 'storage/'.$article->file_path }}"
                ])
            </div>
            @endif
        </div>
    
        <button type="submit" class="mt-4 p-2 text-white bg-blue-600 rounded hover:bg-blue-700">Modifier</button>
    </form>
    
</section>
    
@endsection
