<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanBeranda extends Controller
{
    public function index()
    {
        // Contoh data rekomendasi kost
        $kosts = [
            ['name' => 'Kost Sumberjaya', 'location' => 'Sukabirus', 'price' => 1500000],
            ['name' => 'Kost Sukajaya', 'location' => 'Sukapura', 'price' => 1400000],
            ['name' => 'Kost Harmoni', 'location' => 'Sukapura', 'price' => 1700000],
            ['name' => 'Kost Maju Jaya', 'location' => 'Sukabirus', 'price' => 1200000],
        ];

        // Contoh data area kost
        $areas = [
            ['name' => 'Sukapura', 'image' => 'sukapura.jpg'],
            ['name' => 'Sukabirus', 'image' => 'sukabirus.jpg'],
        ];

        return view('home', compact('kosts', 'areas'));
    }
}
