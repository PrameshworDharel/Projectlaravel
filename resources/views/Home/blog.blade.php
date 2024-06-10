@extends('welcome')

@section('content')
<div class="container mx-auto px-4 lg:px-8 py-8">
    <h1 class="text-3xl font-semibold mb-4">Latest Blogs</h1>
    <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6">
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 1" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 1</h2>
            <p class="text-gray-600 mb-4">Description of Blog 1</p>
            <a href="/moreblogs" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 2" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 2</h2>
            <p class="text-gray-600 mb-4">Description of Blog 2</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 3" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 3</h2>
            <p class="text-gray-600 mb-4">Description of Blog 3</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 4" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 4</h2>
            <p class="text-gray-600 mb-4">Description of Blog 4</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 5" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 5</h2>
            <p class="text-gray-600 mb-4">Description of Blog 5</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 6" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 6</h2>
            <p class="text-gray-600 mb-4">Description of Blog 6</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 7" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 7</h2>
            <p class="text-gray-600 mb-4">Description of Blog 7</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 8" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 8</h2>
            <p class="text-gray-600 mb-4">Description of Blog 8</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image 9" class="mb-4 rounded-md">
            <h2 class="text-xl font-semibold mb-2">Blog Title 9</h2>
            <p class="text-gray-600 mb-4">Description of Blog 9</p>
            <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Read
                More</a>
        </div>
    </div>
</div>
@endsection