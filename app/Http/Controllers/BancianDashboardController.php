<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BancianDashboardController extends Controller
{
   public function index()
    {
        $data = [
            'unitStats' => [
                'kediaman_sewa' => [
                    'selesai' => 2,
                    'tidak_lengkap' => 19,
                    'belum_banci' => 33283,
                    'total' => 33305
                ],
                'jualan' => [
                    'selesai' => 0,
                    'tidak_lengkap' => 1,
                    'belum_banci' => 25313,
                    'total' => 25315
                ],
                'premis' => [
                    'selesai' => 0,
                    'tidak_lengkap' => 0,
                    'belum_banci' => 308,
                    'total' => 308
                ]
            ],
            'lawatanStats' => [
                'tarikh' => '23/06/2025 - 23/06/2025',
                'jumlah_lawatan' => 0,
                'jumlah_pembanci' => 0
            ]
        ];

        return view('dashboard.bancian.index', $data);
    }
}
