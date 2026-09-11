<header
    class="sticky top-0 z-40 border-b border-[#ddcdb7]/80 bg-[#f8f0e3]/95 backdrop-blur-xl"
>
    <div
        class="mx-auto flex h-[76px] max-w-7xl items-center justify-between px-5 lg:px-8"
    >

        {{-- BRAND --}}
        <a
            href="{{ route('home') }}"
            class="flex items-center gap-3"
        >
            <div
                class="flex h-11 w-11 items-center justify-center overflow-hidden rounded-full border border-[#5a3b2d] bg-[#291a13]"
            >
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Brew O'Clock Logo"
                    class="h-full w-full object-contain p-1"
                >
            </div>

            <span
                class="font-['Playfair_Display'] text-xl font-semibold tracking-tight"
            >
                Brew
                <span class="text-[#bf6539]">
                    O'
                </span>Clock
            </span>
        </a>


        {{-- DESKTOP NAVIGATION --}}
        <nav
            class="hidden items-center gap-8 text-sm font-medium text-[#69584c] lg:flex"
        >

            <a
                href="{{ route('home') }}#home"
                class="transition hover:text-[#bf6539]"
            >
                Home
            </a>

            <a
                href="{{ route('home') }}#features"
                class="transition hover:text-[#bf6539]"
            >
                Features
            </a>

            <a
                href="{{ route('home') }}#menu"
                class="transition hover:text-[#bf6539]"
            >
                Menu
            </a>

            <a
                href="{{ route('home') }}#testimonials"
                class="transition hover:text-[#bf6539]"
            >
                Testimonials
            </a>

            <a
                href="{{ route('home') }}#contact"
                class="transition hover:text-[#bf6539]"
            >
                Contact
            </a>

        </nav>


        {{-- DESKTOP ACTIONS --}}
        <div
            class="hidden items-center gap-3 lg:flex"
        >

            {{-- CART --}}
            <button
                type="button"
                class="open-cart-button relative flex h-11 w-11 items-center justify-center rounded-full border border-[#d8c7b0] bg-white/50 transition hover:bg-white"
                aria-label="Open cart"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 2-1.6L21 7H7"
                    />

                    <circle cx="10" cy="20" r="1" />

                    <circle cx="18" cy="20" r="1" />
                </svg>

                <span
                    class="cart-count absolute -right-1 -top-1 flex h-5 min-w-5 items-center justify-center rounded-full bg-[#bf6539] px-1 text-[10px] font-bold text-white"
                >
                    0
                </span>
            </button>


            {{-- SIGN IN --}}
            <a
                href="{{ route('sign-in') }}"
                class="rounded-full border border-[#2b1d16] px-5 py-2.5 text-sm font-semibold transition hover:bg-[#2b1d16] hover:text-white"
            >
                Sign In
            </a>


            {{-- ORDER --}}
            <a
                href="{{ route('home') }}#menu"
                class="rounded-full bg-[#bf6539] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-[#a9522f] hover:shadow-md"
            >
                Order Now
            </a>

        </div>


        {{-- MOBILE ACTIONS --}}
        <div
            class="flex items-center gap-2 lg:hidden"
        >

            {{-- MOBILE CART --}}
            <button
                type="button"
                class="open-cart-button relative flex h-10 w-10 items-center justify-center rounded-full border border-[#d8c7b0]"
                aria-label="Open cart"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 2-1.6L21 7H7"
                    />

                    <circle cx="10" cy="20" r="1" />

                    <circle cx="18" cy="20" r="1" />
                </svg>

                <span
                    class="cart-count absolute -right-1 -top-1 flex h-5 min-w-5 items-center justify-center rounded-full bg-[#bf6539] px-1 text-[10px] font-bold text-white"
                >
                    0
                </span>
            </button>


            {{-- MOBILE MENU BUTTON --}}
            <button
                id="mobile-menu-button"
                type="button"
                class="flex h-10 w-10 items-center justify-center rounded-full border border-[#d8c7b0]"
                aria-label="Toggle menu"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        d="M4 7h16M4 12h16M4 17h16"
                    />
                </svg>
            </button>

        </div>

    </div>


    {{-- MOBILE MENU --}}
    <div
        id="mobile-menu"
        class="hidden border-t border-[#ddcdb7] bg-[#f8f0e3] lg:hidden"
    >
        <nav
            class="mx-auto flex max-w-7xl flex-col gap-4 px-5 py-6 text-sm font-medium text-[#69584c]"
        >

            <a
                href="{{ route('home') }}#home"
                class="mobile-link transition hover:text-[#bf6539]"
            >
                Home
            </a>

            <a
                href="{{ route('home') }}#features"
                class="mobile-link transition hover:text-[#bf6539]"
            >
                Features
            </a>

            <a
                href="{{ route('home') }}#menu"
                class="mobile-link transition hover:text-[#bf6539]"
            >
                Menu
            </a>

            <a
                href="{{ route('home') }}#testimonials"
                class="mobile-link transition hover:text-[#bf6539]"
            >
                Testimonials
            </a>

            <a
                href="{{ route('home') }}#contact"
                class="mobile-link transition hover:text-[#bf6539]"
            >
                Contact
            </a>


            <div
                class="mt-2 grid grid-cols-2 gap-3 border-t border-[#ddd0bd] pt-5"
            >

                <a
                    href="{{ route('sign-in') }}"
                    class="rounded-full border border-[#2b1d16] px-5 py-3 text-center font-semibold text-[#2b1d16]"
                >
                    Sign In
                </a>

                <a
                    href="{{ route('home') }}#menu"
                    class="mobile-link rounded-full bg-[#bf6539] px-5 py-3 text-center font-semibold text-white"
                >
                    Order Now
                </a>

            </div>

        </nav>
    </div>

</header>