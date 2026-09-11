@extends('layouts.app')

@section('title', "Sign In — Brew O'Clock")

@section('content')

<section
    class="relative mb-10 overflow-hidden bg-[#f8f0e3] lg:mb-16"
>

    {{-- BACKGROUND DECORATION --}}
    <div
        class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-[#bf6539]/10 blur-3xl"
    ></div>

    <div
        class="pointer-events-none absolute -right-32 bottom-10 h-96 w-96 rounded-full bg-[#d7b98e]/20 blur-3xl"
    ></div>


    <div
        class="relative mx-auto grid min-h-[calc(100vh-76px)] max-w-7xl lg:min-h-[720px] lg:grid-cols-[1.05fr_0.95fr]"
    >

        {{-- LEFT VISUAL --}}
        <div
            class="relative hidden overflow-hidden bg-[#281b15] lg:block"
        >

            {{-- DECORATIONS --}}
            <div
                class="absolute -left-20 -top-20 h-72 w-72 rounded-full bg-[#bf6539]/20 blur-3xl"
            ></div>

            <div
                class="absolute -bottom-24 right-0 h-80 w-80 rounded-full bg-[#dcb88c]/10 blur-3xl"
            ></div>


            <div
                class="relative z-10 flex h-full flex-col justify-between p-12 xl:p-16"
            >

                {{-- INTRO --}}
                <div>

                    <p
                        class="text-xs font-bold uppercase tracking-[0.22em] text-[#d88a60]"
                    >
                        Welcome Back
                    </p>

                    <h1
                        class="mt-5 max-w-lg font-['Playfair_Display'] text-5xl font-semibold leading-[1.08] text-white"
                    >
                        Coffee is better when your favorites are waiting.
                    </h1>

                    <p
                        class="mt-6 max-w-md text-sm leading-7 text-[#c7b4a5]"
                    >
                        Sign in to continue your Brew O'Clock experience
                        and quickly get back to the drinks and desserts
                        you enjoy.
                    </p>

                </div>


                {{-- FEATURED PRODUCTS --}}
                <div>

                    <p
                        class="mb-5 text-xs font-semibold uppercase tracking-[0.18em] text-[#9f8876]"
                    >
                        Customer Favorites
                    </p>


                    <div
                        class="grid grid-cols-3 gap-4"
                    >

                        {{-- Coffee --}}
                        <div
                            class="group flex aspect-square items-center justify-center overflow-hidden rounded-[28px] bg-[#f1dfc7] p-5"
                        >
                            <img
                                src="{{ asset('images/coffee-shake.png') }}"
                                alt="Coffee"
                                class="h-full w-full object-contain transition duration-300 group-hover:scale-110"
                            >
                        </div>


                        {{-- BISCOFF --}}
                        <div
                            class="group flex aspect-square items-center justify-center overflow-hidden rounded-[28px] bg-[#ead5b9] p-5"
                        >
                            <img
                                src="{{ asset('images/biscoff-cake.png') }}"
                                alt="Biscoff Cake"
                                class="h-full w-full object-contain transition duration-300 group-hover:scale-110"
                            >
                        </div>


                        {{-- BLUEBERRY --}}
                        <div
                            class="group flex aspect-square items-center justify-center overflow-hidden rounded-[28px] bg-[#f1dfc7] p-5"
                        >
                            <img
                                src="{{ asset('images/blueberry.png') }}"
                                alt="Blueberry Cheesecake"
                                class="h-full w-full object-contain transition duration-300 group-hover:scale-110"
                            >
                        </div>

                    </div>

                </div>

            </div>
        </div>



        {{-- RIGHT SIGN IN FORM --}}
        <div
            class="flex items-start justify-center px-5 py-12 sm:px-10 lg:px-14 lg:py-16 xl:px-20"
        >

            <div
                class="w-full max-w-md"
            >

                {{-- MOBILE LOGO --}}
                <a
                    href="{{ route('home') }}"
                    class="mb-10 flex items-center gap-3 lg:hidden"
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
                        class="font-['Playfair_Display'] text-xl font-semibold"
                    >
                        Brew
                        <span class="text-[#bf6539]">
                            O'
                        </span>Clock
                    </span>

                </a>


                {{-- HEADER --}}
                <div>

                    <p
                        class="text-xs font-bold uppercase tracking-[0.22em] text-[#bf6539]"
                    >
                        Customer Account
                    </p>

                    <h2
                        class="mt-3 font-['Playfair_Display'] text-4xl font-semibold tracking-tight"
                    >
                        Sign in
                    </h2>

                    <p
                        class="mt-3 text-sm leading-6 text-[#776457]"
                    >
                        Welcome back. Enter your account details to continue.
                    </p>

                </div>


                {{-- FORM --}}
                <form
                    id="sign-in-form"
                    class="mt-9 space-y-5"
                >

                    {{-- EMAIL --}}
                    <div>

                        <label
                            for="email"
                            class="text-sm font-semibold text-[#39281f]"
                        >
                            Email Address
                        </label>

                        <input
                            id="email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            required
                            placeholder="you@example.com"
                            class="mt-2 w-full rounded-2xl border border-[#d9cab6] bg-white px-4 py-3.5 text-sm text-[#2b1d16] outline-none transition placeholder:text-[#ac9a8b] focus:border-[#bf6539] focus:ring-4 focus:ring-[#bf6539]/10"
                        >

                    </div>


                    {{-- PASSWORD --}}
                    <div>

                        <div
                            class="flex items-center justify-between gap-4"
                        >

                            <label
                                for="password"
                                class="text-sm font-semibold text-[#39281f]"
                            >
                                Password
                            </label>

                            <button
                                type="button"
                                class="text-xs font-semibold text-[#bf6539] transition hover:text-[#a9522f]"
                            >
                                Forgot Password?
                            </button>

                        </div>


                        <div
                            class="relative mt-2"
                        >

                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required
                                placeholder="Enter your password"
                                class="w-full rounded-2xl border border-[#d9cab6] bg-white px-4 py-3.5 pr-12 text-sm text-[#2b1d16] outline-none transition placeholder:text-[#ac9a8b] focus:border-[#bf6539] focus:ring-4 focus:ring-[#bf6539]/10"
                            >


                            <button
                                id="toggle-password"
                                type="button"
                                class="absolute right-4 top-1/2 flex -translate-y-1/2 items-center justify-center text-[#897566] transition hover:text-[#bf6539]"
                                aria-label="Show password"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.7"
                                    class="h-5 w-5"
                                >
                                    <path
                                        d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z"
                                    />

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="2.5"
                                    />
                                </svg>
                            </button>

                        </div>

                    </div>


                    {{-- REMEMBER --}}
                    <div
                        class="flex items-center justify-between gap-4"
                    >

                        <label
                            class="flex cursor-pointer items-center gap-2.5 text-sm text-[#6c5b4e]"
                        >

                            <input
                                type="checkbox"
                                class="h-4 w-4 accent-[#bf6539]"
                            >

                            <span>
                                Remember me
                            </span>

                        </label>

                    </div>


                    {{-- SUBMIT --}}
                    <button
                        type="submit"
                        class="w-full rounded-full bg-[#bf6539] px-6 py-4 text-sm font-semibold text-white shadow-md shadow-[#bf6539]/15 transition duration-200 hover:-translate-y-0.5 hover:bg-[#a9522f] hover:shadow-lg"
                    >
                        Sign In
                    </button>

                </form>


                {{-- DIVIDER --}}
                <div
                    class="my-7 flex items-center gap-4"
                >

                    <div
                        class="h-px flex-1 bg-[#ddd0bd]"
                    ></div>

                    <span
                        class="text-xs text-[#9a8574]"
                    >
                        or
                    </span>

                    <div
                        class="h-px flex-1 bg-[#ddd0bd]"
                    ></div>

                </div>


                {{-- CONTINUE AS GUEST --}}
                <a
                    href="{{ route('home') }}#menu"
                    class="flex w-full items-center justify-center rounded-full border border-[#2b1d16] px-6 py-3.5 text-sm font-semibold transition hover:bg-[#2b1d16] hover:text-white"
                >
                    Continue as Guest
                </a>


                {{-- REGISTER --}}
                <p
                    class="mt-8 text-center text-sm text-[#776457]"
                >
                    Don't have an account?

                    <button
                        type="button"
                        class="font-semibold text-[#bf6539] transition hover:text-[#a9522f]"
                    >
                        Create Account
                    </button>
                </p>


                {{-- DEMO NOTICE --}}
                <div
                    class="mt-8 rounded-2xl border border-[#dfd1be] bg-[#f3e7d5] px-4 py-3"
                >
                    <p
                        class="text-center text-[11px] leading-5 text-[#8c7767]"
                    >
                        Frontend demonstration only. No real authentication
                        or customer account is created yet.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection