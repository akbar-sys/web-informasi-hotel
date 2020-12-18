@extends('layouts.app')
@section('content')

<div class="bg-gray-100 w-screen h-screen font-sans flex flex-row items-center justify-center">
    <div class="w-1/3 p-8 bg-white shadow-lg">
        <img src="{{ $hotel->images }}" alt="{{ $hotel->name }}">
        <h1 class="text-3xl font-bold text-cool-gray-900 mt-8 mb-10">
            {{ $hotel->name }}
        </h1>
        <p class="text-md text-cool-gray-600 mb-4">
            <span class="font-bold">Desc:</span> {{ $hotel->description }}
        </p>
        <p class="text-md text-cool-gray-600 mb-4">
            <span class="font-bold">Address:</span> {{ $hotel->address }}
        </p>
        <p class="text-md text-cool-gray-600 mb-4">
            <span class="font-bold">Phone:</span> {{ $hotel->phone }}
        </p>
        <p class="text-md text-cool-gray-600">
            <span class="font-bold">Email:</span> {{ $hotel->email }}
        </p>
    </div>
    <div class="w-1/3 p-8 bg-white shadow-lg">
        <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
    </div>
</div>
@endsection