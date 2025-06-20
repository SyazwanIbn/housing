<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanjutTempohDashboardController extends Controller
{
     public function index()
    {
        $tamatSewaStats = [
            'tamat_6_bulan' => 604,
            'tamat_3_bulan' =>479,
            'tamat_1_bulan' => 230,
            'tamat' => 150,
        ];

        // Hardcoded Aliran Proses
        $prosesStats = [
            'permohonan_baru' => 798,
            'mesyuarat_aktif' => 4,
            'jumlah_tawaran' => 267,
            'senarai_perjanjian' => 5,
        ];

        return view('dashboard.lanjut_tempoh.index', compact(
            'tamatSewaStats',
            'prosesStats'
        ));
    }
}
