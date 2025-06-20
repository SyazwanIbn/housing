<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDataDashboardController extends Controller
{
    public function index()
    {
        $userStats = [
            'total_residents' => 59716,
            'total_tenants'   => 34042,
            'total_buyers'    => 25674,
        ];

        $unitStats = [
            'total_units'     => 86635,
            'rented_units'    => 34042,
            'sold_units'      => 25674,
            'vacant_units'    => 20861,
        ];

        return view('dashboard.master_data.index', compact('userStats', 'unitStats'));
    }
}
