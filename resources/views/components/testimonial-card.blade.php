@props([
    'name',
    'role',
    'quote',
])

<article
    class="rounded-3xl border border-[#decfbb] bg-[#fbf5eb] p-7 transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_45px_rgba(68,45,30,0.08)]"
>

    <div class="flex text-[#bf6539]">

        @for ($i = 0; $i < 5; $i++)
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-4 w-4"
            >
                <path
                    d="M12 2.5l2.86 5.8 6.4.93-4.63 4.51 1.09 6.38L12 17.1l-5.72 3.02 1.09-6.38-4.63-4.51 6.4-.93L12 2.5Z"
                />
            </svg>
        @endfor

    </div>


    <p
        class="mt-6 min-h-[120px] text-[15px] leading-7 text-[#604f43]"
    >
        “{{ $quote }}”
    </p>


    <div
        class="mt-6 border-t border-[#e1d4c2] pt-5"
    >
        <p class="font-semibold">
            {{ $name }}
        </p>

        <p class="mt-1 text-xs text-[#8a7565]">
            {{ $role }}
        </p>
    </div>

</article>