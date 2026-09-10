@props([
    'title',
    'description',
])

<div class="border-t border-[#d8c9b5] py-7">
    <div class="flex gap-4">

        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-[#261b15] text-white">
            {{ $icon ?? '' }}
        </div>

        <div>
            <h3 class="font-['Playfair_Display'] text-xl font-medium">
                {{ $title }}
            </h3>

            <p class="mt-2 text-sm leading-6 text-[#715f52]">
                {{ $description }}
            </p>
        </div>

    </div>
</div>