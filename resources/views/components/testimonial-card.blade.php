@props([
    'name',
    'role',
    'quote',
])

<article class="border border-[#d8c9b5] bg-[#f8f0e4] p-7">
    <span class="font-['Playfair_Display'] text-4xl text-[#bd6639]">
        “
    </span>

    <p class="mt-3 min-h-[120px] text-sm leading-7 text-[#59483d]">
        {{ $quote }}
    </p>

    <div class="mt-6 border-t border-[#ddd0be] pt-5">
        <p class="font-semibold text-[#261b15]">
            {{ $name }}
        </p>

        <p class="mt-1 text-xs text-[#806b5d]">
            {{ $role }}
        </p>
    </div>
</article>