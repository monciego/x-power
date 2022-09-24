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
        <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
            <span class="lg:block 2xl:block">Pages</span>
        </h3>
        <ul class="mt-3">
            {{-- Dashboard --}}
            <x-sidebar-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <div class="flex items-center">
                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                        <path class="fill-current !text-indigo-500"
                            d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                        <path class="fill-current text-indigo-600"
                            d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                        <path class="fill-current text-indigo-200"
                            d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z">
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
