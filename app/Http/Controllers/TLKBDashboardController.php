<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TLKBDashboardController extends Controller
{
    public function index()
    {
        $parkingStats = [
            'parking_disewa' => 15,
            'parking_kosong' => 8,
            'parking_diselenggara' => 12,
        ];

        // Hardcoded Aliran Proses
        $permohonanStats = [
            'keseluruhan' => 43,
            'baru' => 40,
            'dalam_proses' => 23,
            'selesai' => 5,
        ];

        return view('dashboard.tlkb.index', compact(
            'parkingStats',
            'permohonanStats'
        ));
    }
}
