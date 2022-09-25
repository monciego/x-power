<x-app-layout>
    <div class="px-2 md:px-40">
        <form>
            <h2 class="mb-4 font-medium text-lg">Add Product</h2>

            <div class=" mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-300">
                    Product Name
                </label>
                <input type="email" id="email"
                    class="shadow-sm  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white shadow-sm-light"
                    required="">
            </div>
            <div class="mb-6">
                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-300">
                    Product Price
                </label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5  text-gray-400" viewBox="0 0 36 36" version="1.1" fill="rgb(156, 163 ,175)"
                            preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>peso-solid</title>
                            <path d="M14.18,13.8V16h9.45a5.26,5.26,0,0,0,.08-.89,4.72,4.72,0,0,0-.2-1.31Z"
                                class="clr-i-solid clr-i-solid-path-1"></path>
                            <path d="M14.18,19.7h5.19a4.28,4.28,0,0,0,3.5-1.9H14.18Z"
                                class="clr-i-solid clr-i-solid-path-2"></path>
                            <path d="M19.37,10.51H14.18V12h8.37A4.21,4.21,0,0,0,19.37,10.51Z"
                                class="clr-i-solid clr-i-solid-path-3"></path>
                            <path
                                d="M17.67,2a16,16,0,1,0,16,16A16,16,0,0,0,17.67,2Zm10.5,15.8H25.7a6.87,6.87,0,0,1-6.33,4.4H14.18v6.54a1.25,1.25,0,1,1-2.5,0V17.8H8.76a.9.9,0,1,1,0-1.8h2.92V13.8H8.76a.9.9,0,1,1,0-1.8h2.92V9.26A1.25,1.25,0,0,1,12.93,8h6.44a6.84,6.84,0,0,1,6.15,4h2.65a.9.9,0,0,1,0,1.8H26.09a6.91,6.91,0,0,1,.12,1.3,6.8,6.8,0,0,1-.06.9h2a.9.9,0,0,1,0,1.8Z"
                                class="clr-i-solid clr-i-solid-path-4"></path>
                            <rect x="0" y="0" width="36" height="36" fill-opacity="0" />
                        </svg>
                    </div>
                    <input type="number" id="email-address-icon"
                        class=" border text-sm rounded-lg  block w-full pl-10 p-2.5  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <div class="mb-6 ">
                <label class="block mb-2 text-sm font-medium text-gray-300" for="user_avatar">Upload
                    Image</label>
                <input
                    class="block w-full text-sm  rounded-lg  bordercursor-pointer  text-gray-400 focus:outline-none bg-gray-700 border-gray-600 placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file">
                <div class="mt-1 text-sm text-gray-300" id="user_avatar_help">Upload the image of the product</div>
            </div>

            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-400">Product
                    Description (if any)</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm rounded-lg border  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>


            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" value=""
                        class="w-4 h-4 rounded border us:ring-3  bg-gray-700 border-gray-600 focus:ring-blue-600 ring-offset-gray-800"
                        required="">
                </div>
                <label for="terms" class="ml-2 text-sm font-medium text-gray-300"> Check if this
                    product is available </label>
            </div>
            <button type="submit"
                class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Create Product
            </button>
        </form>
    </div>

</x-app-layout>

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
