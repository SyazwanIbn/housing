<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenaraiHitamDashboardController extends Controller
{
     public function index()
    {
        $blackListStats = [
            'baru' => 15,
            'dalam_proses' => 8,
            'selesai' => 12,
        ];

        // Hardcoded Aliran Proses
        $whiteListStats = [
            'baru' => 15,
            'dalam_proses' => 8,
            'selesai' => 12,
        ];

        return view('dashboard.senarai_hitam.index', compact(
            'blackListStats',
            'whiteListStats'
        ));
    }
}
