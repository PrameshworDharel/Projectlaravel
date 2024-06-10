<!-- resources/views/create.blade.php -->
@extends('dashboard.index')

@section('content')
<div class="p-10">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Edit Blog</h2>
        <form action="{{ route('updateblog', $id->id) }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" value="{{ $id->title }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea name="description" id="description"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>{{ $id->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                <input type="file" name="image" id="image"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <img src="{{ asset('path_to_your_images_folder/' . $id->image) }}" alt="{{ $id->title }}"
                    class="w-20 h-20 object-cover mt-4">
            </div>
            <div class="flex items-center gap-20 mt-10">
                <button type="submit"
                    class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                <a href=""
                    class="bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection