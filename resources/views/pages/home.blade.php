@extends('layouts.app')

@section('title', "Brew O'Clock — Coffee & Coworking")

@section('content')

    <x-hero />


    {{-- FEATURES --}}
    <section
        id="features"
        class="bg-[#f1e4d0]"
    >
        <div
            class="mx-auto max-w-7xl px-5 py-24 lg:px-8"
        >

            <div
                class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end"
            >
                <div class="max-w-2xl">

                    <p
                        class="text-xs font-bold uppercase tracking-[0.22em] text-[#bf6539]"
                    >
                        Why Brew O'Clock
                    </p>

                    <h2
                        class="mt-4 font-['Playfair_Display'] text-4xl font-semibold leading-tight sm:text-5xl"
                    >
                        More than just a cup of coffee.
                    </h2>

                </div>


                <p
                    class="max-w-md text-sm leading-7 text-[#746254]"
                >
                    Everything you need for a productive morning,
                    an afternoon break, or a quiet conversation.
                </p>
            </div>


            <div
                class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3"
            >

                <x-feature-card
                    number="01"
                    title="Reliable Wi-Fi"
                    description="Stay connected while studying, working, attending meetings, or simply browsing."
                />

                <x-feature-card
                    number="02"
                    title="Affordable Favorites"
                    description="Enjoy drinks and desserts without stretching your daily budget."
                />

                <x-feature-card
                    number="03"
                    title="Comfortable Space"
                    description="A relaxed place designed for coffee breaks, study sessions, and conversations."
                />

                <x-feature-card
                    number="04"
                    title="Quiet Corners"
                    description="Settle into a calm corner whenever you need time to focus or slow down."
                />

                <x-feature-card
                    number="05"
                    title="Freshly Prepared"
                    description="Coffee and desserts are carefully prepared throughout the day."
                />

                <x-feature-card
                    number="06"
                    title="Open Daily"
                    description="Start early or stay later. Brew O'Clock is open from 6 AM until 10 PM."
                />

            </div>

        </div>
    </section>



    {{-- MENU / ORDER --}}
    <section
        id="menu"
        class="bg-[#f8f0e3]"
    >
        <div
            class="mx-auto max-w-7xl px-5 py-24 lg:px-8"
        >

            <div
                class="flex flex-col justify-between gap-6 md:flex-row md:items-end"
            >

                <div>
                    <p
                        class="text-xs font-bold uppercase tracking-[0.22em] text-[#bf6539]"
                    >
                        From the counter
                    </p>

                    <h2
                        class="mt-4 font-['Playfair_Display'] text-4xl font-semibold sm:text-5xl"
                    >
                        Choose your favorites.
                    </h2>

                    <p
                        class="mt-4 max-w-xl text-sm leading-7 text-[#746254]"
                    >
                        Add your favorite Brew O'Clock drinks and desserts
                        to your order.
                    </p>
                </div>


                <button
                    type="button"
                    class="open-cart-button w-fit rounded-full border border-[#2b1d16] px-5 py-3 text-sm font-semibold transition hover:bg-[#2b1d16] hover:text-white"
                >
                    View My Order
                </button>

            </div>


            <div
                class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4"
            >

                <x-product-card
                    id="matcha"
                    name="Matcha"
                    price="120"
                    category="Drink"
                    image="images/matcha.png"
                />

                <x-product-card
                    id="biscoff"
                    name="Biscoff Cake"
                    price="95"
                    category="Dessert"
                    image="images/biscoff-cake.png"
                />

                <x-product-card
                    id="blueberry"
                    name="Blueberry Cheesecake"
                    price="135"
                    category="Cheesecake"
                    image="images/blueberry.png"
                />

                <x-product-card
                    id="red-velvet"
                    name="Red Velvet Cake"
                    price="145"
                    category="Cake"
                    image="images/red-velvet.png"
                />

            </div>

        </div>
    </section>



    {{-- SHOWCASE --}}
    <section
        class="bg-[#291c15] text-white"
    >
        <div
            class="mx-auto grid max-w-7xl gap-14 px-5 py-24 lg:grid-cols-2 lg:items-center lg:px-8"
        >

            <div>

                <p
                    class="text-xs font-bold uppercase tracking-[0.22em] text-[#dc8b5d]"
                >
                    Something sweet
                </p>

                <h2
                    class="mt-4 max-w-xl font-['Playfair_Display'] text-4xl font-semibold leading-tight sm:text-5xl"
                >
                    Coffee breaks taste better with dessert.
                </h2>

                <p
                    class="mt-6 max-w-lg text-sm leading-7 text-[#cbb8a9]"
                >
                    Pair your favorite drink with one of our café desserts
                    and enjoy a slow moment at Brew O'Clock.
                </p>

                <a
                    href="#menu"
                    class="mt-8 inline-flex rounded-full bg-[#bf6539] px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-[#d27648]"
                >
                    Start an Order
                </a>

            </div>


            <div class="grid grid-cols-2 gap-4">

                <div
                    class="flex aspect-square items-center justify-center rounded-[30px] bg-[#f2e5d2] p-7"
                >
                    <img
                        src="{{ asset('images/biscoff-cake.png') }}"
                        alt="Biscoff Cake"
                        class="h-full w-full object-contain"
                    >
                </div>

                <div
                    class="mt-10 flex aspect-square items-center justify-center rounded-[30px] bg-[#e8d5bb] p-7"
                >
                    <img
                        src="{{ asset('images/blueberry.png') }}"
                        alt="Blueberry Cheesecake"
                        class="h-full w-full object-contain"
                    >
                </div>

                <div
                    class="-mt-10 flex aspect-square items-center justify-center rounded-[30px] bg-[#dfc7aa] p-7"
                >
                    <img
                        src="{{ asset('images/matcha.png') }}"
                        alt="Matcha"
                        class="h-full w-full object-contain"
                    >
                </div>

                <div
                    class="flex aspect-square items-center justify-center rounded-[30px] bg-[#f1e0ca] p-7"
                >
                    <img
                        src="{{ asset('images/red-velvet.png') }}"
                        alt="Red Velvet Cake"
                        class="h-full w-full object-contain"
                    >
                </div>

            </div>

        </div>
    </section>



    {{-- TESTIMONIALS --}}
    <section
        id="testimonials"
        class="bg-[#f1e4d0]"
    >
        <div
            class="mx-auto max-w-7xl px-5 py-24 lg:px-8"
        >

            <div class="max-w-2xl">

                <p
                    class="text-xs font-bold uppercase tracking-[0.22em] text-[#bf6539]"
                >
                    From our customers
                </p>

                <h2
                    class="mt-4 font-['Playfair_Display'] text-4xl font-semibold sm:text-5xl"
                >
                    What the regulars say.
                </h2>

            </div>


            <div
                class="mt-12 grid gap-5 md:grid-cols-3"
            >

                <x-testimonial-card
                    name="Miguel Santos"
                    role="Freelance Developer"
                    quote="The café has become one of my favorite places to work. It's peaceful and comfortable."
                />

                <x-testimonial-card
                    name="Andrea Reyes"
                    role="College Student"
                    quote="I like coming here to study because the atmosphere is calm and the drinks are affordable."
                />

                <x-testimonial-card
                    name="Jomar Cruz"
                    role="Small Business Owner"
                    quote="A nice spot for coffee and casual meetings. The place feels welcoming every time."
                />

            </div>

        </div>
    </section>



    {{-- CTA --}}
    <section
        id="contact"
        class="bg-[#bf6539]"
    >
        <div
            class="mx-auto flex max-w-7xl flex-col justify-between gap-8 px-5 py-16 text-white md:flex-row md:items-center lg:px-8"
        >

            <div>

                <p
                    class="text-xs font-semibold uppercase tracking-[0.2em] text-[#f2d2bf]"
                >
                    Your next cup is waiting
                </p>

                <h2
                    class="mt-3 max-w-xl font-['Playfair_Display'] text-3xl font-semibold sm:text-4xl"
                >
                    Slow down, grab a cup, and stay awhile.
                </h2>

            </div>


            <a
                href="#menu"
                class="w-fit rounded-full border border-white bg-white px-6 py-3.5 text-sm font-semibold text-[#a64e2a] transition hover:bg-transparent hover:text-white"
            >
                Order Your Favorites
            </a>

        </div>
    </section>


    {{-- ORDER COMPONENTS --}}
    <x-cart-drawer />

    <x-checkout-modal />

    <x-order-confirmation />

@endsection