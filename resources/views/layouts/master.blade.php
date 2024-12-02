<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    
    <div class="flex justify-around p-4 bg-slate-200">
        <h1 class="text-4xl text-blue-400 font-bold">UNIART</h1>
    
        <ul class="flex gap-10 items-center">
            <li class="text-2xl text-blue-600 hover:text-blue-300"><a href="/">Accueil</a></li>
            <li class="text-2xl text-blue-600 hover:text-blue-300"><a href="/articles">Nos articles</a></li>
            @auth
            <li class="text-2xl text-blue-600 hover:text-blue-300"><a href="/add">Nouvel article</a></li>
            @endauth
            <li class="text-2xl text-blue-600 hover:text-blue-300"><a href="/contact">Contact</a></li>
            @guest
            <li>
                <button class="text-white border rounded p-2 text-2xl bg-blue-600 hover:bg-blue-700"><a href="/login">Login</a></button>
            </li>
            <li>
                <button class="text-white border rounded p-2 text-2xl bg-blue-600 hover:bg-blue-700"><a href="/register">Register</a></button>
            </li>
            @endguest
            @auth   
            <li>
                <form action="/logout" method="post">
                    @csrf
                    @method('POST')
                    <button class="bg-red-600 p-2 text-white rounded hover:bg-red-700" type="submit">Logout</button>
                </form>
            </li>
            @endauth
        </ul>
    </div>
    @include('messages.allMessages')
    <main class="mx-auto max-w-screen-2xl p-6">
        @yield('content')
    </main>
    
</body>

</html>
