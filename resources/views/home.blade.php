<x-layout>
    <section>
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <!-- Tambahkan animasi fade-in pada teks -->
                <h1
                    class="text-white max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white animate-fade-in hover:scale-105 hover:text-purple-500 transition-all duration-300 ease-in-out">
                    Buat Websitemu Di Olympus Project
                </h1>
                <p
                    class="max-w-2xl mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 animate-fade-in-delayed hover:text-pink-500 transition-all duration-300 ease-in-out">
                    From checkout to global sales tax compliance, companies around the world use Flowbite to simplify
                    their payment stack.
                </p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-black dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to Sales
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex relative group">
                <div
                    class="absolute inset-0 w-68 h-68 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-lg opacity-75 transition duration-300 ease-in-out group-hover:scale-110 group-hover:opacity-100">
                </div>
                <img src={{ asset('images/hero.png') }} alt="mockup"
                    class="relative z-10 opacity-90 transition-transform duration-300 ease-in-out group-hover:scale-105">
            </div>
        </div>
    </section>

    <div class="mb-10">
        <h2
            class="text-center text-white my-9 text-4xl font-extrabold dark:text-white animate-fade-in hover:scale-105 hover:text-purple-500 transition-all duration-300 ease-in-out">
            Tools
        </h2>
        <p class="text-center my-5 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. At cupiditate
            accusamus
            nesciunt amet hic laboriosam
            veniam autem architecto accusantium! Temporibus rem velit eum nostrum corrupti optio, deserunt quibusdam
            vero sint.</p>
        <div class="flex overflow-hidden space-x-16 group">
            <div class="flex space-x-16 animate-loop-scroll group-hover:paused">
                <img loading="lazy" src={{ asset('icons/react.png') }} class="max-w-none" alt="Image 1" />
                <img loading="lazy" src={{ asset('icons/tailwind.png') }} class="max-w-none" alt="Image 2" />
                <img loading="lazy" src={{ asset('icons/laravel.png') }} class="max-w-none" alt="Image 3" />
                <img loading="lazy" src={{ asset('icons/vite.png') }} class="max-w-none" alt="Image 4" />
                <img loading="lazy" src={{ asset('icons/boostrap.png') }} class="max-w-none" alt="Image 5" />
                <img loading="lazy" src={{ asset('icons/mysql.png') }} class="max-w-none" alt="Image 6" />
                <img loading="lazy" src={{ asset('icons/firebase.png') }} class="max-w-none" alt="Image 7" />
                <img loading="lazy" src={{ asset('icons/js.png') }} class="max-w-none" alt="Image 8" />
                <img loading="lazy" src={{ asset('icons/node.png') }} class="max-w-none" alt="Image 9" />
                <img loading="lazy" src={{ asset('icons/fluter.png') }} class="max-w-none" alt="Image 10" />
            </div>
            <div class="flex space-x-16 animate-loop-scroll group-hover:paused" aria-hidden="true">
                <img loading="lazy" src={{ asset('icons/react.png') }} class="max-w-none" alt="Image 1" />
                <img loading="lazy" src={{ asset('icons/tailwind.png') }} class="max-w-none" alt="Image 2" />
                <img loading="lazy" src={{ asset('icons/laravel.png') }} class="max-w-none" alt="Image 3" />
                <img loading="lazy" src={{ asset('icons/vite.png') }} class="max-w-none" alt="Image 4" />
                <img loading="lazy" src={{ asset('icons/boostrap.png') }} class="max-w-none" alt="Image 5" />
                <img loading="lazy" src={{ asset('icons/mysql.png') }} class="max-w-none" alt="Image 6" />
                <img loading="lazy" src={{ asset('icons/firebase.png') }} class="max-w-none" alt="Image 7" />
                <img loading="lazy" src={{ asset('icons/js.png') }} class="max-w-none" alt="Image 8" />
                <img loading="lazy" src={{ asset('icons/node.png') }} class="max-w-none" alt="Image 9" />
                <img loading="lazy" src={{ asset('icons/fluter.png') }} class="max-w-none" alt="Image 10" />
            </div>
        </div>
    </div>


</x-layout>
