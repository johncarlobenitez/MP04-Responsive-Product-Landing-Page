@props([
    'href' => null,
    'type' => 'button',
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $baseClasses = '
        inline-flex
        items-center
        justify-center
        gap-2
        rounded-full
        font-semibold
        transition
        duration-200
        focus:outline-none
        focus:ring-2
        focus:ring-[#bf6539]/30
        disabled:pointer-events-none
        disabled:opacity-50
    ';

    $variants = [
        'primary' => '
            bg-[#bf6539]
            text-white
            shadow-sm
            hover:-translate-y-0.5
            hover:bg-[#a9522f]
            hover:shadow-md
        ',

        'dark' => '
            bg-[#2b1d16]
            text-white
            hover:-translate-y-0.5
            hover:bg-[#bf6539]
        ',

        'outline' => '
            border
            border-[#2b1d16]
            bg-transparent
            text-[#2b1d16]
            hover:bg-[#2b1d16]
            hover:text-white
        ',

        'light' => '
            border
            border-white
            bg-white
            text-[#a64e2a]
            hover:bg-transparent
            hover:text-white
        ',
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-xs',
        'md' => 'px-5 py-2.5 text-sm',
        'lg' => 'px-6 py-3.5 text-sm',
    ];

    $classes =
        $baseClasses .
        ' ' .
        ($variants[$variant] ?? $variants['primary']) .
        ' ' .
        ($sizes[$size] ?? $sizes['md']);
@endphp


@if ($href)

    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </a>

@else

    <button
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </button>

@endif