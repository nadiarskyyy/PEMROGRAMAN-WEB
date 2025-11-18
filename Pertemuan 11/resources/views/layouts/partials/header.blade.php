<header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md shadow-sm">
    <div class="max-w-6xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo Kedai RR" class="w-10 h-10 rounded-full object-cover shadow-md">
                <div>
                    <div class="font-bold text-lg text-green-800">Kedai RR</div>
                    <div class="text-xs text-gray-500 -mt-0.5">Minuman yang membuatmu bahagia</div>
                </div>
            </div>

            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ url('/') }}" class="hover:text-green-600 {{ Request::is('/') ? 'font-semibold' : '' }}">Home</a>
                <a href="{{ url('/produk') }}" class="hover:text-green-600 {{ Request::is('produk*') ? 'font-semibold' : '' }}">Products</a>
                <a href="{{ url('/about') }}" class="hover:text-green-600 {{ Request::is('about*') ? 'font-semibold' : '' }}">About</a>
            </nav>

            <div class="flex items-center gap-4">
                <div class="hidden md:flex items-center bg-white border rounded-lg overflow-hidden shadow-sm">
                    <input id="search" class="px-3 py-2 w-56 outline-none text-sm" placeholder="Cari minuman...">
                    <button class="px-3 py-2 text-green-700 font-semibold">Cari</button>
                </div>

                <!-- Cart Button -->
                <div class="relative">
                    <button class="p-2 rounded-md hover:bg-green-100">
                        <svg class="w-6 h-6 text-green-700" viewBox="0 0 24 24" fill="none">
                            <path d="M3 3h2l.4 2M7 13h10l3-8H6.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileBtn" class="md:hidden p-2 rounded-md hover:bg-green-100">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobileNav" class="md:hidden hidden border-t bg-white">
        <div class="px-4 py-3 flex flex-col">
            <a href="{{ url('/') }}" class="py-2 {{ Request::is('/') ? 'font-semibold' : '' }}">Home</a>
            <a href="{{ url('/produk') }}" class="py-2 {{ Request::is('produk*') ? 'font-semibold' : '' }}">Products</a>
            <a href="{{ url('/about') }}" class="py-2 {{ Request::is('about*') ? 'font-semibold' : '' }}">About</a>
        </div>
    </div>
</header>