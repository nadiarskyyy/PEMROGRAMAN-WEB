<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Menampilkan halaman index/welcome
     */
    public function index()
    {
        $featuredProducts = [
            [
                'icon' => '🥤',
                'title' => 'Thai Tea',
                'description' => 'Minuman teh thai yang segar dan manis',
                'price' => 10000
            ],
            [
                'icon' => '☕', 
                'title' => 'Coffee Latte',
                'description' => 'Kopi latte dengan rasa yang creamy',
                'price' => 12000
            ],
            [
                'icon' => '🍋',
                'title' => 'Lemon Tea',
                'description' => 'Teh lemon yang menyegarkan',
                'price' => 8000
            ]
        ];

        $specialOffers = [
            [
                'title' => 'Thai Tea',
                'price' => 10000
            ],
            [
                'title' => 'Coffee Latte',
                'price' => 12000
            ],
            [
                'title' => 'Lychee Tea', 
                'price' => 8000
            ]
        ];

        return view('welcome', compact('featuredProducts', 'specialOffers'));
    }
}