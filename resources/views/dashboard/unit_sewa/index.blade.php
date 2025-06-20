@extends('layouts.app')

@section('title', 'Dashboard Unit Sewa')
@section('page-title', 'Dashboard Unit Sewa')

@section('styles')
<style>
    body {
        background: linear-gradient(120deg, #f8fafc 0%, #e9ecef 100%);
        min-height: 100vh;
    }
    .dashboard-container {
        background: rgba(255,255,255,0.95);
        padding: 2.5rem 2rem;
        border-radius: 24px;
        box-shadow: 0 8px 32px rgba(60,72,100,0.10);
        max-width: 1200px;
        margin: 2rem auto;
    }
    .section-header {
        margin-bottom: 2rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #e0e0e0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .section-header::before {
        content: '';
        display: inline-block;
        width: 8px;
        height: 32px;
        border-radius: 8px;
        background: linear-gradient(135deg, #4361ee 0%, #e63946 100%);
    }
    .section-title {
        font-weight: 700;
        color: #22223b;
        font-size: 1.35rem;
        margin: 0;
        letter-spacing: 0.5px;
    }
    .dashboard-card {
        background: linear-gradient(120deg, #fff 70%, #f1f3f8 100%);
        border-radius: 18px;
        padding: 2rem 1.5rem;
        transition: box-shadow 0.3s, transform 0.3s;
        box-shadow: 0 4px 24px rgba(67,97,238,0.07);
        border: none;
        height: 100%;
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
        position: relative;
        overflow: hidden;
    }
    .dashboard-card::after {
        content: '';
        position: absolute;
        right: -40px;
        bottom: -40px;
        width: 120px;
        height: 120px;
        background: radial-gradient(circle, #e6394633 0%, transparent 70%);
        z-index: 0;
    }
    .dashboard-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 8px 32px rgba(67,97,238,0.13);
    }
    .card-title {
        font-size: 0.95rem;
        font-weight: 600;
        color: #6c757d;
        margin-bottom: 0.25rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        z-index: 1;
        position: relative;
    }
    .card-value {
        font-size: 2.2rem;
        font-weight: 800;
        color: #e63946;
        margin-bottom: 0.1rem;
        letter-spacing: 1px;
        z-index: 1;
        position: relative;
        text-shadow: 0 2px 8px #e6394622;
    }
    .chart-wrapper {
        background: linear-gradient(120deg, #fff 70%, #f1f3f8 100%);
        border-radius: 18px;
        padding: 2rem 1.5rem;
        box-shadow: 0 4px 24px rgba(67,97,238,0.07);
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    .chart-wrapper::before {
        content: '';
        position: absolute;
        left: -40px;
        top: -40px;
        width: 120px;
        height: 120px;
        background: radial-gradient(circle, #4361ee22 0%, transparent 70%);
        z-index: 0;
    }
    .icon-badge {
        font-size: 1.6rem;
        color: #6c757d;
        margin-right: 0.75rem;
    }

    .card-row {
        display: flex;
        align-items: center;
    }

    .chart-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #343a40;
        margin-bottom: 1rem;
        z-index: 1;
        position: relative;
    }
    .card-link-hover {
        display: block;
        border-radius: 12px;
        transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
        text-decoration: none;
    }
    .card-link-hover:hover {
        background: #e9ecef;
        box-shadow: 0 4px 18px rgba(67,97,238,0.10);
        transform: translateY(-2px) scale(1.01);
        text-decoration: none;
    }

    @media (max-width: 991.98px) {
        .dashboard-container {
            padding: 1.5rem 0.5rem;
        }
        .dashboard-card, .chart-wrapper {
            padding: 1.25rem 0.75rem;
        }
    }
    @media (max-width: 767.98px) {
        .dashboard-container {
            padding: 0.5rem 0.25rem;
        }
        .section-header {
            margin-bottom: 1rem;
        }
        .dashboard-card, .chart-wrapper {
            padding: 1rem 0.5rem;
        }
        .card-value {
            font-size: 1.5rem;
        }
    }
</style>
@endsection

@section('content')
<div class="dashboard-container">
    <!-- Section: Maklumat Permohonan -->
    <div class="section-header">
        <h5 class="section-title">Jenis Permohonan</h5>
    </div>
    <div class="row align-items-stretch g-4">
        <!-- Left Stats -->
        <div class="col-md-6 mb-4">
            <div class="dashboard-card h-800">
                <a href="#" class="card-link card-link-hover">
                    <div class="card-row">
                        <i class="fas fa-users icon-badge"></i>
                        <div>
                            <div class="card-title">Perumahan Awam</div>
                            <div class="card-value">{{ number_format($permohonanStats['perumahan_awam']) }}</div>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-link card-link-hover">
                    <div class="card-row">
                        <i class="fas fa-user-tag icon-badge"></i>
                        <div>
                            <div class="card-title">Perumahan Bandar</div>
                            <div class="card-value">{{ number_format($permohonanStats['perumahan_bandar']) }}</div>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-link card-link-hover">
                    <div class="card-row">
                        <i class="fas fa-user-check icon-badge"></i>
                        <div>
                            <div class="card-title">Belia Beliawanis</div>
                            <div class="card-value">{{ number_format($permohonanStats['belia_beliawanis']) }}</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Right Chart -->
        <div class="col-md-6 mb-4">
            <div class="chart-wrapper h-100">
                <canvas id="userChart" style="z-index:1;position:relative;max-height:260px;"></canvas>
            </div>
        </div>
    </div>

    <!-- Section: Aliran Proses -->
    <div class="section-header">
        <h5 class="section-title">Aliran Proses Unit Sewa</h5>
    </div>
    <div class="row align-items-stretch g-4">
        <!-- Left Stats -->
        <div class="col-md-6 mb-4">
            <div class="dashboard-card h-800">
                <a href="#" class="card-link card-link-hover">
                    <div class="card-row">
                        <i class="fas fa-layer-group icon-badge"></i>
                        <div>
                            <div class="card-title">Mesyuarat Aktif</div>
                            <div class="card-value">{{ number_format($prosesStats['mesyuarat_aktif']) }}</div>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-link card-link-hover">
                    <div class="card-row">
                        <i class="fas fa-store-alt icon-badge"></i>
                        <div>
                            <div class="card-title">Jumlah Tawaran</div>
                            <div class="card-value">{{ number_format($prosesStats['jumlah_tawaran']) }}</div>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-link card-link-hover">
                    <div class="card-row">
                        <i class="fas fa-door-open icon-badge"></i>
                        <div>
                            <div class="card-title">Senarai Pembayaran</div>
                            <div class="card-value">{{ number_format($prosesStats['senarai_pembayaran']) }}</div>
                        </div>
                    </div>
                </a>

                <a href="#" class="card-link card-link-hover">
                    <div class="card-row">
                        <i class="fas fa-home icon-badge"></i>
                        <div>
                            <div class="card-title">Senarai Perjanjian</div>
                            <div class="card-value">{{ number_format($prosesStats['senarai_perjanjian']) }}</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Right Chart -->
        <div class="col-md-6 mb-4">
            <div class="chart-wrapper h-100">
                <canvas id="unitChart" style="z-index:1;position:relative;max-height:260px;"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    new Chart(document.getElementById('userChart').getContext('2d'), {
        type: 'doughnut',
        data: {
            labels: ['Perumahan Awam', 'Perumahan Bandar', 'Belia Beliawanis'],
            datasets: [{
                data: [
                    {{ $permohonanStats['perumahan_awam'] }},
                    {{ $permohonanStats['perumahan_bandar'] }},
                    {{ $permohonanStats['belia_beliawanis'] }}
                ],
                backgroundColor: ['#4361ee', '#3f37c9', '#4895ef'],
                borderWidth: 0
            }]
        },
        options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Jumlah Permohonan',
                align: 'center',
                font: {
                    size: 16,
                    weight: 'bold'
                },
                color: '#222'
            },
        legend: {
            position: 'right',
            labels: {
                boxWidth: 14,
                padding: 18,
                font: {
                    size: 14,
                    weight: 'bold'
                }
            }
        }
    },
    cutout: '65%'
    }

    });

    new Chart(document.getElementById('unitChart').getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['Mesyuarat Aktif', 'Jumlah Tawaran', 'Senarai Pembayaran', 'Senarai Perjanjian'],
            datasets: [{
                data: [
                    {{ $prosesStats['mesyuarat_aktif'] }},
                    {{ $prosesStats['jumlah_tawaran'] }},
                    {{ $prosesStats['senarai_pembayaran'] }},
                    {{ $prosesStats['senarai_perjanjian'] }}
                ],
                backgroundColor: ['#e63946', '#f1a208', '#a8dadc', '#4361ee'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Carta Aliran Proses',
                    align: 'center',
                    font: {
                        size: 16,
                        weight: 'bold'
                    },
                    color: '#222'
                },
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision:0
                    }
                }
            }
        }
    });
</script>
@endsection
