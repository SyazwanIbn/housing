<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyelenggaraandDashboardController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => [
                [
                    'title' => 'Lawatan Tapak',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
                [
                    'title' => 'Cipta Bil Kuantiti dan Arahan Kerja',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
                [
                    'title' => 'Endorsement Arahan Kerja Projek',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
                [
                    'title' => 'Senarai Purchase Order',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
                [
                    'title' => 'Integrasi EBS',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
                [
                    'title' => 'Pembatalan Arahan Kerja',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
                [
                    'title' => 'Pemantauan Kontraktor',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
                [
                    'title' => 'Validasi Arahan Kerja',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
                [
                    'title' => 'Slip Siap Kerja',
                    'items' => [
                        ['name' => 'Unit Kosong', 'count' => 15],
                        ['name' => 'Projek Kecil', 'count' => 1],
                        ['name' => 'Aduan', 'count' => 1],
                        ['name' => 'Berkala', 'count' => 1],
                    ]
                ],
            ]
        ];

        return view('dashboard.penyelenggaraan.index', $data);
    }
}
