@extends('layouts.master')

@section('title', 'Profil')

@section('content')
<section class="mt-10">
    <h1 class="text-3xl font-bold mb-6">Profil de l'utilisateur</h1>
    <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
        <div class="mb-4">
            <label class="font-bold block mb-2 text-gray-700">Nom</label>
            <p class="border w-full p-2 rounded">{{ $user->name }}</p>
        </div>
        <div class="mb-4">
            <label class="font-bold block mb-2 text-gray-700">Email</label>
            <p class="border w-full p-2 rounded">{{ $user->email }}</p>
        </div>
    </div>
</section>
@endsection
