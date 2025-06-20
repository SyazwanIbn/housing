<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitKedaiDashboardController extends Controller
{
    public function index()
    {
        $permohonanStats = [
            'baru' => 15,
            'dalam_proses' => 8,
            'selesai' => 12,
        ];

        // Hardcoded Aliran Proses
        $prosesStats = [
            'mesyuarat_aktif' => 3,
            'jumlah_tawaran' => 10,
            'senarai_pembayaran' => 7,
            'senarai_perjanjian' => 5,
        ];

        return view('dashboard.unit_kedai.index', compact(
            'permohonanStats',
            'prosesStats'
        ));
    }
}
