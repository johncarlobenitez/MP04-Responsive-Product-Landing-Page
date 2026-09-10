<header class="sticky top-0 z-50 border-b border-[#ddcfbb] bg-[#f5ecdc]/95 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4 lg:px-8">

        <a href="#home" class="flex items-center gap-3">
            <div class="flex h-9 w-9 items-center justify-center rounded-full border border-[#2b1d16]">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.6"
                    class="h-5 w-5"
                >
                    <path d="M4 8h12v5a6 6 0 0 1-6 6H9a5 5 0 0 1-5-5V8Z"/>
                    <path d="M16 10h1.5a2.5 2.5 0 0 1 0 5H16"/>
                    <path d="M8 3c0 1 1 1.5 1 2.5S8 7 8 8"/>
                    <path d="M12 3c0 1 1 1.5 1 2.5S12 7 12 8"/>
                </svg>
            </div>

            <span class="font-['Playfair_Display'] text-xl font-semibold">
                Brew <span class="text-[#bd6639]">O'</span>Clock
            </span>
        </a>

        <nav class="hidden items-center gap-8 text-sm text-[#66564c] md:flex">
            <a href="#home" class="transition hover:text-[#bd6639]">
                Home
            </a>

            <a href="#features" class="transition hover:text-[#bd6639]">
                Features
            </a>

            <a href="#menu" class="transition hover:text-[#bd6639]">
                Menu
            </a>

            <a href="#testimonials" class="transition hover:text-[#bd6639]">
                Testimonials
            </a>

            <a href="#contact" class="transition hover:text-[#bd6639]">
                Contact
            </a>
        </nav>

        <div class="hidden items-center gap-3 md:flex">
            <a
                href="#contact"
                class="border border-[#2b1d16] px-5 py-2.5 text-sm font-medium transition hover:bg-[#2b1d16] hover:text-white"
            >
                Visit Us
            </a>

            <a
                href="#menu"
                class="bg-[#bd6639] px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-[#a9552f]"
            >
                View Menu
            </a>
        </div>

        <button
            id="mobile-menu-button"
            type="button"
            class="flex h-10 w-10 items-center justify-center border border-[#d5c5b0] md:hidden"
            aria-label="Open menu"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                class="h-5 w-5"
            >
                <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/>
            </svg>
        </button>

    </div>

    <div
        id="mobile-menu"
        class="hidden border-t border-[#ddcfbb] bg-[#f5ecdc] px-5 py-5 md:hidden"
    >
        <nav class="flex flex-col gap-4 text-sm">
            <a href="#home" class="mobile-link">Home</a>
            <a href="#features" class="mobile-link">Features</a>
            <a href="#menu" class="mobile-link">Menu</a>
            <a href="#testimonials" class="mobile-link">Testimonials</a>
            <a href="#contact" class="mobile-link">Contact</a>
        </nav>

        <a
            href="#menu"
            class="mt-5 block bg-[#bd6639] px-5 py-3 text-center text-sm font-semibold text-white"
        >
            View Menu
        </a>
    </div>
</header>