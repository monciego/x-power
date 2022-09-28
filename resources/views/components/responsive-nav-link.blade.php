@props(['active'])

@php
$classes = ($active ?? false)
? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50
focus:outline-none focus:text-slate-50 focus:bg-slate-800 focus:border-indigo-700 transition duration-150
ease-in-out'
: 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-50 hover:text-gray-100
hover:bg-slate-800 hover:border-gray-300 focus:outline-none focus:text-gray-50 focus:bg-slate-800
focus:border-indigo-700
transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
