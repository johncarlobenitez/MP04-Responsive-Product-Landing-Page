<div
    id="cart-drawer"
    class="fixed inset-0 z-[60] hidden"
>

    {{-- BACKDROP --}}
    <button
        id="cart-backdrop"
        type="button"
        class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"
        aria-label="Close cart"
    ></button>


    {{-- DRAWER --}}
    <aside
        id="cart-panel"
        class="absolute right-0 top-0 flex h-full w-full max-w-md translate-x-full flex-col bg-[#fffaf2] shadow-2xl transition-transform duration-300"
    >

        {{-- HEADER --}}
        <div
            class="flex items-center justify-between border-b border-[#e3d6c4] px-6 py-5"
        >
            <div>
                <p
                    class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#bf6539]"
                >
                    Brew O'Clock
                </p>

                <h2
                    class="mt-1 font-['Playfair_Display'] text-2xl font-semibold"
                >
                    Your Order
                </h2>
            </div>


            <button
                id="close-cart-button"
                type="button"
                class="flex h-10 w-10 items-center justify-center rounded-full border border-[#dfd0bd] transition hover:bg-[#2b1d16] hover:text-white"
                aria-label="Close cart"
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
                        d="M6 6l12 12M18 6 6 18"
                    />
                </svg>
            </button>

        </div>


        {{-- ITEMS --}}
        <div
            id="cart-items"
            class="flex-1 overflow-y-auto px-6 py-5"
        ></div>


        {{-- EMPTY STATE --}}
        <div
            id="cart-empty"
            class="hidden flex-1 items-center justify-center px-8 text-center"
        >
            <div>

                <div
                    class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-[#eee0cc]"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                        class="h-7 w-7"
                    >
                        <path
                            d="M3 4h2l2 10h10l2-7H7"
                        />
                        <circle cx="9" cy="19" r="1"/>
                        <circle cx="17" cy="19" r="1"/>
                    </svg>
                </div>

                <h3
                    class="mt-5 font-['Playfair_Display'] text-xl font-semibold"
                >
                    Your order is empty
                </h3>

                <p
                    class="mt-2 text-sm leading-6 text-[#786658]"
                >
                    Choose something from our menu and add it to your order.
                </p>

                <button
                    id="continue-ordering-button"
                    type="button"
                    class="mt-5 rounded-full bg-[#bf6539] px-5 py-3 text-sm font-semibold text-white"
                >
                    Browse Menu
                </button>

            </div>
        </div>


        {{-- FOOTER --}}
        <div
            id="cart-footer"
            class="border-t border-[#e3d6c4] bg-[#fffaf2] px-6 py-5"
        >

            <div
                class="flex items-center justify-between"
            >
                <span class="text-sm text-[#746254]">
                    Subtotal
                </span>

                <span
                    id="cart-subtotal"
                    class="text-xl font-bold"
                >
                    ₱0
                </span>
            </div>

            <p
                class="mt-2 text-xs leading-5 text-[#927d6d]"
            >
                Final total is based on the products currently in your order.
            </p>

            <button
                id="checkout-button"
                type="button"
                class="mt-5 w-full rounded-full bg-[#bf6539] px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-[#a9522f]"
            >
                Proceed to Checkout
            </button>

        </div>

    </aside>

</div>