@extends('layouts.app')

@section('title', 'Kedai RR — Final')

@section('content')
<!-- HERO -->
<section id="home" class="relative min-h-screen bg-cover bg-center text-gray-800" style="background-image: url('{{ asset(`images/home.jpg`) }}');">




    <div class="absolute inset-0 bg-white/80"></div>
    
    <div class="relative max-w-6xl mx-auto px-4 md:px-6 lg:px-8 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div class="fade-in">
            <h1 class="text-4xl md:text-5xl font-extrabold text-green-800 leading-tight">
                TRY OUR <span class="text-green-600">NEW FLAVOR!</span>
            </h1>
            <p class="mt-4 text-gray-600 leading-relaxed">
                "Selamat datang di dunia rasa yang segar dan penuh kejutan! Di Kedai RR, setiap minuman dibuat dengan cinta dan kesegaran setiap hari — mulai dari susu creamy dengan berbagai varian rasa seperti Thai Tea, Red Velvet, dan Alpukat, hingga kopi hangat yang memikat seperti Caramel Machiato atau Brown Sugar. <br><br>
                Tak lupa, minuman segar seperti Lychee Tea dan Orange Squash Yakult siap memberikan sensasi sejuk yang menyegarkan. Tambahkan topping favoritmu seperti Boba atau Oreo untuk pengalaman yang lebih seru. Jangan tunggu lagi, pilih, pesan, dan rasakan sensasi rasa yang berbeda di setiap tegukan!"
            </p>
            <div class="mt-6 flex flex-wrap gap-3">
                <button onclick="window.location.href=`{{ url('/produk') }}`" class="bg-green-600 text-white px-5 py-3 rounded-lg shadow pulse-btn hover:bg-green-700 transition">
                    Lihat Produk
                </button>
                <button onclick="window.location.href=`{{ url('/produk') }}`"
 class="border border-green-600 text-green-700 px-5 py-3 rounded-lg hover:bg-green-50 transition">
                    Pesan Sekarang
                </button>
            </div>
        </div>

        <div class="fade-in delay-200">
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <h3 class="text-xl font-bold text-green-800 mb-4">Menu Spesial Hari Ini</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center p-3 bg-green-50 rounded-lg">
                        <span class="font-semibold">Thai Tea</span>
                        <span class="text-green-700 font-bold">Rp 10,000</span>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-green-50 rounded-lg">
                        <span class="font-semibold">Coffee Latte</span>
                        <span class="text-green-700 font-bold">Rp 12,000</span>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-green-50 rounded-lg">
                        <span class="font-semibold">Lychee Tea</span>
                        <span class="text-green-700 font-bold">Rp 8,000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .delay-200 { transition-delay: 0.2s; }
</style>
@endpush