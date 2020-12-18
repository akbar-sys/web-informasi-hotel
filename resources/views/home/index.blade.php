<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans bg-image-repeat sm:bg-image">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/dashboard') }}" class="no-underline hover:underline text-sm font-normal text-gray-500 hover:text-gray-200 uppercase">{{ __('Dashboard') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-gray-400 hover:text-gray-200 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-gray-400 hover:text-gray-200 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center mt-32">
        <div class="flex flex-col justify-around h-full w-full">
            <h1 class="mb-6 text-gray-100 text-center font-light tracking-wider text-5xl">
                {{ config('app.name') }}
            </h1>
            <div class="flex flex-col items-center justify-center">
                <form class="flex w-11/12 sm:w-1/2" action="">
                    <input class="form-input rounded-none w-full" type="search">
                    <button class="bg-red-700 text-white p-3" type="submit">Search</button>
                </form>
                <section class="w-2/3 mt-8 grid grid-cols-1 grid-rows-3 sm:grid-cols-3 sm:grid-rows-2 gap-4">
                    @foreach ($hotels as $htt)
                    <a href="{{ route('home.show', $htt->id) }}">
                        <div class="w-full bg-white flex flex-col mx-auto shadow-lg cursor-pointer transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                            <h1 class="text-xl font-bold bg-cool-gray-900 text-cool-gray-100 p-4">{{ $htt->name }}</h1>
                            <img src="{{$htt->images}}" alt="" srcset="">
                            <p class="text-sm font-bold text-cool-gray-500 m-4">{{ truncateString($htt->description, 80, true) }}</p>
                        </div>
                    </a>
                    @endforeach
                </section>
                <div class="my-4"> {!! $hotels->links() !!} </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
