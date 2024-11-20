<aside x-data="{ minimized: false }" :class="minimized ? 'w-20' : 'w-64'"
    class="bg-gray-800 text-white flex flex-col transition-all duration-300 h-screen fixed top-0 left-0 z-10">
    <!-- Logo -->
    <div class="p-4 flex items-center border-b border-gray-700">
        <button @click="minimized = !minimized" class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 12L6 6" />
            </svg>
        </button>
        <span :class="minimized ? 'hidden' : 'block'" class="ml-2 text-xl font-bold">Admin</span>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
        <a href="#" class="flex items-center py-2 px-3 rounded hover:bg-gray-700 transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 6h18M3 14h18" />
            </svg>
            <span :class="minimized ? 'hidden' : 'inline'" class="ml-2">Dashboard</span>
        </a>
        <!-- More nav links... -->
    </nav>

    <!-- Footer Sidebar -->
    <div class="p-4 border-t border-gray-700">
        <a href="#" class="flex items-center text-sm text-gray-400 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4z" />
            </svg>
            <span :class="minimized ? 'hidden' : 'inline'" class="ml-2">Help Center</span>
        </a>
    </div>
</aside>
