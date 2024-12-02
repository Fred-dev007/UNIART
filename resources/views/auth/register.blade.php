<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Register</title>
</head>

<body>
    <div>
        <div class="absolute top-12 left-16 p-10 text-5xl text-blue-400">
            <h1>UNIART</h1>

        </div>

        <div class="max-w-sm mx-auto px-6 mt-52">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="mt-6">
                        <div class="text-center font-semibold text-blue-400 text-2xl">
                            Inscription
                        </div>

                        <form class="mt-8" method="post">
                            @csrf
                            <div class="mx-auto max-w-lg">
                                <div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">Name</span>
                                    <input placeholder="" type="text" name="name"
                                        class="text-md block px-3 py-2  rounded-lg w-full 
                      bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                      @error('name')
                       <div class='text-red-600'>{{ $message }}</div>   
                      @enderror
                                </div>
                                <div class="mx-auto max-w-lg">
                                    <div class="py-2">
                                        <span class="px-1 text-sm text-gray-600">Email</span>
                                        <input placeholder="" type="text" name="email"
                                            class="text-md block px-3 py-2  rounded-lg w-full 
                      bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                      @error('email')
                       <div class='text-red-600'>{{ $message }}</div>   
                      @enderror
                                    </div>
                                    <div class="py-2" x-data="{ show: true }">
                                        <span class="px-1 text-sm text-gray-600">Password</span>
                                        <div class="relative">
                                            <input name="password" placeholder="" type="password"
                                                class="text-md block px-3 py-2 rounded-lg w-full 
                      bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md
                      focus:placeholder-gray-500
                      focus:bg-white 
                      focus:border-gray-600  
                      focus:outline-none">
                      @error('password')
                       <div class='text-red-600'>{{ $message }}</div>   
                      @enderror
                                            <div
                                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between"> <button
                                        class="mt-3 text-lg font-semibold 
                      bg-blue-800 w-full text-white rounded-lg
                      px-6 py-3 block shadow-xl hover:text-white hover:bg-blue-600">
                                        S'inscrire
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
