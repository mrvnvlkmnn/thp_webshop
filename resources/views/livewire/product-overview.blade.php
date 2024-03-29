<div class="bg-white">
    <div class="pt-6">
        <nav aria-label="Breadcrumb">
            <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                    <div class="flex items-center">
                        <a href="/shop/" class="mr-2 text-sm font-medium text-gray-900">
                            Shop
                        </a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                        <a href="#" class="mr-2 text-sm font-medium text-yellow-light">
                            {{ $product->product_name }}
                        </a>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Image gallery -->
        <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Two each of gray, white, and black shirts laying flat." class="w-full h-full object-center object-cover">
            </div>
            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg" alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                </div>
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="Model wearing plain gray basic tee." class="w-full h-full object-center object-cover">
                </div>
            </div>
            <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg" alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
            </div>
        </div>

        <!-- Product info -->
        <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-extrabold tracking-tight text-yellow-light sm:text-3xl">
                    {{ $product->product_name }}
                </h1>
            </div>

            <!-- Options -->
            <div class="mt-4 lg:mt-0 lg:row-span-3">
                <h2 class="sr-only">Product information</h2>
                <p class="text-3xl text-gray-900">{{ $product->list_price }}€</p>

                <!-- Reviews -->
                <div class="mt-6">
                    <h3 class="sr-only">Reviews</h3>
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <!--
                              Heroicon name: solid/star

                              Active: "text-gray-900", Default: "text-gray-200"
                            -->
                            <svg class="text-yellow-light h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <!-- Heroicon name: solid/star -->
                            <svg class="text-yellow-light h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <!-- Heroicon name: solid/star -->
                            <svg class="text-yellow-light h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <!-- Heroicon name: solid/star -->
                            <svg class="text-yellow-light h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <!-- Heroicon name: solid/star -->
                            <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <p class="sr-only">4 out of 5 stars</p>
                        <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                    </div>
                </div>

                <div class="mt-10">
                    <!-- Colors -->
                    <div>
                        <h3 class="text-sm text-gray-900 font-medium">Color</h3>

                        <fieldset class="mt-4">
                            <legend class="sr-only">
                                Choose a color
                            </legend>
                            <div class="flex items-center space-x-3">
                                <!--
                                  Active and Checked: "ring ring-offset-1"
                                  Not Active and Checked: "ring-2"
                                -->
                                <label class="-m-0.5 p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                    <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                                    <p id="color-choice-0-label" class="sr-only">
                                        White
                                    </p>
                                    <span aria-hidden="true" class="h-8 w-8 bg-red-600 border border-black border-opacity-10 rounded-full"></span>
                                </label>

                                <!--
                                  Active and Checked: "ring ring-offset-1"
                                  Not Active and Checked: "ring-2"
                                -->
                                <label class="-m-0.5 p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                    <input type="radio" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                                    <p id="color-choice-1-label" class="sr-only">
                                        Gray
                                    </p>
                                    <span aria-hidden="true" class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                                </label>

                                <!--
                                  Active and Checked: "ring ring-offset-1"
                                  Not Active and Checked: "ring-2"
                                -->
                                <label class="-m-0.5 p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">
                                    <input type="radio" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                                    <p id="color-choice-2-label" class="sr-only">
                                        Black
                                    </p>
                                    <span aria-hidden="true" class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                                </label>
                            </div>
                        </fieldset>
                    </div>

                    <!-- Sizes -->
                    <div class="mt-10">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm text-gray-900 font-medium">Size</h3>
                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                        </div>

                        <fieldset class="mt-4">
                            <legend class="sr-only">
                                Choose a size
                            </legend>
                            <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label class="group border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                    <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                    <p id="size-choice-1-label">
                                        XXS
                                    </p>

                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                </label>

                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label class="group border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                    <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                    <p id="size-choice-1-label">
                                        XS
                                    </p>

                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                </label>

                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label class="group border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                    <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                                    <p id="size-choice-2-label">
                                        S
                                    </p>

                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                </label>

                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label class="group border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                    <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                                    <p id="size-choice-3-label">
                                        M
                                    </p>

                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                </label>

                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label class="group border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                    <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                                    <p id="size-choice-4-label">
                                        L
                                    </p>

                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                </label>

                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label class="group border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                    <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                                    <p id="size-choice-5-label">
                                        XL
                                    </p>

                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                </label>

                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label class="group border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                    <input type="radio" name="size-choice" value="2XL" class="sr-only" aria-labelledby="size-choice-6-label">
                                    <p id="size-choice-6-label">
                                        2XL
                                    </p>

                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                </label>

                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label class="group border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                    <input type="radio" name="size-choice" value="3XL" class="sr-only" aria-labelledby="size-choice-7-label">
                                    <p id="size-choice-7-label">
                                        3XL
                                    </p>

                                    <!--
                                      Active: "border", Not Active: "border-2"
                                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                                </label>
                            </div>
                        </fieldset>
                    </div>

                    <button wire:click="test" class="mt-10 w-full bg-yellow-light border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white-light hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to bag</button>
                </div>
            </div>

            <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <!-- Description and details -->
                <div>
                    <h3 class="sr-only">Description</h3>

                    <div class="space-y-6">
                        <p class="text-base text-white-light">The Basic Tee 6-Pack allows you to fully express your vibrant personality with three grayscale options. Feeling adventurous? Put on a heather gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need to add an extra pop of color to your outfit? Our white tee has you covered.</p>
                    </div>
                </div>

                <div class="mt-10">
                    <h3 class="text-sm font-medium text-yellow-light">Highlights</h3>

                    <div class="mt-4">
                        <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                            <li class="text-gray-400"><span class="text-white-light">Hand cut and sewn locally</span></li>

                            <li class="text-gray-400"><span class="text-white-light">Dyed with our proprietary colors</span></li>

                            <li class="text-gray-400"><span class="text-white-light">Pre-washed &amp; pre-shrunk</span></li>

                            <li class="text-gray-400"><span class="text-white-light">Ultra-soft 100% cotton</span></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="text-sm font-medium text-yellow-light">Details</h2>

                    <div class="mt-4 space-y-6">
                        <p class="text-sm text-white-light">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
