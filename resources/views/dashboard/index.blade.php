<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-family bg-gray-100 ">
    <div class="flex h-screen flex-col  ">
        <!-- Top Navbar -->
        <nav class="bg-emerald-950 text-white flex p-4 justify-between items-center">
            <h1 class="text-2xl font-semibold ml-60"><a href="/dashboard"> Welcome to Admin Dashbaord</a>
            </h1>
            <button class="bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </nav>

        <div class="flex flex-1">
            <!-- Sidebar -->
            <aside class="w-64 bg-emerald-950 text-white h-full shadow-lg">
                <nav class="p-10">
                    <ul>
                        <li class="mb-6"><a href="/blogs" class="text-lg font-semibold hover:text-blue-300">Blogs</a>
                        </li>
                        <li class="mb-6"><a class="text-lg font-semibold hover:text-blue-300">Services</a></li>
                        <li class="mb-6"><a class="text-lg font-semibold hover:text-blue-300">Photos</a>
                        </li>
                        <li class="mb-6"><a lass="text-lg font-semibold hover:text-blue-300">Contact Us</a>
                        </li>
                        <li class="mb-6"><a class="text-lg font-semibold hover:text-blue-300">Users</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <div class="flex-1 p-10">
                @yield('content')
            </div>
        </div>

</body>

</html>