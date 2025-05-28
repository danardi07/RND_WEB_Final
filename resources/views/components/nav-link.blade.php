@props(['active'])

@php
$classes = ($active ?? false)
    ? 'border-b-2 border-blue-600 text-blue-600 inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 focus:outline-none'
    : 'border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 focus:outline-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
