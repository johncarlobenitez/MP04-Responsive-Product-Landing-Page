<div
    id="checkout-modal"
    class="fixed inset-0 z-[70] hidden items-center justify-center bg-black/50 px-4 py-8 backdrop-blur-[2px]"
>

    <div
        class="max-h-full w-full max-w-xl overflow-y-auto rounded-[28px] bg-[#fffaf2] shadow-2xl"
    >

        {{-- HEADER --}}
        <div
            class="flex items-start justify-between border-b border-[#e3d6c4] px-6 py-5 sm:px-8"
        >
            <div>

                <p
                    class="text-[10px] font-bold uppercase tracking-[0.2em] text-[#bf6539]"
                >
                    Checkout
                </p>

                <h2
                    class="mt-1 font-['Playfair_Display'] text-2xl font-semibold"
                >
                    Complete Your Order
                </h2>

            </div>


            <button
                id="close-checkout-button"
                type="button"
                class="flex h-10 w-10 items-center justify-center rounded-full border border-[#dfd0bd] transition hover:bg-[#2b1d16] hover:text-white"
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


        <form
            id="checkout-form"
            class="space-y-5 px-6 py-6 sm:px-8"
        >

            <div>
                <label
                    for="customer-name"
                    class="text-sm font-semibold"
                >
                    Full Name
                </label>

                <input
                    id="customer-name"
                    name="customer_name"
                    type="text"
                    required
                    placeholder="Enter your full name"
                    class="mt-2 w-full rounded-xl border border-[#dacbb7] bg-white px-4 py-3 text-sm outline-none transition focus:border-[#bf6539] focus:ring-2 focus:ring-[#bf6539]/10"
                >
            </div>


            <div>
                <label
                    for="contact-number"
                    class="text-sm font-semibold"
                >
                    Contact Number
                </label>

                <input
                    id="contact-number"
                    name="contact_number"
                    type="tel"
                    required
                    placeholder="09XX XXX XXXX"
                    class="mt-2 w-full rounded-xl border border-[#dacbb7] bg-white px-4 py-3 text-sm outline-none transition focus:border-[#bf6539] focus:ring-2 focus:ring-[#bf6539]/10"
                >
            </div>


            <div>
                <p class="text-sm font-semibold">
                    Order Type
                </p>

                <div
                    class="mt-3 grid grid-cols-2 gap-3"
                >

                    <label
                        class="cursor-pointer rounded-2xl border border-[#dacbb7] bg-white p-4"
                    >
                        <input
                            type="radio"
                            name="order_type"
                            value="Pickup"
                            checked
                            class="accent-[#bf6539]"
                        >

                        <span class="ml-2 text-sm font-medium">
                            Pickup
                        </span>
                    </label>


                    <label
                        class="cursor-pointer rounded-2xl border border-[#dacbb7] bg-white p-4"
                    >
                        <input
                            type="radio"
                            name="order_type"
                            value="Dine-in"
                            class="accent-[#bf6539]"
                        >

                        <span class="ml-2 text-sm font-medium">
                            Dine-in
                        </span>
                    </label>

                </div>
            </div>


            <div>
                <label
                    for="order-notes"
                    class="text-sm font-semibold"
                >
                    Order Notes
                    <span class="font-normal text-[#907c6c]">
                        (Optional)
                    </span>
                </label>

                <textarea
                    id="order-notes"
                    name="order_notes"
                    rows="3"
                    placeholder="Special requests..."
                    class="mt-2 w-full resize-none rounded-xl border border-[#dacbb7] bg-white px-4 py-3 text-sm outline-none transition focus:border-[#bf6539] focus:ring-2 focus:ring-[#bf6539]/10"
                ></textarea>
            </div>


            <div
                class="rounded-2xl bg-[#f1e4d0] p-5"
            >
                <div
                    class="flex items-center justify-between"
                >
                    <span class="text-sm text-[#725f51]">
                        Order Total
                    </span>

                    <strong
                        id="checkout-total"
                        class="text-xl"
                    >
                        ₱0
                    </strong>
                </div>
            </div>


            <button
                type="submit"
                class="w-full rounded-full bg-[#bf6539] px-6 py-4 text-sm font-semibold text-white transition hover:bg-[#a9522f]"
            >
                Place Order
            </button>

            <p
                class="text-center text-[11px] leading-5 text-[#968171]"
            >
                Demo ordering process only. No online payment will be processed.
            </p>

        </form>

    </div>
</div>