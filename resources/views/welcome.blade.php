<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-family">
    <header>
        <nav class="w-full bg-emerald-950">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="flex items-center justify-between py-4">
                    <div class="flex items-center">
                        <a href="{{route('home')}}" class="text-lg font-semibold text-white hover:text-blue-300">Home</a>
                        <ul class="hidden lg:flex ml-20 gap-20">
                            <li><a href="{{route('blog')}}" class="text-lg font-semibold text-white hover:text-blue-300">Blogs</a>
                            </li>
                            <li><a href="{{route('services')}}" class="text-lg font-semibold text-white hover:text-blue-300">Services</a>
                            </li>
                            <li><a href="{{route('photos')}}" class="text-lg font-semibold text-white hover:text-blue-300">Photos</a></li>
                            <li><a href="{{route('contact')}}" class="text-lg font-semibold text-white hover:text-blue-300">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex items-center">
                        <a href="{{route('login')}}" class="hidden lg:block text-lg font-semibold text-white bg-blue-700 px-5 py-2 rounded-full hover:bg-blue-800 transition duration-300 transform hover:scale-105">Login</a>
                        <button class="lg:hidden text-white ml-auto" onclick="toggleMenu()">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <ul id="mobile-menu" class="hidden lg:hidden ml-20 gap-20">
                    <li><a href="#" class="text-lg font-semibold text-white hover:text-blue-300">Blogs</a></li>
                    <li><a href="#" class="text-lg font-semibold text-white hover:text-blue-300">Services</a></li>
                    <li><a href="#" class="text-lg font-semibold text-white hover:text-blue-300">Photos</a></li>
                    <li><a href="#" class="text-lg font-semibold text-white hover:text-blue-300">Contact Us</a></li>
                    <li><a href="#" class="text-lg font-semibold text-white bg-blue-700 px-5 py-2 rounded-full hover:bg-blue-800 transition duration-300 transform hover:scale-105">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

        <script>
            function toggleMenu() {
                var menu = document.getElementById("mobile-menu");
                menu.classList.toggle("hidden");
            }
        </script>

    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5 bg-emerald-950 text-white">
        <div class="flex flex-wrap justify-between p-10 lg:p-20">
            <div class="w-full lg:w-1/3 mb-10 lg:mb-0">
                <img src="{{ asset('images/paradise-logo.png') }}" class="mb-4" />
                <p class="w-full lg:w-60 mt-4">We always wanted to be recognized as a global brand so, we based our
                    headquarter at Germany, Stuttgart and all our venture companies at Australia but having all the
                    development activities from Nepal.</p>
                <div class="mt-10">
                    <button class="rounded-md bg-white text-black px-9 py-3">
                        <h1 class="font-bold text-2xl">Talk to Our Support</h1>
                        <h2>014543023, 9851199432</h2>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-1/3 mb-10 lg:mb-0">
                <div class="text-bold text-2xl">Our Services</div>
                <div class="mt-4 lg:mt-10">
                    <div class="mt-2 lg:mt-5">About Us</div>
                    <div class="mt-2 lg:mt-5">Our Dedicated Team</div>
                    <div class="mt-2 lg:mt-5">Our Clients</div>
                    <div class="mt-2 lg:mt-5">Our Services</div>
                    <div class="mt-2 lg:mt-5">Our Projects</div>
                    <div class="mt-2 lg:mt-5">Blog</div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 mb-10 lg:mb-0">
                <div class="text-bold text-2xl">Useful Links</div>
                <div class="mt-4 lg:mt-10">
                    <div class="mt-2 lg:mt-5">About Us</div>
                    <div class="mt-2 lg:mt-5">Contact Us</div>
                    <div class="mt-2 lg:mt-5">Our Dedicated Team</div>
                    <div class="mt-2 lg:mt-5">Our Clients</div>
                    <div class="mt-2 lg:mt-5">Payment Gateway</div>
                    <div class="mt-2 lg:mt-5">Our Services</div>
                    <div class="mt-2 lg:mt-5">Careers</div>
                </div>
            </div>
        </div>
        <div class="p-10">
            <hr class="mx-5 lg:mx-36">
        </div>
        <div class="text-center mt-2 pb-4">
            © 2024 Paradise IT Solutions.
        </div>
    </footer>
</body>

</html>zz