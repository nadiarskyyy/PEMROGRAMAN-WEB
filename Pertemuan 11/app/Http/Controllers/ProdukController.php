<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Menampilkan halaman produk
     */
    public function index()
    {
        // Data produk sesuai dengan JavaScript di view
        $products = [
            [
                'id' => 'thai',
                'name' => 'Thai Tea', 
                'category' => 'milk',
                'prices' => [['label' => 'S', 'value' => 6000], ['label' => 'L', 'value' => 10000]],
                'img' => 'images/thai.jpg'
            ],
            [
                'id' => 'green',
                'name' => 'Green Tea',
                'category' => 'milk', 
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/green.jpg'
            ],
            [
                'id' => 'coklat',
                'name' => 'Coklat',
                'category' => 'milk',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/coklat.jpg'
            ],
            [
                'id' => 'milo', 
                'name' => 'Milo',
                'category' => 'milk',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/milo.jpg'
            ],
            [
                'id' => 'taro',
                'name' => 'Taro',
                'category' => 'milk',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/taro.jpg'
            ],
            [
                'id' => 'redvelvet',
                'name' => 'Red Velvet',
                'category' => 'milk',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/redvelvet.jpg'
            ],
            [
                'id' => 'alpukat',
                'name' => 'Alpukat',
                'category' => 'milk',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/alpukat.jpg'
            ],
            [
                'id' => 'vanila',
                'name' => 'Vanila',
                'category' => 'milk',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/vanila.jpg'
            ],
            [
                'id' => 'cookies',
                'name' => 'Cookies & Cream / Oreo',
                'category' => 'milk',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/cookies.jpg'
            ],
            [
                'id' => 'brown',
                'name' => 'Brown Sugar',
                'category' => 'coffee',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/brown.jpg'
            ],
            [
                'id' => 'coffeemilk',
                'name' => 'Coffee Milk',
                'category' => 'coffee',
                'prices' => [['label' => 'Regular', 'value' => 12000]],
                'img' => 'images/coffeemilk.jpg'
            ],
            [
                'id' => 'latte',
                'name' => 'Coffee Latte',
                'category' => 'coffee',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/latte.jpg'
            ],
            [
                'id' => 'aren',
                'name' => 'Coffee Aren',
                'category' => 'coffee',
                'prices' => [['label' => 'Regular', 'value' => 12000]],
                'img' => 'images/aren.jpg'
            ],
            [
                'id' => 'caramel',
                'name' => 'Caramel Machiato',
                'category' => 'coffee',
                'prices' => [['label' => 'Regular', 'value' => 12000]],
                'img' => 'images/caramel.jpg'
            ],
            [
                'id' => 'cappucino',
                'name' => 'Cappucino',
                'category' => 'coffee',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/cappucino.jpg'
            ],
            [
                'id' => 'icetea',
                'name' => 'Ice Tea',
                'category' => 'fresh',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/icetea.jpg'
            ],
            [
                'id' => 'lemon',
                'name' => 'Lemon Tea',
                'category' => 'fresh',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/lemon.jpg'
            ],
            [
                'id' => 'lycheet',
                'name' => 'Lychee Tea',
                'category' => 'fresh',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/lycheet.jpg'
            ],
            [
                'id' => 'lycheesq',
                'name' => 'Lychee Squash Yakult',
                'category' => 'fresh',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/lycheesq.jpg'
            ],
            [
                'id' => 'orange',
                'name' => 'Orange Squash Yakult',
                'category' => 'fresh',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/orange.jpg'
            ],
            [
                'id' => 'melon',
                'name' => 'Melon Squash Yakult',
                'category' => 'fresh',
                'prices' => [['label' => 'Regular', 'value' => 10000]],
                'img' => 'images/melon.jpg'
            ],
            [
                'id' => 'extramilk',
                'name' => 'Extra Milk',
                'category' => 'topping',
                'prices' => [['label' => 'Extra', 'value' => 2000]],
                'img' => 'images/extramilk.jpg'
            ],
            [
                'id' => 'boba',
                'name' => 'Boba',
                'category' => 'topping',
                'prices' => [['label' => 'Extra', 'value' => 3000]],
                'img' => 'images/boba.jpg'
            ],
            [
                'id' => 'oreoTop',
                'name' => 'Oreo (topping)',
                'category' => 'topping',
                'prices' => [['label' => 'Extra', 'value' => 3000]],
                'img' => 'images/oreoTop.jpg'
            ]
        ];

        return view('produk', compact('products'));
    }
}