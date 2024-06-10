<!-- resources/views/readmore.blade.php -->
@extends('welcome')

@section('content')
<div class="container mx-auto px-4 lg:px-8 py-8">
    <div class="">
        <h1 class="text-3xl font-semibold mb-4">Blog Title 1</h1>
        <img src="{{ asset('images/choose-img.jpg') }}" alt="Blog Image" class="w-full h-auto rounded-lg mb-4">
        <p class="text-gray-600 text-lg leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Excepturi, fuga aut. Incidunt accusantium id deserunt hic, aliquam inventore aut laudantium vitae soluta
            nisi tempora sint similique temporibus repudiandae, consequuntur tempore.</p>
    </div>
    <div class="flex justify-end mt-5">
        <button class=" px-5 py-2 bg-emerald-600 text-center shadow-lg rounded-md ">
            <a href="/blog">Back</a>
        </button>
    </div>
</div>
@endsection