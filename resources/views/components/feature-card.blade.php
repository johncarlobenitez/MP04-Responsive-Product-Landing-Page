@props([
    'number',
    'title',
    'description',
])

<div
    class="group rounded-3xl border border-[#dfd1be] bg-[#fbf5eb] p-6 transition duration-300 hover:-translate-y-1 hover:border-[#c99270] hover:shadow-[0_18px_45px_rgba(70,47,31,0.08)]"
>
    <div
        class="flex h-11 w-11 items-center justify-center rounded-full bg-[#2b1d16] text-xs font-semibold text-white transition group-hover:bg-[#bf6539]"
    >
        {{ $number }}
    </div>

    <h3
        class="mt-6 font-['Playfair_Display'] text-xl font-semibold"
    >
        {{ $title }}
    </h3>

    <p
        class="mt-3 text-sm leading-6 text-[#746254]"
    >
        {{ $description }}
    </p>
</div>