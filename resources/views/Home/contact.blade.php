@extends('welcome')

@section('content')
<div class="container mx-auto px-4 lg:px-8 py-8 ">
    <h1 class="text-3xl font-semibold mb-4 ">Contact Us</h1>


    <div class="  md:flex-row gap-4">

        <div class="w-full md:w-1/2 text-black shadow-md rounded-lg p-6  bg-emerald-950">
            <h2 class="text-xl font-semibold mb-4 text-white ">Contact Form</h2>
            <form class="p-10">
                <div class="mb-4">
                    <label for="name" class="block text-white font-semibold mb-2">Your Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Enter your name">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-white font-semibold mb-2">Your Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-white font-semibold mb-2">Your Message</label>
                    <textarea id="message" name="message"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" rows="4"
                        placeholder="Enter your message"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit"
                        class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection