document.addEventListener('DOMContentLoaded', () => {
    /*
    |--------------------------------------------------------------------------
    | MOBILE NAVIGATION
    |--------------------------------------------------------------------------
    */

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        mobileLinks.forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }


    /*
    |--------------------------------------------------------------------------
    | SIGN IN PAGE
    |--------------------------------------------------------------------------
    */

    const passwordInput = document.getElementById('password');
    const togglePasswordButton = document.getElementById('toggle-password');
    const signInForm = document.getElementById('sign-in-form');


    if (passwordInput && togglePasswordButton) {
        togglePasswordButton.addEventListener('click', () => {
            const passwordIsHidden =
                passwordInput.type === 'password';

            passwordInput.type =
                passwordIsHidden
                    ? 'text'
                    : 'password';

            togglePasswordButton.setAttribute(
                'aria-label',
                passwordIsHidden
                    ? 'Hide password'
                    : 'Show password'
            );
        });
    }


    if (signInForm) {
        signInForm.addEventListener('submit', (event) => {
            event.preventDefault();

            /*
             * Frontend demonstration only.
             * No authentication backend is connected yet.
             */

            window.location.href = '/#menu';
        });
    }


    /*
    |--------------------------------------------------------------------------
    | CART STATE
    |--------------------------------------------------------------------------
    */

    const STORAGE_KEY = 'brew_oclock_cart';

    let cart = [];

    try {
        cart =
            JSON.parse(
                localStorage.getItem(STORAGE_KEY)
            ) || [];
    } catch (error) {
        cart = [];
    }


    /*
    |--------------------------------------------------------------------------
    | CART ELEMENTS
    |--------------------------------------------------------------------------
    */

    const cartDrawer =
        document.getElementById('cart-drawer');

    const cartPanel =
        document.getElementById('cart-panel');

    const cartBackdrop =
        document.getElementById('cart-backdrop');

    const openCartButtons =
        document.querySelectorAll('.open-cart-button');

    const closeCartButton =
        document.getElementById('close-cart-button');

    const continueOrderingButton =
        document.getElementById('continue-ordering-button');

    const cartItemsContainer =
        document.getElementById('cart-items');

    const cartEmpty =
        document.getElementById('cart-empty');

    const cartFooter =
        document.getElementById('cart-footer');

    const cartSubtotal =
        document.getElementById('cart-subtotal');

    const cartCountElements =
        document.querySelectorAll('.cart-count');

    const checkoutButton =
        document.getElementById('checkout-button');


    /*
    |--------------------------------------------------------------------------
    | CHECKOUT ELEMENTS
    |--------------------------------------------------------------------------
    */

    const checkoutModal =
        document.getElementById('checkout-modal');

    const closeCheckoutButton =
        document.getElementById('close-checkout-button');

    const checkoutForm =
        document.getElementById('checkout-form');

    const checkoutTotal =
        document.getElementById('checkout-total');


    /*
    |--------------------------------------------------------------------------
    | CONFIRMATION ELEMENTS
    |--------------------------------------------------------------------------
    */

    const confirmationModal =
        document.getElementById('order-confirmation');

    const confirmationOrderNumber =
        document.getElementById(
            'confirmation-order-number'
        );

    const confirmationCustomer =
        document.getElementById(
            'confirmation-customer'
        );

    const confirmationType =
        document.getElementById(
            'confirmation-type'
        );

    const confirmationTotal =
        document.getElementById(
            'confirmation-total'
        );

    const closeConfirmationButton =
        document.getElementById(
            'close-confirmation-button'
        );


    /*
    |--------------------------------------------------------------------------
    | HELPERS
    |--------------------------------------------------------------------------
    */

    const peso = (value) => {
        return `₱${Number(value).toLocaleString('en-PH')}`;
    };


    const saveCart = () => {
        localStorage.setItem(
            STORAGE_KEY,
            JSON.stringify(cart)
        );
    };


    const getSubtotal = () => {
        return cart.reduce((total, item) => {
            return (
                total +
                Number(item.price) *
                Number(item.quantity)
            );
        }, 0);
    };


    const getTotalQuantity = () => {
        return cart.reduce((total, item) => {
            return total + Number(item.quantity);
        }, 0);
    };


    /*
    |--------------------------------------------------------------------------
    | OPEN / CLOSE CART
    |--------------------------------------------------------------------------
    */

    const openCart = () => {
        if (!cartDrawer || !cartPanel) {
            return;
        }

        cartDrawer.classList.remove('hidden');

        document.body.classList.add('overflow-hidden');

        requestAnimationFrame(() => {
            cartPanel.classList.remove(
                'translate-x-full'
            );
        });
    };


    const closeCart = () => {
        if (!cartDrawer || !cartPanel) {
            return;
        }

        cartPanel.classList.add(
            'translate-x-full'
        );

        setTimeout(() => {
            cartDrawer.classList.add('hidden');

            document.body.classList.remove(
                'overflow-hidden'
            );
        }, 300);
    };


    /*
    |--------------------------------------------------------------------------
    | CHECKOUT MODAL
    |--------------------------------------------------------------------------
    */

    const openCheckout = () => {
        if (
            cart.length === 0 ||
            !checkoutModal
        ) {
            return;
        }

        closeCart();

        setTimeout(() => {
            if (checkoutTotal) {
                checkoutTotal.textContent =
                    peso(getSubtotal());
            }

            checkoutModal.classList.remove(
                'hidden'
            );

            checkoutModal.classList.add(
                'flex'
            );

            document.body.classList.add(
                'overflow-hidden'
            );
        }, 300);
    };


    const closeCheckout = () => {
        if (!checkoutModal) {
            return;
        }

        checkoutModal.classList.add(
            'hidden'
        );

        checkoutModal.classList.remove(
            'flex'
        );

        document.body.classList.remove(
            'overflow-hidden'
        );
    };


    /*
    |--------------------------------------------------------------------------
    | CONFIRMATION MODAL
    |--------------------------------------------------------------------------
    */

    const openConfirmation = ({
        orderNumber,
        customer,
        type,
        total
    }) => {
        if (!confirmationModal) {
            return;
        }

        if (confirmationOrderNumber) {
            confirmationOrderNumber.textContent =
                orderNumber;
        }

        if (confirmationCustomer) {
            confirmationCustomer.textContent =
                customer;
        }

        if (confirmationType) {
            confirmationType.textContent =
                type;
        }

        if (confirmationTotal) {
            confirmationTotal.textContent =
                `Total: ${peso(total)}`;
        }

        confirmationModal.classList.remove(
            'hidden'
        );

        confirmationModal.classList.add(
            'flex'
        );

        document.body.classList.add(
            'overflow-hidden'
        );
    };


    const closeConfirmation = () => {
        if (!confirmationModal) {
            return;
        }

        confirmationModal.classList.add(
            'hidden'
        );

        confirmationModal.classList.remove(
            'flex'
        );

        document.body.classList.remove(
            'overflow-hidden'
        );

        document
            .getElementById('menu')
            ?.scrollIntoView({
                behavior: 'smooth'
            });
    };


    /*
    |--------------------------------------------------------------------------
    | CART ACTIONS
    |--------------------------------------------------------------------------
    */

    const increaseItem = (id) => {
        const item = cart.find((product) => {
            return product.id === id;
        });

        if (!item) {
            return;
        }

        item.quantity += 1;

        saveCart();

        renderCart();
    };


    const decreaseItem = (id) => {
        const item = cart.find((product) => {
            return product.id === id;
        });

        if (!item) {
            return;
        }

        item.quantity -= 1;

        if (item.quantity <= 0) {
            cart = cart.filter((product) => {
                return product.id !== id;
            });
        }

        saveCart();

        renderCart();
    };


    const removeItem = (id) => {
        cart = cart.filter((product) => {
            return product.id !== id;
        });

        saveCart();

        renderCart();
    };


    /*
    |--------------------------------------------------------------------------
    | CART ITEM EVENT BINDINGS
    |--------------------------------------------------------------------------
    */

    const bindCartItemEvents = () => {
        document
            .querySelectorAll(
                '.increase-cart-item'
            )
            .forEach((button) => {
                button.addEventListener(
                    'click',
                    () => {
                        increaseItem(
                            button.dataset.id
                        );
                    }
                );
            });


        document
            .querySelectorAll(
                '.decrease-cart-item'
            )
            .forEach((button) => {
                button.addEventListener(
                    'click',
                    () => {
                        decreaseItem(
                            button.dataset.id
                        );
                    }
                );
            });


        document
            .querySelectorAll(
                '.remove-cart-item'
            )
            .forEach((button) => {
                button.addEventListener(
                    'click',
                    () => {
                        removeItem(
                            button.dataset.id
                        );
                    }
                );
            });
    };


    /*
    |--------------------------------------------------------------------------
    | RENDER CART
    |--------------------------------------------------------------------------
    */

    function renderCart() {
        const totalQuantity =
            getTotalQuantity();

        const subtotal =
            getSubtotal();


        cartCountElements.forEach(
            (element) => {
                element.textContent =
                    totalQuantity;
            }
        );


        if (cartSubtotal) {
            cartSubtotal.textContent =
                peso(subtotal);
        }


        if (checkoutTotal) {
            checkoutTotal.textContent =
                peso(subtotal);
        }


        if (
            !cartItemsContainer ||
            !cartEmpty ||
            !cartFooter
        ) {
            return;
        }


        /*
         * Empty cart
         */
        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '';

            cartItemsContainer.classList.add(
                'hidden'
            );

            cartEmpty.classList.remove(
                'hidden'
            );

            cartEmpty.classList.add(
                'flex'
            );

            cartFooter.classList.add(
                'hidden'
            );

            return;
        }


        /*
         * Cart with items
         */
        cartItemsContainer.classList.remove(
            'hidden'
        );

        cartEmpty.classList.add(
            'hidden'
        );

        cartEmpty.classList.remove(
            'flex'
        );

        cartFooter.classList.remove(
            'hidden'
        );


        cartItemsContainer.innerHTML =
            cart
                .map((item) => {
                    const itemTotal =
                        Number(item.price) *
                        Number(item.quantity);

                    return `
                        <article
                            class="flex gap-4 border-b border-[#e6dac9] py-5"
                            data-id="${item.id}"
                        >

                            <div
                                class="flex h-20 w-20 shrink-0 items-center justify-center overflow-hidden rounded-2xl bg-[#eee0cc] p-2"
                            >
                                <img
                                    src="${item.image}"
                                    alt="${item.name}"
                                    class="h-full w-full object-contain"
                                >
                            </div>


                            <div
                                class="min-w-0 flex-1"
                            >

                                <div
                                    class="flex items-start justify-between gap-3"
                                >

                                    <div>

                                        <h3
                                            class="font-['Playfair_Display'] text-base font-semibold"
                                        >
                                            ${item.name}
                                        </h3>

                                        <p
                                            class="mt-1 text-sm font-semibold text-[#bf6539]"
                                        >
                                            ${peso(item.price)}
                                        </p>

                                    </div>


                                    <button
                                        type="button"
                                        class="remove-cart-item text-xs font-semibold text-[#8d7563] transition hover:text-red-600"
                                        data-id="${item.id}"
                                    >
                                        Remove
                                    </button>

                                </div>


                                <div
                                    class="mt-4 flex items-center justify-between"
                                >

                                    <div
                                        class="flex items-center rounded-full border border-[#dacbb7] bg-white"
                                    >

                                        <button
                                            type="button"
                                            class="decrease-cart-item flex h-8 w-8 items-center justify-center text-lg"
                                            data-id="${item.id}"
                                        >
                                            −
                                        </button>

                                        <span
                                            class="min-w-8 text-center text-sm font-semibold"
                                        >
                                            ${item.quantity}
                                        </span>

                                        <button
                                            type="button"
                                            class="increase-cart-item flex h-8 w-8 items-center justify-center text-lg"
                                            data-id="${item.id}"
                                        >
                                            +
                                        </button>

                                    </div>


                                    <p
                                        class="text-sm font-bold"
                                    >
                                        ${peso(itemTotal)}
                                    </p>

                                </div>

                            </div>

                        </article>
                    `;
                })
                .join('');


        bindCartItemEvents();
    }


    /*
    |--------------------------------------------------------------------------
    | ADD PRODUCT TO CART
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('.add-to-cart')
        .forEach((button) => {
            button.addEventListener(
                'click',
                () => {
                    const id =
                        button.dataset.id;

                    const existingItem =
                        cart.find((item) => {
                            return item.id === id;
                        });


                    if (existingItem) {
                        existingItem.quantity += 1;
                    } else {
                        cart.push({
                            id:
                                id,

                            name:
                                button.dataset.name,

                            price:
                                Number(
                                    button.dataset.price
                                ),

                            image:
                                button.dataset.image,

                            quantity:
                                1
                        });
                    }


                    saveCart();

                    renderCart();

                    openCart();
                }
            );
        });


    /*
    |--------------------------------------------------------------------------
    | OPEN CART BUTTONS
    |--------------------------------------------------------------------------
    */

    openCartButtons.forEach((button) => {
        button.addEventListener(
            'click',
            () => {
                openCart();
            }
        );
    });


    /*
    |--------------------------------------------------------------------------
    | CART EVENTS
    |--------------------------------------------------------------------------
    */

    closeCartButton?.addEventListener(
        'click',
        closeCart
    );


    cartBackdrop?.addEventListener(
        'click',
        closeCart
    );


    continueOrderingButton?.addEventListener(
        'click',
        () => {
            closeCart();

            setTimeout(() => {
                document
                    .getElementById('menu')
                    ?.scrollIntoView({
                        behavior: 'smooth'
                    });
            }, 300);
        }
    );


    checkoutButton?.addEventListener(
        'click',
        openCheckout
    );


    /*
    |--------------------------------------------------------------------------
    | CHECKOUT EVENTS
    |--------------------------------------------------------------------------
    */

    closeCheckoutButton?.addEventListener(
        'click',
        closeCheckout
    );


    /*
    |--------------------------------------------------------------------------
    | PLACE ORDER
    |--------------------------------------------------------------------------
    */

    checkoutForm?.addEventListener(
        'submit',
        (event) => {
            event.preventDefault();


            if (cart.length === 0) {
                return;
            }


            const customerName =
                document
                    .getElementById(
                        'customer-name'
                    )
                    ?.value
                    .trim() || 'Customer';


            const orderType =
                document.querySelector(
                    'input[name="order_type"]:checked'
                )?.value || 'Pickup';


            const total =
                getSubtotal();


            const orderNumber =
                `BOC-${Date.now()
                    .toString()
                    .slice(-6)}`;


            closeCheckout();


            cart = [];

            saveCart();

            renderCart();


            checkoutForm.reset();


            setTimeout(() => {
                openConfirmation({
                    orderNumber:
                        orderNumber,

                    customer:
                        `Customer: ${customerName}`,

                    type:
                        `Order Type: ${orderType}`,

                    total:
                        total
                });
            }, 200);
        }
    );


    /*
    |--------------------------------------------------------------------------
    | CONFIRMATION EVENTS
    |--------------------------------------------------------------------------
    */

    closeConfirmationButton?.addEventListener(
        'click',
        closeConfirmation
    );


    /*
    |--------------------------------------------------------------------------
    | ESCAPE KEY
    |--------------------------------------------------------------------------
    */

    document.addEventListener(
        'keydown',
        (event) => {
            if (event.key !== 'Escape') {
                return;
            }


            if (
                confirmationModal &&
                !confirmationModal.classList.contains(
                    'hidden'
                )
            ) {
                closeConfirmation();

                return;
            }


            if (
                checkoutModal &&
                !checkoutModal.classList.contains(
                    'hidden'
                )
            ) {
                closeCheckout();

                return;
            }


            if (
                cartDrawer &&
                !cartDrawer.classList.contains(
                    'hidden'
                )
            ) {
                closeCart();
            }
        }
    );


    /*
    |--------------------------------------------------------------------------
    | INITIAL CART RENDER
    |--------------------------------------------------------------------------
    */

    renderCart();
});