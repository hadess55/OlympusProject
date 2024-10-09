<x-layout>
    <div class=" font-[sans-serif] lg:h-screen">
        <div class="grid lg:grid-cols-3 items-center max-lg:justify-center gap-6 h-full sm:p-12 p-8 max-sm:p-4">
            <div class="max-w-lg max-lg:mx-auto max-lg:text-center max-lg:mb-6">
                <h2 class="text-white text-4xl font-extrabold">Get In Touch</h2>
                <p class="text-sm text-white mt-4 leading-relaxed">Have a specific inquiry or looking to explore new
                    opportunities? Our
                    experienced team is ready to engage with you.</p>

                <form class="mx-auto mt-8 bg-gray-800 rounded-lg p-6 shadow-md space-y-4">
                    <input type='text' placeholder='Name'
                        class="w-full rounded-md h-12 px-6 bg-[#f0f1f2] text-sm outline-none" />
                    <input type='email' placeholder='Email'
                        class="w-full rounded-md h-12 px-6 bg-[#f0f1f2] text-sm outline-none" />
                    <input type='text' placeholder='Subject'
                        class="w-full rounded-md h-12 px-6 bg-[#f0f1f2] text-sm outline-none" />
                    <textarea placeholder='Message' rows="6" class="w-full rounded-md px-6 bg-[#f0f1f2] text-sm pt-3 outline-none"></textarea>
                    <button type='button'
                        class="text-white bg-blue-600 hover:bg-blue-800 font-semibold rounded-md text-sm px-6 py-3 block w-full hover:scale-105">Send
                        Message</button>
                </form>
            </div>
            <div class="z-10 relative lg:col-span-2 hidden lg:mt-0 lg:flex">
                <img src="https://readymadeui.com/images/analtsis.webp" class="w-3/4 object-contain block mx-auto" />
            </div>
        </div>
    </div>

</x-layout>
