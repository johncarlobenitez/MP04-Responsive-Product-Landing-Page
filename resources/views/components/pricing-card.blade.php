@props([
    'name',
    'price',
    'description' => null,
    'image' => null,
    'badge' => null,
    'buttonText' => 'Add to Order',
    'productId' => null,
])

<article
    class="group flex h-full flex-col overflow-hidden rounded-[28px]
           border border-[#dfd1be] bg-[#fbf5eb]
           transition duration-300
           hover:-translate-y-1
           hover:shadow-[0_18px_45px_rgba(70,47,31,0.10)]"
>

    {{-- IMAGE --}}
    @if ($image)
        <div
            class="relative flex aspect-[4/3] items-center justify-center
                   overflow-hidden bg-[#eadbc6] p-6"
        >

            @if ($badge)
                <span
                    class="absolute left-4 top-4 z-10 rounded-full
                           bg-white/90 px-3 py-1.5
                           text-[10px] font-bold uppercase tracking-[0.12em]
                           text-[#785f4d] backdrop-blur"
                >
                    {{ $badge }}
                </span>
            @endif

            <img
                src="{{ asset($image) }}"
                alt="{{ $name }}"
                class="h-full w-full object-contain
                       transition duration-500
                       group-hover:scale-105"
            >
        </div>
    @endif


    {{-- CONTENT --}}
    <div class="flex flex-1 flex-col p-6">

        <div>
            <h3
                class="font-['Playfair_Display']
                       text-xl font-semibold text-[#2b1d16]"
            >
                {{ $name }}
            </h3>

            @if ($description)
                <p
                    class="mt-2 text-sm leading-6 text-[#746254]"
                >
                    {{ $description }}
                </p>
            @endif
        </div>


        {{-- PRICE --}}
        <div class="mt-5">

            <span
                class="text-2xl font-bold text-[#bf6539]"
            >
                ₱{{ number_format((float) $price, 0) }}
            </span>

        </div>


        {{-- OPTIONAL FEATURES --}}
        @if (trim($slot))
            <div
                class="mt-5 border-t border-[#e4d7c5] pt-5"
            >
                <div
                    class="space-y-3 text-sm text-[#655448]"
                >
                    {{ $slot }}
                </div>
            </div>
        @endif


        {{-- ACTION --}}
        @if ($productId)
            <button
                type="button"
                class="add-to-cart mt-6 w-full rounded-full
                       bg-[#2b1d16] px-5 py-3
                       text-sm font-semibold text-white
                       transition
                       hover:bg-[#bf6539]"
                data-id="{{ $productId }}"
                data-name="{{ $name }}"
                data-price="{{ $price }}"
                data-image="{{ $image ? asset($image) : '' }}"
            >
                {{ $buttonText }}
            </button>
        @endif

    </div>

</article>