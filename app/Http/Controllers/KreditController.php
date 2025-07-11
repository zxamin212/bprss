<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreditController extends Controller
{
    public function showForm()
    {
        return view('simulasi-kredit');
    }

    public function hitungAngsuran(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'pokokPinjaman' => 'required|numeric',
            'bungaTahun' => 'required|numeric',
            'jangkaWaktu' => 'required|numeric',
        ]);

        // Ambil input dari form
        $pokokPinjaman = $validated['pokokPinjaman'];
        $bungaTahun = $validated['bungaTahun'] / 100;
        $jangkaWaktu = $validated['jangkaWaktu'] * 12; // dalam bulan

        // Hitung bunga per bulan
        $bungaBulan = $bungaTahun / 12;

        // Rumus Anuitas
        $angsuran = ($pokokPinjaman * $bungaBulan * pow(1 + $bungaBulan, $jangkaWaktu)) / (pow(1 + $bungaBulan, $jangkaWaktu) - 1);

        // Return hasil ke view
        return view('simulasi-kredit', compact('angsuran'));
    }
}
