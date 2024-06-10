@extends('welcome')

@section('content')
<div class="container mx-auto px-4 lg:px-8 py-8">
    <h1 class="text-3xl font-semibold mb-4">Photos</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Photo 1" class="w-full h-auto rounded-md">
            <div class="mt-2 text-center">
                <h2 class="text-lg font-semibold">Photo 1</h2>
                <p class="text-sm text-gray-500">Description of Photo 1</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Photo 2" class="w-full h-auto rounded-md">
            <div class="mt-2 text-center">
                <h2 class="text-lg font-semibold">Photo 2</h2>
                <p class="text-sm text-gray-500">Description of Photo 2</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Photo 3" class="w-full h-auto rounded-md">
            <div class="mt-2 text-center">
                <h2 class="text-lg font-semibold">Photo 3</h2>
                <p class="text-sm text-gray-500">Description of Photo 3</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Photo 4" class="w-full h-auto rounded-md">
            <div class="mt-2 text-center">
                <h2 class="text-lg font-semibold">Photo 4</h2>
                <p class="text-sm text-gray-500">Description of Photo 4</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Photo 5" class="w-full h-auto rounded-md">
            <div class="mt-2 text-center">
                <h2 class="text-lg font-semibold">Photo 5</h2>
                <p class="text-sm text-gray-500">Description of Photo 5</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Photo 6" class="w-full h-auto rounded-md">
            <div class="mt-2 text-center">
                <h2 class="text-lg font-semibold">Photo 6</h2>
                <p class="text-sm text-gray-500">Description of Photo 6</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Photo 7" class="w-full h-auto rounded-md">
            <div class="mt-2 text-center">
                <h2 class="text-lg font-semibold">Photo 6</h2>
                <p class="text-sm text-gray-500">Description of Photo 7</p>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Photo 8" class="w-full h-auto rounded-md">
            <div class="mt-2 text-center">
                <h2 class="text-lg font-semibold">Photo 7</h2>
                <p class="text-sm text-gray-500">Description of Photo 9</p>
            </div>
        </div>


    </div>
</div>
@endsection