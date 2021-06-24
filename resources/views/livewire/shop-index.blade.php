<div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($products as $product)
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-white-light text-xs tracking-widest title-font mb-1">{{ $product->categories_id[0]->category_name }}</h3>
                        <h2 class="text-white-light hover:text-yellow-light title-font text-lg font-medium"><a href="/shop/{{ $product->slug }}">{{ $product->product_name }}</a></h2>
                        <p class="mt-1 text-yellow-light">{{ $product->list_price }}€</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="rounded bg-white-light relative max-w-7xl mx-auto px-4 sm:px-6 mt-20">
        <div class="mt-10 sm:mt-0 py-5">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form wire:submit.prevent>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="product_name" class="block text-sm font-medium text-gray-700">Produkt Name</label>
                                        <input wire:model="product_name" type="text" name="product_name" id="product_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="list_price" class="block text-sm font-medium text-gray-700">Listen Preis</label>
                                        <input wire:model="list_price" type="text" name="list_price" id="list_price" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="category_name" class="block text-sm font-medium text-gray-700">Kategorie Name</label>
                                        <input wire:model="category_name" type="text" name="category_name" id="category_name" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="quantity" class="block text-sm font-medium text-gray-700">Menge</label>
                                        <input wire:model="quantity" type="text" name="quantity" id="quantity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('password') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button wire:click="addProduct" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
