@extends('welcome')

@section('content')
<div class="container mx-auto mt-5">
    <div class="flex flex-wrap -mx-4 mt-20">
        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('images/choose-img.jpg')}}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h5 class="text-lg font-bold mb-2">Title One</h5>
                    <p class="text-gray-700">Details about Title One.</p>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('images/choose-img.jpg')}}" class="w-full h-48 object-cover" alt="Title Two">
                <div class="p-6">
                    <h5 class="text-lg font-bold mb-2">Title Two</h5>
                    <p class="text-gray-700">Details about Title Two.</p>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('images/choose-img.jpg')}}" class="w-full h-48 object-cover" alt="Title Three">
                <div class="p-6">
                    <h5 class="text-lg font-bold mb-2">Title Three</h5>
                    <p class="text-gray-700">Details about Title Three.</p>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('images/choose-img.jpg')}}" class="w-full h-48 object-cover" alt="Title Four">
                <div class="p-6">
                    <h5 class="text-lg font-bold mb-2">Title Four</h5>
                    <p class="text-gray-700">Details about Title Four.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection