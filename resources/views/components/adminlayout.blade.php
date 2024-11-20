<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <div class="flex">
        <!-- Sidebar -->
        <x-app.sidebar />

        <!-- Main Content -->
        <div :class="minimized ? 'ml-20' : 'ml-64'" class="flex-1 transition-all duration-300">
            <x-app.header />
            <main class="p-6">
                @yield('content')
            </main>
        </div>

    </div>

</body>

</html>
