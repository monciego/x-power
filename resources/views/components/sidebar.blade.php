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
        <x-application-logo class="block mt-8" />
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
                        style="fill: #fffcfc;transform: ;msFilter:;">
                        <path
                            d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Dashboard') }}
                    </span>
                </div>
            </x-sidebar-nav-link>
            {{-- Product --}}
            <x-sidebar-nav-link :href="route('products.index')" :active="request()->routeIs('products.index')">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                        <path
                            d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z">
                        </path>
                        <circle cx="10.5" cy="19.5" r="1.5"></circle>
                        <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Products') }}
                    </span>
                </div>
            </x-sidebar-nav-link>
            {{-- Services --}}
            <x-sidebar-nav-link :href="route('services.index')" :active="request()->routeIs('services.index')">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                        <path
                            d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Services') }}
                    </span>
                </div>
            </x-sidebar-nav-link>
            {{-- orders --}}
            <x-sidebar-nav-link :href="route('track-orders.index')" :active="request()->routeIs('track-orders.index')">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
                        <path
                            d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Orders') }}
                    </span>
                </div>
            </x-sidebar-nav-link>
            {{-- -** Admin sidebar --}}
            @if (Auth::user()->hasRole('administrator'))

            @endif

        </ul>
    </div>
</nav>
