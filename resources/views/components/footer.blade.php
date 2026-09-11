<footer
    id="footer"
    class="bg-[#211610] text-[#eadccd]"
>
    <div
        class="mx-auto grid max-w-7xl gap-12 px-5 py-16 md:grid-cols-3 lg:px-8"
    >

        {{-- BRAND --}}
        <div>

            <div class="flex items-center gap-3">

                <div
                    class="flex h-10 w-10 items-center justify-center overflow-hidden rounded-full bg-[#291a13]"
                >
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Brew O'Clock Logo"
                        class="h-full w-full object-contain p-1"
                    >
                </div>

                <h3
                    class="font-['Playfair_Display'] text-xl font-semibold text-white"
                >
                    Brew
                    <span class="text-[#ce7549]">O'</span>Clock
                </h3>

            </div>


            <p
                class="mt-5 max-w-xs text-sm leading-7 text-[#bda998]"
            >
                A neighborhood café made for coffee,
                conversations, quiet work sessions,
                and everyday moments.
            </p>

        </div>


        {{-- LINKS --}}
        <div>

            <h3
                class="text-xs font-semibold uppercase tracking-[0.18em] text-[#a9907c]"
            >
                Quick Links
            </h3>

            <nav
                class="mt-5 flex flex-col gap-3 text-sm"
            >
                <a
                    href="#home"
                    class="transition hover:text-[#ce7549]"
                >
                    Home
                </a>

                <a
                    href="#features"
                    class="transition hover:text-[#ce7549]"
                >
                    Features
                </a>

                <a
                    href="#menu"
                    class="transition hover:text-[#ce7549]"
                >
                    Menu
                </a>

                <a
                    href="#testimonials"
                    class="transition hover:text-[#ce7549]"
                >
                    Testimonials
                </a>
            </nav>

        </div>


        {{-- LOCATION --}}
        <div>

            <h3
                class="text-xs font-semibold uppercase tracking-[0.18em] text-[#a9907c]"
            >
                Visit Us
            </h3>

            <p
                class="mt-5 max-w-xs text-sm leading-7"
            >
                2nd Floor, Manangkil Law Office Building,
                National Highway, Brgy. Labuin,
                Pila, Laguna 4010
            </p>

            <div
                class="mt-5 border-t border-white/10 pt-5"
            >
                <p class="text-xs text-[#a9907c]">
                    Opening Hours
                </p>

                <p class="mt-1 text-sm">
                    Daily · 6:00 AM – 10:00 PM
                </p>
            </div>

        </div>

    </div>


    <div class="border-t border-white/10">

        <div
            class="mx-auto max-w-7xl px-5 py-5 text-center text-xs text-[#927c6a] lg:px-8"
        >
            © {{ date('Y') }} Brew O'Clock. All rights reserved.
        </div>

    </div>

</footer>