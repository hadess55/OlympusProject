<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-gray-900">

    <div class="flex">
        <!-- Sidebar -->
        <x-app.sidebar />
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col lg:ml-64">
        <!-- Header -->
        <x-app.header />
        <!-- Main Content -->
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>



</body>

</html>
