<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrator Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#13171A] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-[#1a1f23]  text-white">
                    You're logged in admin!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
