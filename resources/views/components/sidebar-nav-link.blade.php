@props(['active'])

@php
$classes = ($active ?? false)
? 'px-3 mb-4 py-2 rounded-sm last:mb-0 bg-slate-800 block text-slate-200 truncate transition duration-150
hover:text-slate-200 border-l-4 border-indigo-700'
: 'px-3 mb-4 py-2 rounded-sm last:mb-0 block text-slate-200 border-l-4 border-transparent truncate transition
duration-150
hover:text-slate-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
