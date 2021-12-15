<div x-data="{ cart: false }"">
    <div class="relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center md:justify-start md:space-x-10 pt-4">
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    @if(Request::path() == '/')
                        <a href="/" class="text-base font-medium text-yellow-light hover:text-yellow-dark rounded border-b-4 border-yellow-light">
                            Home
                        </a>
                    @else
                        <a href="/" class="text-base font-medium text-white-light hover:text-yellow-dark">
                            Home
                        </a>
                    @endif
                    <svg height="25" width="25">
                        <circle cx="12.5" cy="12.5" r="2" fill="white" />
                    </svg>
                    @if(Request::path() == 'shop')
                        <a href="/shop/" class="text-base font-medium text-yellow-light hover:text-yellow-dark rounded border-b-4 border-yellow-light">
                            Shop
                        </a>
                    @else
                        <a href="/shop/" class="text-base font-medium text-white-light hover:text-yellow-dark">
                            Shop
                        </a>
                    @endif
                    <svg height="25" width="25">
                        <circle cx="12.5" cy="12.5" r="2" fill="white" />
                    </svg>

                    <a href="#" class="text-base font-medium text-white-light hover:text-yellow-dark">
                        Blog
                    </a>
                    <svg height="25" width="25">
                        <circle cx="12.5" cy="12.5" r="2" fill="white" />
                    </svg>

                    <a href="#" class="text-base font-medium text-white-light hover:text-yellow-dark">
                        About
                    </a>
                    <svg height="25" width="25">
                        <circle cx="12.5" cy="12.5" r="2" fill="white" />
                    </svg>

                    <a href="#" class="text-base font-medium text-white-light hover:text-yellow-dark">
                        Contact
                    </a>
                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0"">
                    <a role="button" @click="cart = true" class="bg-yellow-light rounded-full border-2 border-yellow-light py-1 px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 svgChangeColor" fill="white" viewBox="0 0 24 24" >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                    @guest
                        <a href="/login/" class="pl-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 svgChangeColor" fill="white" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </a>
                    @endguest
                    @auth
                        <livewire:logout />
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <livewire:cart />
</div>
