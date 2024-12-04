<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Connexion</title>

</head>

<body>
    <div>
        <div class="absolute top-12 left-16 p-10 text-5xl text-blue-400">
            <h1 class="text-4xl text-blue-400 font-bold">UNIART</h1>
        </div>

        <div class="max-w-sm mx-auto px-6 mt-52">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="mt-6">
                        <div class="text-center font-semibold text-blue-400 text-2xl">
                            Connexion
                        </div>

                        <form class="mt-8" method="POST">
                            @csrf
                            <div class="mx-auto max-w-lg">
                                <div class="py-2">
                                    <label for="email" class="px-1 text-sm text-gray-600">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                    @error('email')
                                    <div class='text-red-600'>{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <label for="password" class="px-1 text-sm text-gray-600">Password</label>
                                    <div class="relative">
                                        <input type="password" name="password" id="password"
                                            class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                                        @error('password')
                                        <div class='text-red-600'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <label class="block text-gray-500 font-bold my-4">
                                        <input type="checkbox" class="leading-loose text-pink-600">
                                        <span class="py-2 text-sm text-gray-600 leading-snug">Remember Me</span>
                                    </label>
                                    <label class="block text-gray-500 font-bold my-4">
                                        <a href="/register"
                                            class="cursor-pointer tracking-tighter text-blue-500 border-b-2 border-gray-200 hover:border-gray-400">
                                            <span>You have account?</span>
                                        </a>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="mt-3 text-lg font-semibold bg-blue-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-blue-600">
                                    Login
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>
