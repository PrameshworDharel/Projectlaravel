<script src="https://cdn.tailwindcss.com"></script>
<div class="flex justify-center items-center h-screen">
    <form class=" shadow-md rounded-lg p-8 max-w-md w-full bg-emerald-950">
        <h2 class="text-2xl font-semibold mb-6 text-center">Login Form</h2>
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
        <div class="flex justify-between mb-4">
            <div class="flex items-center">
                <input type="checkbox" id="remember_me" name="remember_me" class="mr-2">
                <label for="remember_me" class="text-white">Remember me</label>
            </div>
            <a href="{{route('forgotpassword')}}" class="text-blue-500 hover:underline">Forgot password?</a>
        </div>
        <div class="flex justify-center mb-6">
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                <a href="/dashboard" class=" text-white ">Login</a></button>
        </div>
        <div class=" text-center">
            <span class="text-white">Don't have an account?</span>
            <a href="{{route('signup')}}" class="text-blue-500 hover:underline">Sign up</a>
        </div>
    </form>
</div>