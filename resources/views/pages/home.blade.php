@extends('layouts.app')

@section('title', "Brew O'Clock — Coffee & Coworking")

@section('content')

    <x-hero />

    <section id="features" class="border-y border-[#ddcfbb] bg-[#f1e5d2]">
        <div class="mx-auto max-w-6xl px-5 py-20 lg:px-8">

            <div class="max-w-2xl">
                <p class="mb-3 text-xs font-semibold uppercase tracking-[0.18em] text-[#bd6639]">
                    Why Brew O'Clock
                </p>

                <h2 class="font-['Playfair_Display'] text-4xl font-medium sm:text-5xl">
                    Everything you need for coffee and a good work session.
                </h2>

                <p class="mt-5 leading-7 text-[#715f52]">
                    Simple comforts that make it easier to stay,
                    work, study, or catch up with friends.
                </p>
            </div>

            <div class="mt-12 grid gap-x-12 md:grid-cols-2">

                <x-feature-card
                    title="Fast & Reliable Wi-Fi"
                    description="Stable internet connection for studying, meetings, uploads, and everyday work."
                >
                    <x-slot:icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <path d="M5 12.5a10 10 0 0 1 14 0"/>
                            <path d="M8 15.5a6 6 0 0 1 8 0"/>
                            <path d="M11 18.5a2 2 0 0 1 2 0"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Affordable Menu"
                    description="Coffee, matcha, pastries, and desserts at prices made for everyday visits."
                >
                    <x-slot:icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <path d="M5 7h12v5a5 5 0 0 1-5 5H9a4 4 0 0 1-4-4V7Z"/>
                            <path d="M17 9h1.5a2 2 0 0 1 0 4H17"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Comfortable Workspace"
                    description="Tables, seating, and charging access for customers who need a productive corner."
                >
                    <x-slot:icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <path d="M7 4v6"/>
                            <path d="M17 4v6"/>
                            <path d="M5 10h14v3a7 7 0 0 1-14 0v-3Z"/>
                            <path d="M12 20v-3"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Quiet Corners"
                    description="A relaxed environment suitable for studying, working, reading, or having conversations."
                >
                    <x-slot:icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <rect x="5" y="5" width="14" height="14" rx="2"/>
                            <path d="M9 5v14"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Freshly Prepared"
                    description="Drinks and café favorites are prepared fresh throughout the day."
                >
                    <x-slot:icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <path d="M12 20c4-2 6-6 6-11-5 0-9 2-11 6 0 3 2 5 5 5Z"/>
                            <path d="M8 17c2-3 5-5 9-6"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

                <x-feature-card
                    title="Open Daily"
                    description="Drop by from 6:00 AM until 10:00 PM for your morning coffee or evening study session."
                >
                    <x-slot:icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="h-5 w-5"
                        >
                            <circle cx="12" cy="12" r="8"/>
                            <path d="M12 8v4l3 2"/>
                        </svg>
                    </x-slot:icon>
                </x-feature-card>

            </div>
        </div>
    </section>


    <section id="menu" class="bg-[#f5ecdc]">
        <div class="mx-auto max-w-6xl px-5 py-20 lg:px-8">

            <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                <div>
                    <p class="mb-3 text-xs font-semibold uppercase tracking-[0.18em] text-[#bd6639]">
                        From the counter
                    </p>

                    <h2 class="font-['Playfair_Display'] text-4xl font-medium">
                        Crowd favorites
                    </h2>
                </div>

                <p class="max-w-md text-sm leading-6 text-[#715f52]">
                    A few drinks and desserts customers keep coming back for.
                </p>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

                <article>
                    <div class="overflow-hidden bg-[#eadcc8]">
                        <img
                            src="{{ asset('images/matcha.jpg') }}"
                            alt="Matcha Latte"
                            class="aspect-square w-full object-cover transition duration-300 hover:scale-105"
                        >
                    </div>

                    <h3 class="mt-5 font-['Playfair_Display'] text-xl">
                        Matcha Latte
                    </h3>

                    <p class="mt-1 text-sm text-[#bd6639]">
                        From ₱120
                    </p>
                </article>

                <article>
                    <div class="overflow-hidden bg-[#eadcc8]">
                        <img
                            src="{{ asset('images/biscoff.jpg') }}"
                            alt="Biscoff Loaf Cake"
                            class="aspect-square w-full object-cover transition duration-300 hover:scale-105"
                        >
                    </div>

                    <h3 class="mt-5 font-['Playfair_Display'] text-xl">
                        Biscoff Loaf Cake
                    </h3>

                    <p class="mt-1 text-sm text-[#bd6639]">
                        ₱95 / slice
                    </p>
                </article>

                <article>
                    <div class="overflow-hidden bg-[#eadcc8]">
                        <img
                            src="{{ asset('images/blueberry.jpg') }}"
                            alt="Blueberry Cheesecake"
                            class="aspect-square w-full object-cover transition duration-300 hover:scale-105"
                        >
                    </div>

                    <h3 class="mt-5 font-['Playfair_Display'] text-xl">
                        Blueberry Cheesecake
                    </h3>

                    <p class="mt-1 text-sm text-[#bd6639]">
                        ₱135 / slice
                    </p>
                </article>

                <article>
                    <div class="overflow-hidden bg-[#eadcc8]">
                        <img
                            src="{{ asset('images/smores.jpg') }}"
                            alt="S'mores Cheesecake"
                            class="aspect-square w-full object-cover transition duration-300 hover:scale-105"
                        >
                    </div>

                    <h3 class="mt-5 font-['Playfair_Display'] text-xl">
                        S'mores Cheesecake
                    </h3>

                    <p class="mt-1 text-sm text-[#bd6639]">
                        ₱145 / slice
                    </p>
                </article>

            </div>
        </div>
    </section>


    <section id="testimonials" class="border-y border-[#ddcfbb] bg-[#f1e5d2]">
        <div class="mx-auto max-w-6xl px-5 py-20 lg:px-8">

            <div class="max-w-xl">
                <p class="mb-3 text-xs font-semibold uppercase tracking-[0.18em] text-[#bd6639]">
                    Testimonials
                </p>

                <h2 class="font-['Playfair_Display'] text-4xl font-medium">
                    What the regulars say
                </h2>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-3">

                <x-testimonial-card
                    name="Miguel Santos"
                    role="Freelance Developer"
                    quote="I like working here because the place is calm and the Wi-Fi is reliable. It's become one of my favorite places to work."
                />

                <x-testimonial-card
                    name="Andrea Reyes"
                    role="College Student"
                    quote="It's quiet enough for studying, the drinks are affordable, and the atmosphere doesn't feel too crowded."
                />

                <x-testimonial-card
                    name="Jomar Cruz"
                    role="Small Business Owner"
                    quote="A comfortable place for quick meetings and coffee. The staff are welcoming and the café has a relaxed feel."
                />

            </div>
        </div>
    </section>


    <section id="contact" class="bg-[#bd6639] text-white">
        <div class="mx-auto flex max-w-6xl flex-col justify-between gap-8 px-5 py-16 lg:flex-row lg:items-center lg:px-8">

            <div>
                <p class="text-sm text-[#f3d8c7]">
                    Your next cup is waiting.
                </p>

                <h2 class="mt-2 max-w-xl font-['Playfair_Display'] text-4xl">
                    Make some time for Brew O'Clock.
                </h2>
            </div>

            <a
                href="#footer"
                class="inline-flex w-fit border border-white px-6 py-3.5 text-sm font-semibold transition hover:bg-white hover:text-[#bd6639]"
            >
                Visit Our Café
            </a>

        </div>
    </section>

@endsection