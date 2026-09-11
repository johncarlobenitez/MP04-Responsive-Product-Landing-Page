<section
    id="home"
    class="relative overflow-hidden bg-[#f8f0e3]"
>
    <div
        class="absolute -left-32 top-40 h-72 w-72 rounded-full bg-[#d79366]/10 blur-3xl"
    ></div>

    <div
        class="absolute right-0 top-20 h-96 w-96 rounded-full bg-[#d6bb96]/20 blur-3xl"
    ></div>


    <div
        class="mx-auto grid min-h-[700px] max-w-7xl items-center gap-14 px-5 py-16 lg:grid-cols-2 lg:px-8 lg:py-20"
    >

        {{-- CONTENT --}}
        <div class="relative z-10">

            <div
                class="mb-6 inline-flex items-center gap-2 rounded-full border border-[#ded0bc] bg-white/50 px-4 py-2 text-xs font-medium text-[#725f50]"
            >
                <span class="h-2 w-2 rounded-full bg-[#5d7854]"></span>

                Open daily — 10:00 AM to 12:00 AM
            </div>


            <h1
                class="max-w-[650px] font-['Playfair_Display'] text-5xl font-semibold leading-[1.06] tracking-[-0.035em] sm:text-6xl lg:text-[68px]"
            >
                Coffee, comfort,

                <span class="text-[#bf6539]">
                    and your quiet corner.
                </span>
            </h1>


            <p
                class="mt-7 max-w-xl text-base leading-8 text-[#6e5c4f] sm:text-[17px]"
            >
                Brew O'Clock is a cozy neighborhood café where good coffee,
                desserts, quiet work sessions, and conversations come together.
            </p>


            <div class="mt-9 flex flex-wrap gap-3">

                <a
                    href="#menu"
                    class="inline-flex items-center gap-2 rounded-full bg-[#bf6539] px-6 py-3.5 text-sm font-semibold text-white shadow-md shadow-[#bf6539]/15 transition hover:-translate-y-0.5 hover:bg-[#a9522f]"
                >
                    Start Your Order

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


                <a
                    href="#contact"
                    class="rounded-full border border-[#38281f] px-6 py-3.5 text-sm font-semibold transition hover:bg-[#38281f] hover:text-white"
                >
                    Find Our Café
                </a>

            </div>


            <div
                class="mt-10 flex flex-wrap gap-6 border-t border-[#ddd0bd] pt-6"
            >

                <div>
                    <p class="font-semibold">
                        Fresh
                    </p>

                    <p class="mt-1 text-xs text-[#857264]">
                        Coffee & desserts
                    </p>
                </div>

                <div class="h-10 w-px bg-[#dacbb7]"></div>

                <div>
                    <p class="font-semibold">
                        Free
                    </p>

                    <p class="mt-1 text-xs text-[#857264]">
                        Wi-Fi access
                    </p>
                </div>

                <div class="h-10 w-px bg-[#dacbb7]"></div>

                <div>
                    <p class="font-semibold">
                        Daily
                    </p>

                    <p class="mt-1 text-xs text-[#857264]">
                        6 AM – 10 PM
                    </p>
                </div>

            </div>

        </div>


        {{-- PRODUCT COLLAGE --}}
        <div
            class="relative mx-auto min-h-[550px] w-full max-w-[560px]"
        >

            <div
                class="absolute bottom-0 right-2 h-[490px] w-[360px] overflow-hidden rounded-t-[210px] bg-[#e5d2b5] shadow-[0_30px_70px_rgba(63,42,28,0.12)] sm:w-[420px]"
            >
                <img
                    src="{{ asset('images/coffee-shake.png') }}"
                    alt="Coffee Shake"
                    class="h-full w-full object-contain p-12 sm:p-16"
                >
            </div>


            <div
                class="absolute left-0 top-10 z-20 flex h-40 w-40 items-center justify-center rounded-full border-[7px] border-[#f8f0e3] bg-[#f1e3cf] shadow-xl sm:h-44 sm:w-44"
            >
                <img
                    src="{{ asset('images/biscoff-cake.png') }}"
                    alt="Biscoff Cake"
                    class="h-[80%] w-[80%] object-contain"
                >
            </div>


            <div
                class="absolute right-0 top-16 z-20 hidden h-28 w-28 items-center justify-center rounded-3xl border-[5px] border-[#f8f0e3] bg-white shadow-xl sm:flex"
            >
                <img
                    src="{{ asset('images/blueberry.png') }}"
                    alt="Blueberry Cheesecake"
                    class="h-[85%] w-[85%] object-contain"
                >
            </div>


            <div
                class="absolute bottom-8 left-2 z-30 rounded-2xl bg-[#291a13] px-6 py-5 text-white shadow-2xl sm:left-8"
            >
                <p
                    class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[#d6af96]"
                >
                    Your Daily Corner
                </p>

                <p
                    class="mt-1 font-['Playfair_Display'] text-xl font-semibold"
                >
                    Brew. Work. Unwind.
                </p>
            </div>

        </div>

    </div>
</section>