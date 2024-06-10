@extends('dashboard.index')
@section('content')
<main class="flex-1 p-10">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-10">Dashboard</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <!-- Total Blogs Card -->
            <div class="bg-blue-100 shadow-md rounded-lg p-4 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-medium">Total Blogs</h3>
                    <p class="text-3xl font-semibold">2</p>
                </div>

            </div>
            <!-- Total Services Card -->
            <div class="bg-green-100 shadow-md rounded-lg p-4 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-medium">Total Services</h3>
                    <p class="text-3xl font-semibold">2</p>
                </div>

            </div>
            <!-- User Photos Card -->
            <div class="bg-yellow-100 shadow-md rounded-lg p-4 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-medium">User Photos</h3>
                    <p class="text-3xl font-semibold">6</p>
                </div>

            </div>
        </div>

        <!-- User Details Section -->
        <div class=" bg-pink-800 shadow-md rounded-lg p-4 flex items-center justify-between">
            <div>
                <h3 class="text-lg font-medium">Total User</h3>
                <p class="text-3xl font-semibold">5</p>
            </div>

        </div>
    </div>
    </div>
</main>
@endsection