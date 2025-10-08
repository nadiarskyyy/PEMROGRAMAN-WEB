<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Kedai RR — Products</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
/* Scrollbar cart */
.cart-scroll::-webkit-scrollbar{width:8px;height:8px}
.cart-scroll::-webkit-scrollbar-thumb{background:rgba(0,0,0,.15);border-radius:6px}

/* Hover animasi produk */
.product-card{
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 1rem;
  overflow: hidden;
}

/* Gradasi per kategori */
.product-card.milk{background: linear-gradient(135deg, rgba(134,239,172,0.3), rgba(34,197,94,0.2));}
.product-card.coffee{background: linear-gradient(135deg, rgba(253,186,116,0.3), rgba(251,146,60,0.2));}
.product-card.fresh{background: linear-gradient(135deg, rgba(147,197,253,0.3), rgba(59,130,246,0.2));}
.product-card.topping{background: linear-gradient(135deg, rgba(249,168,212,0.3), rgba(236,72,153,0.2));}

/* Hover efek */
.product-card:hover{
  transform: translateY(-5px) scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

/* Modal animasi */
@keyframes fadeIn { from {opacity:0; transform:scale(.9);} to {opacity:1; transform:scale(1);} }
.animate-fade-in { animation: fadeIn 0.3s ease-out; }
</style>
</head>
<body class="bg-gradient-to-b from-green-50 to-white text-gray-800 antialiased">

<!-- NAVBAR -->
<header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md shadow-sm">
<div class="max-w-6xl mx-auto px-4 md:px-6 lg:px-8 flex items-center justify-between h-16">
  <div class="flex items-center gap-3">
    <img src="images/logo.jpg" alt="Logo Kedai RR" class="w-10 h-10 rounded-full object-cover shadow-md">
    <div>
      <div class="font-bold text-lg text-green-800">Kedai RR</div>
      <div class="text-xs text-gray-500 -mt-0.5">Minuman yang membuatmu bahagia</div>
    </div>
  </div>
  <nav class="hidden md:flex items-center gap-6">
    <a href="index.html#home" class="hover:text-green-600">Home</a>
    <a href="produk.html#products" class="hover:text-green-600 font-semibold">Products</a>
    <a href="about.html#about" class="hover:text-green-600">About</a>
  </nav>
  <div class="flex items-center gap-4">
    <div class="hidden md:flex items-center bg-white border rounded-lg overflow-hidden shadow-sm">
      <input id="searchTop" class="px-3 py-2 w-56 outline-none text-sm" placeholder="Cari minuman..." />
      <button id="searchTopBtn" class="px-3 py-2 text-green-700 font-semibold">Cari</button>
    </div>
    <div class="relative">
      <button id="cartBtn" class="p-2 rounded-md hover:bg-green-100">
        <svg class="w-6 h-6 text-green-700" viewBox="0 0 24 24" fill="none">
          <path d="M3 3h2l.4 2M7 13h10l3-8H6.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span id="cartBadge" class="absolute -top-2 -right-2 bg-red-600 text-white text-xs px-2 py-0.5 rounded-full hidden">0</span>
      </button>
      <div id="cartBox" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl p-4 z-50">
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
            <button id="checkoutBtn" class="bg-green-600 text-white px-3 py-2 rounded-md hover:bg-green-700">Checkout</button>
            <button id="clearCart" class="text-sm text-red-600 hover:underline">Kosongkan</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>

<!-- PRODUCTS SECTION -->
<section id="products" class="max-w-6xl mx-auto px-4 md:px-6 lg:px-8 py-8">
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
<h2 class="text-2xl font-bold text-green-800">OUR MENU</h2>
<div class="flex gap-3 items-center">
  <div class="flex items-center bg-white border rounded-lg overflow-hidden">
    <input id="search" class="px-3 py-2 w-56 outline-none text-sm" placeholder="Cari minuman..." />
    <button id="searchBtn" class="px-3 py-2 text-green-700 font-semibold">Cari</button>
  </div>
  <select id="categorySelect" class="px-3 py-2 border rounded-lg text-sm">
    <option value="all">All Categories</option>
    <option value="milk">Milk Base</option>
    <option value="coffee">Coffee Base</option>
    <option value="fresh">Fresh</option>
    <option value="topping">Topping</option>
  </select>
</div>
</div>
<div id="productsGrid" class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"></div>
</section>

<!-- CHECKOUT MODAL -->
<div id="checkoutModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/40">
<div class="bg-white rounded-xl w-full max-w-lg p-6">
<h3 class="text-lg font-semibold text-green-800">Checkout</h3>
<div id="checkoutItems" class="mt-4 space-y-2 max-h-56 overflow-y-auto text-sm text-gray-700"></div>
<div class="mt-4 flex justify-between items-center">
<div>
<div class="text-sm text-gray-500">Total</div>
<div id="checkoutTotal" class="text-2xl font-bold text-green-700">Rp 0</div>
</div>
<div class="flex flex-col gap-2">
<button id="confirmCheckout" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Konfirmasi & Bayar</button>
<button id="closeCheckout" class="text-sm text-gray-600 hover:underline">Batal</button>
</div>
</div>
</div>
</div>

<!-- SUCCESS MODAL -->
<div id="successModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/40">
  <div class="bg-white rounded-xl w-full max-w-sm p-6 text-center animate-fade-in">
    <div class="flex items-center justify-center w-16 h-16 mx-auto rounded-full bg-green-100">
      <svg class="w-10 h-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
    </div>
    <h3 class="mt-4 text-xl font-semibold text-green-800">Pembayaran Berhasil!</h3>
    <p class="mt-2 text-gray-600 text-sm">Terima kasih telah berbelanja di <b>Kedai RR</b>. Pesananmu sedang diproses 🎉</p>
    <button id="closeSuccess" class="mt-6 px-5 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
      Kembali ke Produk
    </button>
  </div>
</div>

<!-- NOTIFIKASI SUARA -->
<audio id="successSound" src="https://actions.google.com/sounds/v1/cartoon/clang_and_wobble.ogg" preload="auto"></audio>

<script>
// ---------- data produk ----------
const products = [
  {id:'thai',name:'Thai Tea',category:'milk',prices:[{label:'S',value:6000},{label:'L',value:10000}],img :'images/thai.jpg'},
  {id:'green',name:'Green Tea',category:'milk',prices:[{label:'Regular',value:10000}],img:'images/green.jpg'},
  {id:'coklat',name:'Coklat',category:'milk',prices:[{label:'Regular',value:10000}],img:'images/coklat.jpg'},
  {id:'milo',name:'Milo',category:'milk',prices:[{label:'Regular',value:10000}],img:'images/milo.jpg'},
  {id:'taro',name:'Taro',category:'milk',prices:[{label:'Regular',value:10000}],img:'images/taro.jpg'},
  {id:'redvelvet',name:'Red Velvet',category:'milk',prices:[{label:'Regular',value:10000}],img:'images/redvelvet.jpg'},
  {id:'alpukat',name:'Alpukat',category:'milk',prices:[{label:'Regular',value:10000}],img:'images/alpukat.jpg'},
  {id:'vanila',name:'Vanila',category:'milk',prices:[{label:'Regular',value:10000}],img:'images/vanila.jpg'},
  {id:'cookies',name:'Cookies & Cream / Oreo',category:'milk',prices:[{label:'Regular',value:10000}],img:'images/cookies.jpg'},
  {id:'brown',name:'Brown Sugar',category:'coffee',prices:[{label:'Regular',value:10000}],img:'images/brown.jpg'},
  {id:'coffeemilk',name:'Coffee Milk',category:'coffee',prices:[{label:'Regular',value:12000}],img:'images/coffeemilk.jpg'},
  {id:'latte',name:'Coffee Latte',category:'coffee',prices:[{label:'Regular',value:10000}],img:'images/latte.jpg'},
  {id:'aren',name:'Coffee Aren',category:'coffee',prices:[{label:'Regular',value:12000}],img:'images/aren.jpg'},
  {id:'caramel',name:'Caramel Machiato',category:'coffee',prices:[{label:'Regular',value:12000}],img:'images/caramel.jpg'},
  {id:'cappucino',name:'Cappucino',category:'coffee',prices:[{label:'Regular',value:10000}],img:'images/cappucino.jpg'},
  {id:'icetea',name:'Ice Tea',category:'fresh',prices:[{label:'Regular',value:10000}],img:'images/icetea.jpg'},
  {id:'lemon',name:'Lemon Tea',category:'fresh',prices:[{label:'Regular',value:10000}],img:'images/lemon.jpg'},
  {id:'lycheet',name:'Lychee Tea',category:'fresh',prices:[{label:'Regular',value:10000}],img:'images/lycheet.jpg'},
  {id:'lycheesq',name:'Lychee Squash Yakult',category:'fresh',prices:[{label:'Regular',value:10000}],img:'images/lycheesq.jpg'},
  {id:'orange',name:'Orange Squash Yakult',category:'fresh',prices:[{label:'Regular',value:10000}],img:'images/orange.jpg'},
  {id:'melon',name:'Melon Squash Yakult',category:'fresh',prices:[{label:'Regular',value:10000}],img:'images/melon.jpg'},
  {id:'extramilk',name:'Extra Milk',category:'topping',prices:[{label:'Extra',value:2000}],img:'images/extramilk.jpg'},
  {id:'boba',name:'Boba',category:'topping',prices:[{label:'Extra',value:3000}],img:'images/boba.jpg'},
  {id:'oreoTop',name:'Oreo (topping)',category:'topping',prices:[{label:'Extra',value:3000}],img:'images/oreoTop.jpg'}
];

let cart = [];
const $ = s => document.querySelector(s);
function formatRp(n){ return 'Rp '+n.toString().replace(/\B(?=(\d{3})+(?!\d))/g,'.'); }

// render produk full image
function renderProducts(list=products){
  const grid = $('#productsGrid'); 
  grid.innerHTML='';
  list.forEach(p=>{
    const el = document.createElement('div');
    el.className=`product-card ${p.category} relative`;
    el.style.backgroundImage = `url('${p.img}')`;
    el.style.backgroundSize = 'cover';
    el.style.backgroundPosition = 'center';
    el.style.height = '280px';

    const overlay = document.createElement('div');
    overlay.className='absolute inset-0 bg-black/30 flex flex-col justify-end p-3';
    overlay.innerHTML = `
      <h4 class="text-white font-bold text-center">${p.name}</h4>
      <table class="w-full text-white text-sm mt-1">
        <tbody>
          ${p.prices.map(pr => `<tr><td>${pr.label}</td><td class="text-right">${formatRp(pr.value)}</td></tr>`).join('')}
        </tbody>
      </table>
      <div class="flex gap-2 mt-2 justify-center">
        <button class="buy-now px-3 py-1 rounded-md text-sm bg-gray-800/80 text-white">Buy Now</button>
        <button class="add-cart px-3 py-1 rounded-md text-sm bg-green-600/80 text-white">Add to Cart</button>
      </div>
    `;
    overlay.querySelector('.add-cart').onclick = ()=>onAddToCart(p);
    overlay.querySelector('.buy-now').onclick = ()=>{ onAddToCart(p); openCheckout(); };
    el.appendChild(overlay);
    grid.appendChild(el);
  });
}
renderProducts();

// Filter dan search
$('#searchBtn').onclick = ()=>filterProducts($('#search').value, $('#categorySelect').value);
$('#searchTopBtn').onclick = ()=>filterProducts($('#searchTop').value, $('#categorySelect').value);
$('#categorySelect').onchange = ()=>filterProducts($('#search').value, $('#categorySelect').value);

function filterProducts(search='', cat='all'){
  const s = search.toLowerCase();
  const filtered = products.filter(p => (p.name.toLowerCase().includes(s)) && (cat==='all'||p.category===cat));
  renderProducts(filtered);
}

// Cart
function onAddToCart(p){
  const idx = cart.findIndex(x=>x.id===p.id);
  if(idx>-1) cart[idx].qty++; else cart.push({...p, qty:1});
  updateCart();
}
function updateCart(){
  const list = $('#cartList'); list.innerHTML='';
  if(cart.length===0){ list.innerHTML='<p class="text-gray-400">Keranjang kosong</p>'; }
  else{ cart.forEach(c=>list.innerHTML+=`<div class="flex justify-between"><span>${c.name} x${c.qty}</span><span>${formatRp(c.prices[0].value*c.qty)}</span></div>`);}
  $('#cartBadge').textContent = cart.reduce((a,b)=>a+b.qty,0);
  $('#cartBadge').classList.toggle('hidden', cart.length===0);
  $('#cartTotal').textContent = formatRp(cart.reduce((a,b)=>a+b.prices[0].value*b.qty,0));
}
$('#cartBtn').onclick = ()=>$('#cartBox').classList.toggle('hidden');
$('#clearCart').onclick = ()=>{ cart=[]; updateCart(); };

// Checkout
function openCheckout(){ $('#checkoutModal').classList.remove('hidden'); renderCheckout(); }
function renderCheckout(){
  const items = $('#checkoutItems'); items.innerHTML='';
  if(cart.length===0){ items.innerHTML='<p class="text-gray-400">Keranjang kosong</p>'; }
  else{ cart.forEach(c=>items.innerHTML+=`<div class="flex justify-between"><span>${c.name} x${c.qty}</span><span>${formatRp(c.prices[0].value*c.qty)}</span></div>`);}
  $('#checkoutTotal').textContent = formatRp(cart.reduce((a,b)=>a+b.prices[0].value*b.qty,0));
}
$('#checkoutBtn').onclick = ()=>{ if(cart.length===0) alert('Keranjang masih kosong!'); else openCheckout(); };
$('#closeCheckout').onclick = ()=>$('#checkoutModal').classList.add('hidden');

// Confirm Checkout
$('#confirmCheckout').onclick = ()=>{
  if(cart.length===0) return;
  cart = []; updateCart();
  $('#checkoutModal').classList.add('hidden');
  $('#successModal').classList.remove('hidden');
  $('#successSound').play();
};
$('#closeSuccess').onclick = ()=>$('#successModal').classList.add('hidden');
</script>
</body>
</html>
