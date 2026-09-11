<div
    id="order-confirmation"
    class="fixed inset-0 z-[80] hidden items-center justify-center bg-black/50 px-4 backdrop-blur-[2px]"
>

    <div
        class="w-full max-w-md rounded-[30px] bg-[#fffaf2] p-8 text-center shadow-2xl"
    >

        <div
            class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-[#dce8d7] text-[#4c7047]"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                class="h-8 w-8"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m5 12 4 4L19 6"
                />
            </svg>
        </div>


        <p
            class="mt-6 text-xs font-bold uppercase tracking-[0.2em] text-[#bf6539]"
        >
            Order Received
        </p>

        <h2
            class="mt-2 font-['Playfair_Display'] text-3xl font-semibold"
        >
            Thank you!
        </h2>

        <p
            class="mt-3 text-sm leading-6 text-[#746254]"
        >
            Your Brew O'Clock order has been successfully created.
        </p>


        <div
            class="mt-6 rounded-2xl bg-[#f1e4d0] px-5 py-4"
        >
            <p
                class="text-xs text-[#806c5c]"
            >
                Order Number
            </p>

            <p
                id="confirmation-order-number"
                class="mt-1 text-lg font-bold"
            >
                BOC-000000
            </p>
        </div>


        <div
            class="mt-4 text-sm text-[#6d5b4e]"
        >
            <p id="confirmation-customer"></p>
            <p id="confirmation-type" class="mt-1"></p>
            <p
                id="confirmation-total"
                class="mt-3 font-bold text-[#bf6539]"
            ></p>
        </div>


        <button
            id="close-confirmation-button"
            type="button"
            class="mt-7 w-full rounded-full bg-[#2b1d16] px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-[#bf6539]"
        >
            Back to Menu
        </button>

    </div>
</div>