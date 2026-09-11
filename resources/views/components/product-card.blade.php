@props([
    'id',
    'name',
    'price',
    'category',
    'image',
])

<article class="group">

    <div
        class="relative flex aspect-[4/5] items-center justify-center overflow-hidden rounded-[30px] bg-[#e7d5bb] p-8"
    >

        <span
            class="absolute left-5 top-5 rounded-full bg-white/80 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.12em] text-[#785f4d]"
        >
            {{ $category }}
        </span>

        <img
            src="{{ asset($image) }}"
            alt="{{ $name }}"
            class="h-full w-full object-contain transition duration-500 group-hover:scale-110"
        >

    </div>


    <div class="px-1 pt-5">

        <h3
            class="font-['Playfair_Display'] text-xl font-semibold"
        >
            {{ $name }}
        </h3>

        <div
            class="mt-4 flex items-center justify-between gap-3"
        >

            <p
                class="text-sm font-bold text-[#bf6539]"
            >
                ₱{{ number_format((float) $price, 0) }}
            </p>


            <button
                type="button"
                class="add-to-cart rounded-full bg-[#2b1d16] px-4 py-2 text-xs font-semibold text-white transition hover:bg-[#bf6539]"
                data-id="{{ $id }}"
                data-name="{{ $name }}"
                data-price="{{ $price }}"
                data-image="{{ asset($image) }}"
            >
                Add to Order
            </button>

        </div>

    </div>

</article>