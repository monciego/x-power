<x-app-layout>
    @section('title', 'Discover')
    <div class="py-10 px-2 sm:px-4 lg:px-8">
        <h2 class="text-2xl font-bold mb-6 text-white">Discover</h2>
        <div class="flex gap-4 md:flex-nowrap flex-wrap">
            <div class="h-[30rem] w-full rounded-lg shadow-md bg-[#1a1f23] p-4 relative">
                <div class=" h-[60%]">
                    <img src="https://images.pexels.com/photos/4857734/pexels-photo-4857734.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="" class="rounded-lg h-full w-full object-cover">
                </div>
                <div class="h-[40%]">
                    <p class="font-medium mt-4 text-gray-100">Our Service</p>
                    <h2 class="text-2xl md:text-3xl font-bold mr-auto cursor-pointer text-gray-200">
                        Break downs won’t break you down anymore.
                    </h2>
                    <button
                        class="my-4 transition ease-in duration-300 inline-flex items-center text-sm font-medium  bg-purple-700 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-md hover:bg-purple-600 ">
                        <span>Explore our services</span>
                    </button>
                </div>
            </div>
            <div class="h-[30rem] w-full  rounded-lg shadow-md bg-[#1a1f23] p-4 relative">
                <div class=" h-[60%]">
                    <img src="https://images.pexels.com/photos/4846392/pexels-photo-4846392.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        alt="" class="rounded-lg h-full w-full object-cover">
                </div>
                <div class="h-[40%]">
                    <p class="font-medium mt-4 text-gray-100">Our Products</p>
                    <h2 class="text-2xl md:text-3xl font-bold mr-auto cursor-pointer text-gray-200">
                        One-stop shopping for all your automotive needs.
                    </h2>
                    <a href="{{ route('user-products.index') }}"
                        class="my-4 transition ease-in duration-300 inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-purple-700 px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-md hover:bg-purple-600 ">
                        <span>Explore our products</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
