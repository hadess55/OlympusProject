<x-layout>
    <section>
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
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
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 hover:text-black dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
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
        <div class="flex flex-col justify-center p-4 text-center space-y-4 my-10">
            <h2
                class="text-4xl font-bold text-white animate-fade-in tracking-wide hover:text-purple-500 hover:scale-105 transition-transform duration-300 ease-in-out">
                Tools
            </h2>
            <p
                class="text-lg text-gray-300 leading-relaxed animate-fade-in-delayed hover:text-pink-500 hover:translate-y-1 transition-transform duration-300 ease-in-out">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias omnis quo ex ab doloribus debitis
                beatae facilis ratione odit quaerat accusamus, maxime ducimus quam qui animi voluptatibus ipsam dolore
                doloremque.
            </p>
        </div>
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



    <h2 class="my-10 text-center text-4xl font-bold text-white">Services</h2>
    <!-- Slider -->
    <div data-hs-carousel='{
    "loadingClasses": "opacity-0",
    "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer",
    "slidesQty": {
      "xs": 1,
      "lg": 3
    },
    "isDraggable": true
  }'
        class="relative">
        <div class="hs-carousel w-full overflow-hidden rounded-lg mb-20">
            <div class="relative min-h-72 -mx-1">
                <div
                    class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 cursor-grab transition-transform duration-700 hs-carousel-dragging:transition-none hs-carousel-dragging:cursor-grabbing">
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-100 p-6 rounded-lg">
                            <span class="self-center text-sm text-gray-800 transition duration-700">First slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-200 p-6 rounded-lg">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Second slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-300 p-6 rounded-lg">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Third slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-100 p-6 rounded-lg">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Fourth slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-200 p-6 rounded-lg">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Fifth slide</span>
                        </div>
                    </div>
                    <div class="hs-carousel-slide px-1">
                        <div class="flex justify-center h-full bg-gray-300 p-6 rounded-lg">
                            <span class="self-center text-sm text-gray-800 transition duration-700">Sixth slide</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button"
            class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
    </div>
    <!-- End Slider -->

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-20">
        <div class="relative overflow-hidden">
            <div id="carouselSlides" class="flex transition-transform duration-500">
                <div class="min-w-full flex justify-center">
                    <div
                        class="relative border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[500px] w-[250px] shadow-xl">
                        <div
                            class="w-[128px] h-[16px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute">
                        </div>
                        <div class="rounded-[2rem] overflow-hidden w-[232px] h-[472px] bg-white dark:bg-gray-800">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-light.png"
                                class="dark:hidden w-[232px] h-[472px]" alt="Mockup 1">
                            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/mockup-2-dark.png"
                                class="hidden dark:block w-[232px] h-[472px]" alt="Mockup 1">
                        </div>
                    </div>
                </div>
                <div class="min-w-full flex justify-center ">
                    <div
                        class="relative border-gray-800 dark:border-gray-800 bg-gray-800 border-[8px] rounded-t-xl h-[400px] w-[600px] shadow-xl ">
                        <div class="rounded-lg overflow-hidden w-full h-full bg-white dark:bg-gray-800">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/laptop-screen.png"
                                class="dark:hidden w-full h-full rounded-lg" alt="Mockup 2">
                            <img src="https://flowbite.s3.amazonaws.com/docs/device-mockups/laptop-screen-dark.png"
                                class="hidden dark:block w-full h-full rounded-lg" alt="Mockup 2">
                        </div>
                    </div>
                </div>
            </div>

            <button id="prevButton"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full ml-3">
                &#10094;
            </button>
            <button id="nextButton"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full">
                &#10095;
            </button>
        </div>
        <div class="flex flex-col justify-center p-4 text-right space-y-4 mr-5">
            <h2
                class="text-4xl font-bold text-white animate-fade-in tracking-wide hover:text-purple-500 hover:scale-105 transition-transform duration-300 ease-in-out">
                Buat Websitemu Responsif
            </h2>
            <p
                class="text-lg text-gray-300 leading-relaxed animate-fade-in-delayed hover:text-pink-500 hover:translate-y-1 transition-transform duration-300 ease-in-out">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias omnis quo ex ab doloribus debitis
                beatae facilis ratione odit quaerat accusamus, maxime ducimus quam qui animi voluptatibus ipsam dolore
                doloremque.
            </p>
        </div>


    </div>





</x-layout>
