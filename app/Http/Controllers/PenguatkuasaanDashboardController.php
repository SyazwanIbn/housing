<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenguatkuasaanDashboardController extends Controller
{
    public function index()
    {
        $kesStats = [
            'keseluruhan_kes' => 15,
            'kes_rampasan' => 8,
            'surat_amaran' => 12,
        ];

        // Hardcoded Aliran Proses
        $rampasanStats = [
            'keseluruhan_rampasan_unit' => 3,
            'rampasan_unit_dalam_proses' => 10,
            'rampasan_unit_selesai' => 7,
            'rampasan_unit_pending' => 5,
        ];

        return view('dashboard.penguatkuasaan.index', compact(
            'kesStats',
            'rampasanStats'
        ));
    }
}
