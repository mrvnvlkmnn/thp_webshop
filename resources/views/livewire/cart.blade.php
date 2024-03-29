<div id="cart" x-show="cart" class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title"
      role="dialog" aria-modal="true">
    <div class="absolute inset-0 overflow-hidden">
        <div x-show="cart" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="cart = false"
             aria-hidden="true">
        </div>

        <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
            <div x-show="cart" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                 x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                 x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                 x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                 class="w-screen max-w-md" x-description="Slide-over panel, show/hide based on slide-over state.">
                <div class="h-full flex flex-col bg-white-light shadow-xl overflow-y-scroll">
                    <div class="flex-1 py-6 overflow-y-auto px-4 sm:px-6">
                        <div class="flex items-start justify-between">
                            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                                Shopping cart
                            </h2>
                            <div class="ml-3 h-7 flex items-center">
                                <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500"
                                        @click="cart = !cart">
                                    <span class="sr-only">Close panel</span>
                                    <svg class="h-6 w-6"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flow-root">
                                <ul role="list" class="-my-6 divide-y divide-gray-200">

                                    <li class="py-6 flex">
                                        <div
                                            class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                                            <img
                                                src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                                alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                class="w-full h-full object-center object-cover">
                                        </div>

                                        <div class="ml-4 flex-1 flex flex-col">
                                            <div>
                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                    <h3>
                                                        <a href="#">
                                                            Throwback Hip Bag
                                                        </a>
                                                    </h3>
                                                    <p class="ml-4">
                                                        $90.00
                                                    </p>
                                                </div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Salmon
                                                </p>
                                            </div>
                                            <div class="flex-1 flex items-end justify-between text-sm">
                                                <p class="text-gray-500">
                                                    Qty 1
                                                </p>

                                                <div class="flex">
                                                    <button type="button"
                                                            class="font-medium text-indigo-600 hover:text-indigo-500">
                                                        Remove
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                        <div class="flex justify-between text-base font-medium text-gray-900">
                            <p>Subtotal</p>
                            <p>$262.00</p>
                        </div>
                        <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                        <div class="mt-6">
                            <a href="#"
                               class="flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Checkout</a>
                        </div>
                        <div class="mt-6 flex justify-center text-sm text-center text-gray-500">
                            <p>
                                or
                                <button type="button" class="text-indigo-600 font-medium hover:text-indigo-500"
                                        @click="cart = false">Continue Shopping<span aria-hidden="true"> →</span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
