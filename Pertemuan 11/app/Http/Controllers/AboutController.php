<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman about
     */
    public function index()
    {
        $aboutData = [
            'icon' => '🏪',
            'title' => 'Tentang Kedai RR',
            'description' => 'Kedai RR hadir menyajikan minuman segar dengan berbagai pilihan rasa: milk base, coffee base, dan fresh. Dibuat dari bahan pilihan, racikan bersih, dan harga ramah kantong.'
        ];

        $features = [
            [
                'icon' => '❤️',
                'title' => 'Racikan Rumahan',
                'description' => 'Dibuat dengan penuh cinta dan perhatian'
            ],
            [
                'icon' => '🌱', 
                'title' => 'Bahan Segar',
                'description' => 'Menggunakan bahan-bahan berkualitas terbaik'
            ],
            [
                'icon' => '💰',
                'title' => 'Harga Terjangkau',
                'description' => 'Harga ramah di kantong untuk semua kalangan'
            ]
        ];

        return view('about', compact('aboutData', 'features'));
    }
}