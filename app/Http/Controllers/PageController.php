<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        $username = session('username');

        $lowStockItems = [
            [
                'produk' => 'Keyboard Mechanical RGB',
                'stok' => 3,
                'minimum' => 10,
                'status' => 'merah',
            ],
            [
                'produk' => 'SSD 256GB',
                'stok' => 2,
                'minimum' => 8,
                'status' => 'merah',
            ],
            [
                'produk' => 'RAM DDR4 8GB',
                'stok' => 5,
                'minimum' => 5,
                'status' => 'kuning',
            ],
            [
                'produk' => 'Power Supply 600W',
                'stok' => 6,
                'minimum' => 10,
                'status' => 'kuning',
            ],
            [
                'produk' => 'Webcam HD',
                'stok' => 4,
                'minimum' => 8,
                'status' => 'kuning',
            ],
        ];

        return view('dashboard', compact('username', 'lowStockItems'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function kelola()
    {
        $products = [
            [
                'id' => 1,
                'nama' => 'Laptop Asus',
                'kategori' => 'Elektronik',
                'stok' => 15,
                'harga' => 12000000,
            ],
            [
                'id' => 2,
                'nama' => 'Smartphone Samsung',
                'kategori' => 'Elektronik',
                'stok' => 20,
                'harga' => 5500000,
            ],
            [
                'id' => 3,
                'nama' => 'Mouse Wireless',
                'kategori' => 'Aksesoris',
                'stok' => 30,
                'harga' => 250000,
            ],
            [
                'id' => 4,
                'nama' => 'Sepeda Motor',
                'kategori' => 'Kendaraan',
                'stok' => 30,
                'harga' => 25000000,
            ],
            [
                'id' => 5,
                'nama' => 'Charger',
                'kategori' => 'Aksesoris',
                'stok' => 30,
                'harga' => 25000,
            ],
            [
                'id' => 6,
                'nama' => 'Kipas Angin',
                'kategori' => 'Aksesoris',
                'stok' => 30,
                'harga' => 250000,
            ],
            [
                'id' => 7,
                'nama' => 'Kompor Tanam',
                'kategori' => 'Aksesoris',
                'stok' => 27,
                'harga' => 2500000,
            ],
            [
                'id' => 8,
                'nama' => 'Iphone XR',
                'kategori' => 'Elektronik',
                'stok' => 30,
                'harga' => 7250000,
            ],
        ];

        return view('kelola', compact('products'));
    }

    public function submitLogin(Request $request)
    {
        $username = $request->input('username');
        session(['username' => $username]);
        return redirect()->route('dashboard');
    }
}
