@extends('dashboard.index')

@section('content')

<div class="p-10">

    <div class="flex justify-end mb-4">
        <a href="{{ route('createblogs') }}" class="bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add Blog
        </a>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        S.N
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Image
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Title
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Description
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-5 py-5 bg-white text-sm">
                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="w-20 h-20 object-cover">
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $blog->title }}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $blog->description }}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="{{ route('editblogs', $blog->id) }}"
                            class="bg-blue-500 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>


                        <a href="{{ route('deleteblog', $blog->id) }}"> <button
                                class="bg-red-500 text-white font-bold py-2 px-4 rounded">Delete</button> </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection