<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kedai RR — Final</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .card-img { background-size: cover; background-position: center; }
    .fade-in { opacity: 0; transform: translateY(20px); transition: all 0.8s ease; }
    .fade-in.show { opacity: 1; transform: translateY(0); }
    .hero-img { animation: float 4s ease-in-out infinite; }
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
    }
    .pulse-btn {
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(22,163,74,0.4); }
      70% { box-shadow: 0 0 0 12px rgba(22,163,74,0); }
      100% { box-shadow: 0 0 0 0 rgba(22,163,74,0); }
    }
    .cart-scroll::-webkit-scrollbar { width: 8px; height: 8px }
    .cart-scroll::-webkit-scrollbar-thumb { background: rgba(0,0,0,.15); border-radius: 6px }
  </style>
</head>
<body class="bg-gradient-to-b from-green-50 to-white text-gray-800 antialiased">

  <!-- NAVBAR -->
  <header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md shadow-sm">
    <div class="max-w-6xl mx-auto px-4 md:px-6 lg:px-8 flex items-center justify-between h-16">
      <!-- LOGO & BRAND -->
      <div class="flex items-center gap-3">
        <img src="images/logo.jpg" alt="Logo Kedai RR" class="w-10 h-10 rounded-full object-cover shadow-md">
        <div>
          <div class="font-bold text-lg text-green-800">Kedai RR</div>
          <div class="text-xs text-gray-500 -mt-0.5">Minuman yang membuatmu bahagia</div>
        </div>
      </div>

      <!-- DESKTOP NAV -->
      <nav class="hidden md:flex items-center gap-6">
        <a href="index.html#home" class="hover:text-green-600 font-semibold">Home</a>
        <a href="produk.html" class="hover:text-green-600">Products</a>
        <a href="about.html" class="hover:text-green-600">About</a>
      </nav>

      <!-- RIGHT MENU -->
      <div class="flex items-center gap-4">
        <!-- SEARCH -->
        <div class="hidden md:flex items-center bg-white border rounded-lg overflow-hidden shadow-sm">
          <input id="search" class="px-3 py-2 w-56 outline-none text-sm" placeholder="Cari minuman..." />
          <button id="searchBtn" class="px-3 py-2 text-green-700 font-semibold hover:bg-green-50 transition">Cari</button>
        </div>

        <!-- CART -->
        <div class="relative">
          <button id="cartBtn" class="p-2 rounded-md hover:bg-green-100 transition">
            <svg class="w-6 h-6 text-green-700" viewBox="0 0 24 24" fill="none">
              <path d="M3 3h2l.4 2M7 13h10l3-8H6.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span id="cartBadge" class="absolute -top-2 -right-2 bg-red-600 text-white text-xs px-2 py-0.5 rounded-full hidden">0</span>
          </button>
          <div id="cartBox" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl p-4 z-50 animate-fade-in">
            <h4 class="font-semibold mb-3">Keranjang Kamu</h4>
            <div id="cartList" class="cart-scroll max-h-48 overflow-y-auto space-y-2 text-sm text-gray-700">
              <p class="text-gray-400">Keranjang kosong</p>
            </div>
            <div class="mt-3 flex justify-between items-center">
              <div>
                <div class="text-sm text-gray-500">Total:</div>
                <div id="cartTotal" class="font-bold text-green-700">Rp 0</div>
              </div>
              <div class="flex flex-col gap-2">
                <button id="checkoutBtn" class="bg-green-600 text-white px-3 py-2 rounded-md hover:bg-green-700 transition">Checkout</button>
                <button id="clearCart" class="text-sm text-red-600 hover:underline">Kosongkan</button>
              </div>
            </div>
          </div>
        </div>

        <!-- MOBILE BTN -->
        <button id="mobileBtn" class="md:hidden p-2 rounded-md hover:bg-green-100 transition">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- MOBILE NAV -->
    <div id="mobileNav" class="md:hidden hidden border-t bg-white">
      <div class="px-4 py-3 flex flex-col">
        <a href="index.html#home" class="py-2 hover:text-green-600 transition">Home</a>
        <a href="produk.html" class="py-2 hover:text-green-600 transition">Products</a>
        <a href="about.html" class="py-2 hover:text-green-600 transition">About</a>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section id="home" class="relative h-screen bg-cover bg-center text-gray-800" style="background-image: url('images/home.jpg');">
    <div class="max-w-6xl mx-auto px-4 md:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <div class="fade-in">
        <h1 class="text-4xl md:text-5xl font-extrabold text-green-800 leading-tight">
          TRY OUR <span class="text-green-600">NEW FLAVOR!</span>
        </h1>
        <p class="mt-4 text-gray-600 leading-relaxed">
          "Selamat datang di dunia rasa yang segar dan penuh kejutan! Di Kedai RR, setiap minuman dibuat dengan cinta dan kesegaran setiap hari — mulai dari susu creamy dengan berbagai varian rasa seperti Thai Tea, Red Velvet, dan Alpukat, hingga kopi hangat yang memikat seperti Caramel Machiato atau Brown Sugar. <br><br>
          Tak lupa, minuman segar seperti Lychee Tea dan Orange Squash Yakult siap memberikan sensasi sejuk yang menyegarkan. Tambahkan topping favoritmu seperti Boba atau Oreo untuk pengalaman yang lebih seru. Jangan tunggu lagi, pilih, pesan, dan rasakan sensasi rasa yang berbeda di setiap tegukan!"
        </p>
        <div class="mt-6 flex flex-wrap gap-3">
          <button id="ctaProducts" class="bg-green-600 text-white px-5 py-3 rounded-lg shadow pulse-btn hover:bg-green-700 transition">Lihat Produk</button>
          <button id="ctaOrder" class="border border-green-600 text-green-700 px-5 py-3 rounded-lg hover:bg-green-50 transition">Pesan Sekarang</button>
        </div>
      </div>

    
      </div>
    </div>
  </section>

  <!-- SCRIPT -->
  <script>
    // CTA buttons
    document.getElementById('ctaProducts').addEventListener('click', function() {
      window.location.href = 'produk.html';
    });
    document.getElementById('ctaOrder').addEventListener('click', function() {
      window.location.href = 'produk.html#products';
    });

    // Mobile nav toggle
    const mobileBtn = document.getElementById("mobileBtn");
    const mobileNav = document.getElementById("mobileNav");
    mobileBtn.addEventListener("click", () => {
      mobileNav.classList.toggle("hidden");
    });

    // Scroll reveal
    const fadeEls = document.querySelectorAll(".fade-in");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add("show");
      });
    }, { threshold: 0.1 });
    fadeEls.forEach(el => observer.observe(el));
  </script>

</body>
</html>
