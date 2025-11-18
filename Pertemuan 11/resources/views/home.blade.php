@extends('layouts.app')

@section('title', 'Welcome — Kedai RR')

@section('content')
<!-- WELCOME SECTION -->
<section class="relative h-screen w-full bg-cover bg-center" style="background-image: url('{{ asset(`images/kedai.jpeg`) }}')">
    <!-- Overlay dengan gradient -->
    <div class="absolute inset-0 bg-gradient-overlay"></div>
    
    <!-- Background decorative elements - DIPERBAIKI -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-20 h-20 rounded-full bg-green-400 opacity-20 floating"></div>
        <div class="absolute top-1/3 right-1/4 w-16 h-16 rounded-full bg-white opacity-10 floating" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-1/4 left-1/3 w-24 h-24 rounded-full bg-green-300 opacity-15 floating" style="animation-delay: 1s;"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 flex items-center justify-center h-full px-6 text-center">
        <div class="fade-in max-w-4xl">
            
            <!-- Logo/Heading -->
            <div class="mb-8">
                <h1 class="text-5xl md:text-7xl font-extrabold text-white drop-shadow-lg leading-tight text-shadow">
                    Welcome to <span class="text-green-400 logo-glow">Kedai RR</span>
                </h1>
                <div class="mt-4 h-1 w-24 bg-green-400 mx-auto rounded-full shine"></div>
            </div>

            <!-- Elegant tagline -->
            <p class="mt-6 text-xl md:text-2xl text-gray-200 italic tracking-wide text-shadow">
                Enjoy fresh drinks and coffee that brighten your day.
            </p>

            <!-- Additional tagline -->
            <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto text-shadow">
                Experience the perfect blend of flavor and comfort in every sip.
            </p>

            <!-- CTA -->
            <div class="mt-12">
                <a href="{{ url('/produk') }}" 
                   class="bg-green-500 hover:bg-green-600 text-white font-semibold px-10 py-4 rounded-full shadow-xl transition duration-300 pulse-btn text-lg inline-flex items-center">
                    <span>Visit Kedai RR</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Additional info -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6 text-white text-shadow">
                <div class="bg-black bg-opacity-30 p-4 rounded-lg backdrop-blur-sm">
                    <div class="text-green-400 text-2xl mb-2">☕</div>
                    <h3 class="font-semibold">Premium Coffee</h3>
                    <p class="text-sm mt-1">Freshly brewed from quality beans</p>
                </div>
                <div class="bg-black bg-opacity-30 p-4 rounded-lg backdrop-blur-sm">
                    <div class="text-green-400 text-2xl mb-2">🥤</div>
                    <h3 class="font-semibold">Refreshing Drinks</h3>
                    <p class="text-sm mt-1">Cool beverages for every taste</p>
                </div>
                <div class="bg-black bg-opacity-30 p-4 rounded-lg backdrop-blur-sm">
                    <div class="text-green-400 text-2xl mb-2">🌟</div>
                    <h3 class="font-semibold">Cozy Ambiance</h3>
                    <p class="text-sm mt-1">Perfect place to relax and unwind</p>
                </div>
            </div>

        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>
@endsection