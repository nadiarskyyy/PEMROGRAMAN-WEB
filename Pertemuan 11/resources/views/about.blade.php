@extends('layouts.app')

@section('title', 'Kedai RR — About')

@section('content')
<!-- ABOUT CONTENT -->
<section id="about" class="py-20">
    <div class="max-w-6xl mx-auto px-4 md:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center">
        <div class="fade-up">
            <h1 class="text-4xl font-extrabold text-green-800 mb-4">Tentang Kedai RR</h1>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Kedai RR hadir menyajikan minuman segar dengan berbagai pilihan rasa: milk base, coffee base, dan fresh.
                Dibuat dari bahan pilihan, racikan bersih, dan harga ramah kantong.
            </p>
            <ul class="text-gray-700 space-y-2 mb-6">
                <li>• Buka: 10.00 - 22.00</li>
                <li>• Lokasi: Jl. Mannuruki Raya Blok F2 No,1</li>
                <li>• Telepon: 0838-5437-0187</li>
            </ul>
            <a href="{{ url('/') }}" class="inline-block bg-green-600 text-white px-5 py-3 rounded-lg shadow hover:bg-green-700 transition">
                BACK
            </a>
        </div>

        <div class="fade-up delay-200">
            <div class="bg-white rounded-2xl shadow-lg p-8 transform hover:scale-105 transition">
                <h2 class="font-semibold text-green-700 mb-4 text-xl">Kenapa pilih kami?</h2>
                <ol class="list-decimal list-inside text-gray-600 space-y-2">
                    <li>Racikan rumahan penuh cinta</li>
                    <li>Bahan segar & berkualitas</li>
                    <li>Harga terjangkau untuk semua</li>
                </ol>
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