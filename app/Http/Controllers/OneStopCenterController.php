<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneStopCenterController extends Controller
{
    public function index()
    {
        $data = [
            'permohonan' => [
                'unit_sewa' => [
                    'baru' => 5,
                    'jumlah' => 10
                ],
                'tukar_nama' => [
                    'baru' => 6,
                    'jumlah' => 10
                ],
                'tukar_unit' => [
                    'baru' => 5,
                    'jumlah' => 5
                ],
                'lanjut_tempoh' => [
                    'baru' => 1,
                    'jumlah' => 2
                ],
                'unit_kedai' => [
                    'baru' => 2,
                    'jumlah' => 5
                ],
                'jualan' => [
                    'baru' => 6,
                    'jumlah' => 7
                ]
            ],
            'verifikasi' => [
                'penghuni_sub_sewa' => 0,
                'penghuni_melebihi_kelayakan' => 0,
                'penghuni_memohon_lebih_unit' => 0
            ],
            'aduan' => [
                'sah' => 3,
                'batal' => 1
            ],
            'pengurusan_kunci' => [
                'serah_tamat_tempoh' => 4010,
                'ambil_sewa' => 0,
                'ambil_kedai' => 1,
                'ambil_tukar_unit' => 1
            ]
        ];

        return view('dashboard.osc.index', $data);
    }
}
