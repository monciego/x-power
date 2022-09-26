<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        [x-cloak] {
            display: none;
        }

        .show {
            display: block;
        }
    </style>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" style="background-color: #F0F4F8">

    <div class="min-h-screen bg-[#101213]">

        @if (Auth::user()->hasRole('user'))
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @endif

    @if (Auth::user()->hasRole('administrator'))
    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar/Navigation --}}
        <aside id="sidebar"
            class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64  lg:!w-64 2xl:!w-64 shrink-0 bg-[#0B0D0F] p-4 transition-all duration-200 ease-in-out -translate-x-64">
            @include('components.sidebar')
        </aside>
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            {{-- Header --}}
            @include('components.header')
            {{-- Contents --}}
            <main class="mt-16">
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto text-white">
                    {{--
                    <x-success-message />
                    <x-danger-message /> --}}
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
    @endif

</body>
