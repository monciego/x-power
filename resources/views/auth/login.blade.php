<x-guest-layout>
    <div class="relative block md:flex h-screen items-center">
        <div class="w-full md:w-1/2 relative z-1 overflow-hidden">
            <div class="bg-indigo-500 h-screen overflow-hidden">
                <x-auth-card>
                    <x-slot name="logo">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </x-slot>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                            <a class="hover:underline text-sm text-indigo-700 hover:text-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif
                        </div>

                        <div class="flex items-center justify-center mt-4 mb-2">
                            <x-primary-button class="w-full font-medium flex items-center justify-center">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                        <a class="hover:underline text-sm text-indigo-700 hover:text-indigo-500"
                            href="{{ route('register') }}">
                            {{ __("Don't have an account? Register here.") }}
                        </a>
                    </form>
                </x-auth-card>
            </div>


        </div>
        <div class="w-full h-full md:w-1/2 md:block hidden">
            <div class="h-screen overflow-hidden">
                <img class="h-full w-full object-cover"
                    src="https://images.pexels.com/photos/4427647/pexels-photo-4427647.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    alt="">
            </div>
        </div>


    </div>
    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>
