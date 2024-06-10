@extends('dashboard.index')

@section('content')
<div class="p-10 w-[50%] flex justify-center">
    <div class="bg-white  shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Delete Blog</h2>
        <p class="text-gray-700 mb-6">Are you sure you want to delete this blog post?</p>

        <form action="" method="">


            <div class="flex items-center gap-20">
                <button type="submit"
                    class="bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Delete
                </button>
                <a href="/blogs"
                    class="bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection