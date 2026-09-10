<section
    id="home"
    class="relative overflow-hidden bg-[#f7eedf]"
>
    <div
        class="mx-auto grid min-h-[680px] max-w-6xl items-center gap-14 px-5 py-16 lg:grid-cols-[0.95fr_1.05fr] lg:px-8 lg:py-20"
    >

        {{-- LEFT CONTENT --}}
        <div class="relative z-10">

            {{-- OPEN STATUS --}}
            <div class="mb-7 flex items-center gap-2.5 text-sm text-[#705e50]">

                <span class="relative flex h-2.5 w-2.5">

                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-[#56704d] opacity-30"
                    ></span>

                    <span
                        class="relative inline-flex h-2.5 w-2.5 rounded-full bg-[#56704d]"
                    ></span>

                </span>

                <span>
                    Open daily — 6:00 AM to 10:00 PM
                </span>

            </div>


            {{-- HEADING --}}
            <h1
                class="max-w-[620px] font-['Playfair_Display'] text-[3.25rem] font-medium leading-[1.08] tracking-[-0.025em] text-[#281b14] sm:text-6xl lg:text-[4.15rem]"
            >
                Coffee, comfort,

                <span class="block text-[#c5683b]">
                    and your quiet corner.
                </span>
            </h1>


            {{-- DESCRIPTION --}}
            <p
                class="mt-7 max-w-[590px] text-[15px] leading-8 text-[#6b594c] sm:text-base"
            >
                Brew O'Clock is a neighborhood café made for slow mornings,
                focused work sessions, good conversations, and coffee worth
                coming back for.
            </p>


            {{-- ACTIONS --}}
            <div class="mt-9 flex flex-wrap gap-3">

                <a
                    href="#menu"
                    class="inline-flex items-center justify-center bg-[#c5683b] px-6 py-3.5 text-sm font-semibold text-white transition duration-200 hover:bg-[#a9522d]"
                >
                    View Our Favorites
                </a>

                <a
                    href="#contact"
                    class="inline-flex items-center justify-center gap-2 border border-[#37261d] px-6 py-3.5 text-sm font-medium text-[#37261d] transition duration-200 hover:bg-[#37261d] hover:text-white"
                >
                    Find Our Café

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        class="h-4 w-4"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 18 6-6-6-6"
                        />
                    </svg>

                </a>

            </div>


            {{-- SMALL INFORMATION --}}
            <div
                class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-3 border-t border-[#ddcfbc] pt-5 text-xs text-[#796657]"
            >

                <span class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#c5683b]"></span>
                    Coffee & pastries
                </span>

                <span class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#c5683b]"></span>
                    Free Wi-Fi
                </span>

                <span class="flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#c5683b]"></span>
                    Cowork friendly
                </span>

            </div>

        </div>


        {{-- RIGHT VISUAL --}}
        <div class="relative mx-auto w-full max-w-[510px] lg:ml-auto">

            {{-- BACK DECORATIVE CIRCLE --}}
            <div
                class="absolute -left-12 top-12 h-40 w-40 rounded-full bg-[#dfbb90]/55"
            ></div>


            {{-- MAIN IMAGE PLACEHOLDER --}}
            <div
                class="relative overflow-hidden rounded-t-[230px] border border-[#dac8ae] bg-[#e9dbc4] p-3 shadow-[0_25px_70px_rgba(74,52,37,0.10)]"
            >

                <x-image-placeholder
                    label="Brew O'Clock Café"
                    hint="Add your main café or coffee photo here"
                    aspect="aspect-[4/5]"
                    class="rounded-t-[215px]"
                />

            </div>


            {{-- FLOATING INFO CARD --}}
            <div
                class="absolute -bottom-5 -left-5 border border-white/10 bg-[#281a13] px-6 py-5 text-white shadow-[0_14px_35px_rgba(45,29,20,0.22)] sm:-left-8"
            >

                <p
                    class="text-[10px] font-semibold uppercase tracking-[0.2em] text-[#d9b8a2]"
                >
                    Your Daily Corner
                </p>

                <p
                    class="mt-1.5 font-['Playfair_Display'] text-xl font-semibold"
                >
                    Brew. Work. Unwind.
                </p>

            </div>


            {{-- SMALL PHOTO PLACEHOLDER --}}
            <div
                class="absolute -right-5 top-12 hidden w-[145px] overflow-hidden border-4 border-[#f7eedf] shadow-lg sm:block"
            >

                <x-image-placeholder
                    label="Coffee"
                    hint="Product photo"
                    aspect="aspect-square"
                />

            </div>

        </div>

    </div>
</section>