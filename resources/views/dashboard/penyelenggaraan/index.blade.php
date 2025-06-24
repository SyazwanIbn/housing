@extends('layouts.app')

@section('title', 'Penyelenggaraan')
@section('page-title', 'Dashboard Penyelenggaraan')

@section('styles')
<style>
    :root {
        --primary-color: #e63946;
        --danger-color: #e63946;
        --warning-color: #f1a208;
        --success-color: #2a9d8f;
        --light-bg: #f8f9fa;
        --card-shadow: 0 4px 16px rgba(0,0,0,0.10);
    }

    body {
        background: var(--light-bg);
    }

    .dashboard-container {
        background-color: white;
        padding: 2.5rem 2rem;
        max-width: 1400px;
        margin: 2rem auto;
        border-radius: 18px;
        box-shadow: var(--card-shadow);
    }

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1.25rem;
        border-bottom: 2px solid rgba(230,57,70,0.12);
    }

    .dashboard-title {
        font-size: 2rem;
        font-weight: 800;
        color: #2d3748;
        position: relative;
        padding-left: 1.5rem;
        letter-spacing: 0.5px;
    }

    .dashboard-title:before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 80%;
        width: 7px;
        background: linear-gradient(180deg, var(--danger-color), var(--warning-color));
        border-radius: 7px;
    }

    .quick-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }

    .quick-stat {
        background: linear-gradient(120deg, #fff 70%, #f8d7da 100%);
        border-radius: 12px;
        padding: 1.5rem 1rem;
        box-shadow: 0 2px 8px rgba(230,57,70,0.07);
        text-align: center;
        transition: box-shadow 0.2s;
        border: 1px solid #f1a20822;
        position: relative;
        overflow: hidden;
    }
    .quick-stat:after {
        content: '';
        position: absolute;
        right: -30px;
        top: -30px;
        width: 60px;
        height: 60px;
        background: rgba(230,57,70,0.07);
        border-radius: 50%;
        z-index: 0;
    }

    .quick-stat-value {
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--danger-color);
        margin-bottom: 0.3rem;
        position: relative;
        z-index: 1;
    }

    .quick-stat-label {
        font-size: 1rem;
        color: #718096;
        letter-spacing: 0.5px;
        position: relative;
        z-index: 1;
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        gap: 2rem;
    }

    .category-card {
        background: white;
        border-radius: 14px;
        box-shadow: var(--card-shadow);
        overflow: hidden;
        transition: transform 0.18s, box-shadow 0.18s;
        border: 1px solid #e6394612;
        display: flex;
        flex-direction: column;
        min-height: 260px;
    }

    .category-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 8px 24px rgba(230,57,70,0.13);
    }

    .category-header {
        background: linear-gradient(90deg, var(--danger-color) 80%, var(--warning-color) 100%);
        color: white;
        padding: 1.1rem 1.25rem;
        font-weight: 700;
        font-size: 1.15rem;
        letter-spacing: 0.5px;
        border-bottom: 2px solid #f1a20822;
    }

    .category-items {
        padding: 1.25rem 1.25rem 1rem 1.25rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 0.7rem;
    }

    .category-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.7rem 0;
        border-bottom: 1px dashed #e6394622;
        transition: background 0.15s;
        border-radius: 6px;
    }

    .category-item:last-child {
        border-bottom: none;
    }

    .category-item:hover {
        background: #f8d7da33;
    }

    .item-name {
        font-size: 1rem;
        color: #2d3748;
        font-weight: 500;
        letter-spacing: 0.2px;
    }

    .item-count {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--danger-color);
        background: rgba(230, 57, 70, 0.13);
        padding: 0.3rem 1.1rem;
        border-radius: 20px;
        min-width: 38px;
        text-align: center;
        box-shadow: 0 1px 4px rgba(230,57,70,0.06);
    }

    @media (max-width: 900px) {
        .dashboard-container {
            padding: 1.2rem 0.5rem;
        }
        .categories-grid {
            grid-template-columns: 1fr;
        }
        .quick-stats {
            grid-template-columns: 1fr 1fr;
        }
    }
    @media (max-width: 600px) {
        .dashboard-title {
            font-size: 1.2rem;
            padding-left: 1rem;
        }
        .dashboard-header {
            margin-bottom: 1rem;
            padding-bottom: 0.7rem;
        }
        .quick-stats {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
<div class="dashboard-container">
    <div class="dashboard-header">
        <h1 class="dashboard-title">Jumlah Penyelenggaraan</h1>
    </div>

    <!-- Quick Stats & Graph -->
    <div style="display: flex; gap: 2rem; flex-wrap: wrap; align-items: flex-start; margin-bottom: 2.5rem;">
        <!-- Quick Stats (2x2 grid, left side) -->
        <div style="flex: 1 1 320px; max-width: 420px;">
            <div class="quick-stats" style="grid-template-columns: 1fr 1fr;">
                <div class="quick-stat">
                    <div class="quick-stat-value">15</div>
                    <div class="quick-stat-label">Unit Kosong</div>
                </div>
                <div class="quick-stat">
                    <div class="quick-stat-value">8</div>
                    <div class="quick-stat-label">Projek Kecil</div>
                </div>
                <div class="quick-stat">
                    <div class="quick-stat-value">7</div>
                    <div class="quick-stat-label">Aduan</div>
                </div>
                <div class="quick-stat">
                    <div class="quick-stat-value">10</div>
                    <div class="quick-stat-label">Berkala</div>
                </div>
            </div>
        </div>
        <!-- Graph (right side) -->
        <div style="flex: 2 1 400px; min-width: 320px;">
            <canvas id="quickStatsChart" height="180"></canvas>
        </div>
    </div>

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('quickStatsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Unit Kosong', 'Projek Kecil', 'Aduan', 'Berkala'],
                datasets: [{
                    label: 'Jumlah',
                    data: [15, 8, 7, 10],
                    backgroundColor: [
                        'rgba(230, 57, 70, 0.7)',
                        'rgba(241, 162, 8, 0.7)',
                        'rgba(42, 157, 143, 0.7)',
                        'rgba(233, 196, 106, 0.7)'
                    ],
                    borderColor: [
                        'rgba(230, 57, 70, 1)',
                        'rgba(241, 162, 8, 1)',
                        'rgba(42, 157, 143, 1)',
                        'rgba(233, 196, 106, 1)'
                    ],
                    borderWidth: 2,
                    borderRadius: 8,
                    maxBarThickness: 38
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    title: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 2 }
                    }
                }
            }
        });
    </script>
    @endsection

    <!-- Main Categories -->
    <div class="dashboard-header">
        <h1 class="dashboard-title">Gerak Kerja Projek</h1>
    </div>
    <div class="categories-grid">
        @foreach($categories as $category)
        <div class="category-card">
            <div class="category-header">{{ $category['title'] }}</div>
            <div class="category-items">
                @foreach($category['items'] as $item)
                <div class="category-item">
                    <span class="item-name">{{ $item['name'] }}</span>
                    <span class="item-count">{{ $item['count'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
