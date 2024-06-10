<script src="https://cdn.tailwindcss.com"></script>

<div class="flex justify-center items-center h-screen">
    <form class="shadow-md rounded-lg p-8 max-w-md w-full bg-emerald-950">
        <h2 class="text-2xl font-semibold mb-6 text-center">Sign Up Form</h2>
        <div class="mb-4">
            <label for="name" class="block text-white font-bold mb-2">Name</label>
            <input type="text" id="name" name="name"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-white font-bold mb-2">Email</label>
            <input type="email" id="email" name="email"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-white font-bold mb-2">Password</label>
            <input type="password" id="password" name="password"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="flex justify-center mb-6">
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Sign
                Up</button>
        </div>
        <div class="text-center">
            <span class="text-white">Already have an account?</span>
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Sign in</a>
        </div>
    </form>
</div>