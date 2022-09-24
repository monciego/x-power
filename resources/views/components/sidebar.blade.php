{{-- Sidebar Header --}}
<header class="flex justify-between mb-10 pr-3 sm:px-2">
    {{-- Close button --}}
    <button class="lg:hidden text-slate-500 hover:text-slate-400">
        <span class="sr-only">Close sidebar</span>
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
        </svg>
    </button>
    {{-- logo --}}
    <a href="/" class="block">
        <x-application-logo class="block h-12 " />
    </a>
</header>

{{-- links --}}
<nav class="space-y-8">
    {{-- Pages Group --}}
    <div>
        <ul class="mt-3">
            {{-- Dashboard --}}
            <x-sidebar-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                        <path
                            d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Dashboard') }}
                    </span>
                </div>
            </x-sidebar-nav-link>
            {{-- -** Admin sidebar --}}
            @if (Auth::user()->hasRole('administrator'))

            @endif

        </ul>
    </div>
</nav>
