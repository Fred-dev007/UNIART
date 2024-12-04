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
            </div>
            <div class="mb-4">
                <label for="choice" class="font-bold block mb-2 text-gray-700">Choisissez un type de contenu</label>
                <div class="flex items-center">
                    <input type="radio" id="contentChoice" name="content_choice" value="text" class="mr-2" checked>
                    <label for="contentChoice" class="mr-4">Utiliser l'éditeur de texte</label>
                    <input type="radio" id="pdfChoice" name="content_choice" value="pdf" class="mr-2">
                    <label for="pdfChoice">Importer un fichier PDF</label>
                </div>
            </div>
            <div id="textEditor">
                <x-forms.tinymce-editor/>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#content'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>
            <div id="pdfUploader" class="hidden">
                @include('partials.article-form', [
                    'name' => 'file_path',
                    'type' => 'file',
                    'label' => 'Fichier PDF',
                    'class' => 'w-full p-2 rounded border',
                    'id' => 'content'
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
                    'name' => 'description',
                    'type' => 'text',
                    'label' => 'Description de l\'article',
                    'class' => 'w-full  p-2 rounded border',
                ])
            </div>
        </div>
        <button type="submit" class="mt-4 p-2 text-white bg-blue-600 rounded hover:bg-blue-700">Ajouter</button>
    </form>
</section>


@endsection
