@extends('layouts.app')

@section('title', 'One Stop Center')
@section('page-title', 'Dashboard OSC')

@section('styles')
<style>
    :root {
        --primary-color: #E63946;
        --secondary-color: #f4f8fb;
        --danger-color: #e74c3c;
        --success-color: #28a745;
        --light-color: #ffffff;
        --dark-color: #343a40;
        --muted-color: #6c757d;
        --card-shadow: 0 2px 16px rgba(0, 123, 255, 0.08);
    }

    body {
        background: var(--secondary-color);
    }

    .dashboard-container {
        background: var(--secondary-color);
        padding: 2rem 0;
        min-height: 100vh;
    }

    .section-header {
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
    }

    .section-title {
        font-weight: 700;
        color: var(--primary-color);
        margin: 0;
        font-size: 1.25rem;
        position: relative;
        padding-left: 1rem;
        letter-spacing: 0.5px;
    }

    .section-title:before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 60%;
        width: 5px;
        background: var(--primary-color);
        border-radius: 4px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.25rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: var(--light-color);
        border-radius: 14px;
        padding: 1.25rem 1rem;
        box-shadow: var(--card-shadow);
        border: none;
        transition: transform 0.18s, box-shadow 0.18s;
        position: relative;
        overflow: hidden;
    }

    .stat-card:after {
        content: '';
        position: absolute;
        right: -24px;
        top: -24px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-color) 0%, #fff0 100%);
        opacity: 0.07;
        border-radius: 50%;
        z-index: 0;
    }

    .stat-card:hover {
        transform: translateY(-2px) scale(1.01);
        box-shadow: 0 6px 24px rgba(0, 123, 255, 0.13);
    }

    .stat-title {
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 1rem;
        font-size: 1rem;
        z-index: 1;
        position: relative;
        letter-spacing: 0.3px;
    }

    .stat-values {
        display: flex;
        justify-content: space-between;
        gap: 1rem;
        z-index: 1;
        position: relative;
    }

    .stat-item {
        flex: 1;
        text-align: center;
    }

    .stat-value {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 0.15rem;
        line-height: 1.1;
    }

    .stat-label {
        font-size: 0.82rem;
        color: var(--muted-color);
        text-transform: uppercase;
        letter-spacing: 0.4px;
        font-weight: 500;
    }

    .summary-section {
        background: var(--light-color);
        border-radius: 12px;
        padding: 1.25rem 1rem;
        box-shadow: var(--card-shadow);
        margin-bottom: 1.5rem;
    }

    .summary-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
    }

    .summary-item {
        padding: 0.9rem 0.4rem;
        border-radius: 8px;
        background: rgba(0, 123, 255, 0.06);
        text-align: center;
        transition: background 0.18s;
    }

    .summary-item:hover {
        background: rgba(0, 123, 255, 0.13);
    }

    .summary-label {
        font-size: 0.88rem;
        color: var(--muted-color);
        margin-bottom: 0.4rem;
        font-weight: 500;
    }

    .summary-value {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--primary-color);
    }

    .compact-stat {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.7rem 0;
        border-bottom: 1px solid rgba(0,0,0,0.04);
    }

    .compact-stat:last-child {
        border-bottom: none;
    }

    .compact-label {
        font-size: 0.98rem;
        color: var(--dark-color);
        font-weight: 500;
    }

    .compact-value {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--danger-color);
    }

    @media (max-width: 768px) {
        .dashboard-container {
            padding: 1rem 0.2rem;
        }
        .stats-grid, .summary-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
<div class="dashboard-container">
    <div class="stats-section" style="display: flex; flex-wrap: wrap; gap: 2rem; align-items: stretch;">
        <!-- Statistik Permohonan (2x3 grid, left) -->
        <div style="flex: 1 1 340px; max-width: 520px; display: flex; flex-direction: column;">
            <div class="section-header">
                <h5 class="section-title">Statistik Permohonan</h5>
            </div>
            <div class="stats-grid" style="grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(3, 1fr); flex: 1;">
                <!-- Unit Sewa -->
                <div class="stat-card">
                    <div class="stat-title">Unit Sewa</div>
                    <div class="stat-values">
                        <div class="stat-item">
                            <div class="stat-value">{{ $permohonan['unit_sewa']['baru'] }}</div>
                            <div class="stat-label">Baru</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">{{ $permohonan['unit_sewa']['jumlah'] }}</div>
                            <div class="stat-label">Jumlah</div>
                        </div>
                    </div>
                </div>
                <!-- Tukar Nama -->
                <div class="stat-card">
                    <div class="stat-title">Tukar Nama</div>
                    <div class="stat-values">
                        <div class="stat-item">
                            <div class="stat-value">{{ $permohonan['tukar_nama']['baru'] }}</div>
                            <div class="stat-label">Baru</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">{{ $permohonan['tukar_nama']['jumlah'] }}</div>
                            <div class="stat-label">Jumlah</div>
                        </div>
                    </div>
                </div>
                <!-- Tukar Unit -->
                <div class="stat-card">
                    <div class="stat-title">Tukar Unit</div>
                    <div class="stat-values">
                        <div class="stat-item">
                            <div class="stat-value">{{ $permohonan['tukar_unit']['baru'] }}</div>
                            <div class="stat-label">Baru</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">-</div>
                            <div class="stat-label">Jumlah</div>
                        </div>
                    </div>
                </div>
                <!-- Lanjut Tempoh -->
                <div class="stat-card">
                    <div class="stat-title">Lanjut Tempoh</div>
                    <div class="stat-values">
                        <div class="stat-item">
                            <div class="stat-value">{{ $permohonan['lanjut_tempoh']['baru'] }}</div>
                            <div class="stat-label">Baru</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">-</div>
                            <div class="stat-label">Jumlah</div>
                        </div>
                    </div>
                </div>
                <!-- Unit Kedai -->
                <div class="stat-card">
                    <div class="stat-title">Unit Kedai</div>
                    <div class="stat-values">
                        <div class="stat-item">
                            <div class="stat-value">{{ $permohonan['unit_kedai']['baru'] }}</div>
                            <div class="stat-label">Baru</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">-</div>
                            <div class="stat-label">Jumlah</div>
                        </div>
                    </div>
                </div>
                <!-- Jualan -->
                <div class="stat-card">
                    <div class="stat-title">Jualan</div>
                    <div class="stat-values">
                        <div class="stat-item">
                            <div class="stat-value">{{ $permohonan['jualan']['baru'] }}</div>
                            <div class="stat-label">Baru</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">-</div>
                            <div class="stat-label">Jumlah</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bar Graphs (right) -->
        <div style="flex: 1 1 320px; min-width: 320px; max-width: 520px; display: flex; flex-direction: column;">
            <div class="section-header">
                <h5 class="section-title">Graf Permohonan</h5>
            </div>
            <div style="background: #fff; border-radius: 14px; box-shadow: var(--card-shadow); padding: 1.5rem 1rem; flex: 1; display: flex; align-items: center;">
                <canvas id="permohonanBarChart" height="320" style="width:100%;"></canvas>
            </div>
        </div>
    </div>

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('permohonanBarChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    'Unit Sewa',
                    'Tukar Nama',
                    'Tukar Unit',
                    'Lanjut Tempoh',
                    'Unit Kedai',
                    'Jualan'
                ],
                datasets: [
                    {
                        label: 'Baru',
                        backgroundColor: '#007bff',
                        data: [
                            {{ $permohonan['unit_sewa']['baru'] }},
                            {{ $permohonan['tukar_nama']['baru'] }},
                            {{ $permohonan['tukar_unit']['baru'] }},
                            {{ $permohonan['lanjut_tempoh']['baru'] }},
                            {{ $permohonan['unit_kedai']['baru'] }},
                            {{ $permohonan['jualan']['baru'] }}
                        ]
                    },
                    {
                        label: 'Jumlah',
                        backgroundColor: '#6c757d',
                        data: [
                            {{ $permohonan['unit_sewa']['jumlah'] }},
                            {{ $permohonan['tukar_nama']['jumlah'] }},
                            {{ $permohonan['tukar_unit']['jumlah'] }},
                            {{ $permohonan['lanjut_tempoh']['jumlah'] }},
                            {{ $permohonan['unit_kedai']['jumlah'] }},
                            {{ $permohonan['jualan']['jumlah'] }},
                        ]
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true },
                    tooltip: { enabled: true }
                },
                scales: {
                    x: { stacked: false },
                    y: { beginAtZero: true }
                }
            }
        });
    });
    </script>
    @endsection

    <div class="section-header">
        <h5 class="section-title">Verifikasi & Tapisan</h5>
    </div>

    <div class="summary-section" style="margin-bottom: 1.5rem;">
        <div class="stat-title" style="margin-bottom: 1rem;">Semakan Verifikasi</div>
        <div class="summary-grid" style="gap: 0.7rem;">
            <div class="summary-item" style="background: #f8f9fa;">
                <div class="summary-label" style="font-size: 0.97rem;">Penghuni Sub Sewa</div>
                <div class="summary-value" style="color: #e67e22;">{{ $verifikasi['penghuni_sub_sewa'] }}</div>
            </div>
            <div class="summary-item" style="background: #f8f9fa;">
                <div class="summary-label" style="font-size: 0.97rem;">Melebihi Kelayakan Gaji</div>
                <div class="summary-value" style="color: #e74c3c;">{{ $verifikasi['penghuni_melebihi_kelayakan'] }}</div>
            </div>
            <div class="summary-item" style="background: #f8f9fa;">
                <div class="summary-label" style="font-size: 0.97rem;">Memohon Lebih Dari Satu Unit</div>
                <div class="summary-value" style="color: #2980b9;">{{ $verifikasi['penghuni_memohon_lebih_unit'] }}</div>
            </div>
        </div>
    </div>

    <div class="summary-section">
        <div class="stat-title" style="margin-bottom: 1rem;">Tapisan Aduan</div>
        <div class="summary-grid" style="gap: 0.7rem;">
            <div class="summary-item" style="background: #f8f9fa;">
                <div class="summary-label" style="font-size: 0.97rem;">Aduan Sah</div>
                <div class="summary-value" style="color: #27ae60;">{{ $aduan['sah'] }}</div>
            </div>
            <div class="summary-item" style="background: #f8f9fa;">
                <div class="summary-label" style="font-size: 0.97rem;">Aduan Batal</div>
                <div class="summary-value" style="color: #c0392b;">{{ $aduan['batal'] }}</div>
            </div>
        </div>
    </div>

    {{-- <div class="section-header">
        <h5 class="section-title">Tapisan Aduan</h5>
    </div>

    <div class="summary-section">
        <div class="summary-grid">
            <div class="summary-item">
                <div class="summary-label">Aduan Sah</div>
                <div class="summary-value">{{ $aduan['sah'] }}</div>
            </div>
            <div class="summary-item">
                <div class="summary-label">Aduan Batal</div>
                <div class="summary-value">{{ $aduan['batal'] }}</div>
            </div>
        </div>
    </div> --}}

    <div class="section-header">
        <h5 class="section-title">Penyerahan dan Pemulangan Kunci</h5>
    </div>

    <div class="summary-section">
        <div class="summary-grid">
            <div class="summary-item">
                <div class="summary-label">Serah Kunci Tamat Sewa</div>
                <div class="summary-value">{{ $pengurusan_kunci['serah_tamat_tempoh'] }}</div>
            </div>
            <div class="summary-item">
                <div class="summary-label">Ambil Kunci Mula Sewa</div>
                <div class="summary-value">{{ $pengurusan_kunci['ambil_sewa'] }}</div>
            </div>
            <div class="summary-item">
                <div class="summary-label">Ambil Kunci Unit Kedai</div>
                <div class="summary-value">{{ $pengurusan_kunci['ambil_kedai'] }}</div>
            </div>
            <div class="summary-item">
                <div class="summary-label">Ambil Kunci Tukar Unit</div>
                <div class="summary-value">{{ $pengurusan_kunci['ambil_tukar_unit'] }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
