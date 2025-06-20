<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitSewaDashboardController extends Controller
{

    public function index()
    {
        $permohonanStats = [
            'perumahan_awam' => 15,
            'perumahan_bandar' => 8,
            'belia_beliawanis' => 12,
        ];

        // Hardcoded Aliran Proses
        $prosesStats = [
            'mesyuarat_aktif' => 3,
            'jumlah_tawaran' => 10,
            'senarai_pembayaran' => 7,
            'senarai_perjanjian' => 5,
        ];

        return view('dashboard.unit_sewa.index', compact(
            'permohonanStats',
            'prosesStats'
        ));
    }
}
