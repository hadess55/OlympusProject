<header class="bg-white shadow p-4 flex justify-between items-center transition-all duration-300">
    <div class="flex items-center space-x-4">
        <!-- Toggle Sidebar Button -->
        <button @click="$dispatch('toggle-sidebar')"
            class="p-2 rounded bg-gray-200 hover:bg-gray-300 focus:outline-none lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="h-6 w-6 transition-transform duration-200">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <h1 class="text-lg font-semibold">Admin Panel</h1>
    </div>
    <div class="flex items-center space-x-4">
        <input type="text" placeholder="Search..."
            class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-shadow" />
        <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-all duration-200">
            Logout
        </button>
    </div>
</header>
