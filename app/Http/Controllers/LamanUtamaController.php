<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LamanUtamaController extends Controller
{
    public function lamanUtama()
    {
        $modules = [
    [
        'title' => 'MASTER DATA',
        'icon' => 'database',
        'description' => 'Penyelenggaraan data asas seperti kawasan, jenis unit dan pemilik.',
        'route' => route('master-data.index'),
    ],
    [
        'title' => 'UNIT SEWA',
        'icon' => 'store',
        'description' => 'Pengurusan unit-unit yang disewakan kepada penyewa.',
        'route' => route('unit-sewa.index'),
    ],
    [
        'title' => 'UNIT KEDAI',
        'icon' => 'shop',
        'description' => 'Pengurusan unit kedai di bawah kendalian jabatan.',
        'route' => route('unit-kedai.index'),
    ],
    [
        'title' => 'TUKAR NAMA',
        'icon' => 'exchange-alt',
        'description' => 'Proses pemindahan hak milik antara penyewa atau pemilik unit.',
        'route' => route('tukar-nama.index'),
    ],
    [
        'title' => 'TUKAR UNIT',
        'icon' => 'id-card',
        'description' => 'Permohonan dan kelulusan pertukaran unit oleh penyewa.',
        'route' => route('tukar-unit.index'),
    ],
    [
        'title' => 'LANJUT TEMPOH',
        'icon' => 'calendar-plus',
        'description' => 'Pengurusan permohonan lanjutan tempoh sewaan.',
        'route' => route('lanjut-tempoh.index'),
    ],
    [
        'title' => 'UNIT JUAL',
        'icon' => 'door-open',
        'description' => 'Rekod unit yang telah dijual kepada penyewa atau pemilik.',
        'route' => '#',
    ],
    [
        'title' => 'TLKB',
        'icon' => 'car',
        'description' => 'Pengurusan Lesen Tempat Letak Kenderaan Berbayar.',
        'route' => route('tlkb.index'),
    ],
    [
        'title' => 'PENGUATKUASAAN',
        'icon' => 'gun',
        'description' => 'Tindakan penguatkuasaan terhadap penyewa yang melanggar syarat.',
        'route' => route('penguatkuasaan.index'),
    ],
    [
        'title' => 'SENARAI HITAM',
        'icon' => 'landmark',
        'description' => 'Penyewa atau pemilik yang disenarai hitamkan daripada urusan lanjut.',
        'route' => route('senarai-hitam.index'),
    ],
    [
        'title' => 'SEKATAN',
        'icon' => 'ban',
        'description' => 'Rekod tindakan sekatan utiliti terhadap penyewa bermasalah.',
        'route' => '#',
    ],
    [
        'title' => 'BANCIAN',
        'icon' => 'clipboard',
        'description' => 'Pengurusan aktiviti bancian untuk unit atau kawasan tertentu.',
        'route' => '#',
    ],
    [
        'title' => 'ONE STOP CENTRE',
        'icon' => 'bolt',
        'description' => 'Pusat sehenti bagi urusan berkaitan pembangunan dan teknikal.',
        'route' => '#',
    ],
    [
        'title' => 'PENYELENGGARAAN',
        'icon' => 'tools',
        'description' => 'Laporan dan tindakan penyelenggaraan ke atas unit atau fasiliti.',
        'route' => '#',
    ],
    [
        'title' => 'PROJEK KECIL',
        'icon' => 'hammer',
        'description' => 'Pengurusan projek kecil seperti ubah suai dan baik pulih.',
        'route' => '#',
    ],
    [
        'title' => 'PEMANTAUAN KONTRAKTOR',
        'icon' => 'user-cog',
        'description' => 'Pemantauan prestasi kontraktor yang terlibat dalam kerja luar.',
        'route' => '#',
    ],
    [
        'title' => 'ADUAN',
        'icon' => 'file-alt',
        'description' => 'Penerimaan dan tindakan terhadap aduan penduduk.',
        'route' => '#',
    ],
    [
        'title' => 'PEMBANGUNAN SOSIAL',
        'icon' => 'check-circle',
        'description' => 'Aktiviti sosial dan komuniti melibatkan penduduk dan PBT.',
        'route' => '#',
    ],
    [
        'title' => 'BAS SEKOLAH',
        'icon' => 'bus',
        'description' => 'Urusan pendaftaran dan kawalan operasi bas sekolah.',
        'route' => '#',
    ],
    [
        'title' => 'LAPORAN',
        'icon' => 'table',
        'description' => 'Cetakan laporan berkaitan unit, bayaran, dan penguatkuasaan.',
        'route' => '#',
    ],
    [
        'title' => 'SISTEM ADMIN',
        'icon' => 'cogs',
        'description' => 'Kawalan akses, tetapan sistem dan pengurusan pengguna.',
        'route' => '#',
    ]
];


        return view('dashboard.laman_utama.index', compact('modules'));
    }
}
