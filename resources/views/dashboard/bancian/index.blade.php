@extends('layouts.app')

@section('title', 'Bancian')
@section('page-title', 'Dashboard Bancian')

@section('styles')
<style>
    :root {
        --card-border-radius: 12px;
        --card-padding: 1.5rem;
        --section-spacing: 2rem;
        --primary-color: #E63946;
        --danger-color: #e63946;
        --warning-color: #f1a208;
        --success-color: #2a9d8f;
    }

    .dashboard-container {
        background-color: #f8f9fa;
        padding: 2rem;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .section-title {
        font-weight: 700;
        color: #2d3748;
        margin: 0;
        font-size: 1.25rem;
        position: relative;
        padding-left: 1rem;
    }

    .section-title:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background: var(--danger-color);
        border-radius: 4px;
    }

    .date-range {
        font-size: 0.85rem;
        color: #718096;
        background: rgba(113, 128, 150, 0.1);
        padding: 0.5rem 1rem;
        border-radius: 20px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: #fff;
        border-radius: var(--card-border-radius);
        padding: var(--card-padding);
        box-shadow: 0 2px 12px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .stat-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .stat-title {
        font-weight: 600;
        color: #2d3748;
        font-size: 1rem;
    }

    .stat-badge {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
    }

    .badge-total {
        background: rgba(67, 97, 238, 0.1);
        color: var(--primary-color);
    }

    .stat-progress {
        height: 6px;
        background: #edf2f7;
        border-radius: 3px;
        margin: 1rem 0;
        overflow: hidden;
    }

    .progress-bar {
        height: 100%;
        border-radius: 3px;
    }

    .progress-completed {
        background: var(--success-color);
        width: calc({{ $unitStats['kediaman_sewa']['selesai'] }}/{{ $unitStats['kediaman_sewa']['total'] }} * 100%);
    }

    .stat-details {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: 1rem;
    }

    .stat-detail {
        text-align: center;
    }

    .detail-value {
        font-size: 1.25rem;
        font-weight: 700;
        line-height: 1.2;
    }

    .detail-label {
        font-size: 0.75rem;
        color: #718096;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .completed {
        color: var(--success-color);
    }

    .incomplete {
        color: var(--warning-color);
    }

    .pending {
        color: var(--danger-color);
    }

    .summary-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .summary-card {
        background: #fff;
        border-radius: var(--card-border-radius);
        padding: var(--card-padding);
        box-shadow: 0 2px 12px rgba(0,0,0,0.05);
        text-align: center;
    }

    .summary-title {
        font-size: 0.9rem;
        color: #718096;
        margin-bottom: 0.5rem;
    }

    .summary-value {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--primary-color);
    }

    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .section-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .date-range {
            margin-top: 0.5rem;
            align-self: flex-start;
        }
    }
</style>
@endsection

@section('content')
<div class="dashboard-container">
    <div class="section-header">
        <h5 class="section-title">Statistik Bancian</h5>
        <div class="date-range">{{ $lawatanStats['tarikh'] }}</div>
    </div>

    <div class="stats-grid">
        <!-- Unit Kediaman Sewa -->
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-title">Unit Kediaman Sewa</div>
                <div class="stat-badge badge-total">Total: {{ $unitStats['kediaman_sewa']['total'] }}</div>
            </div>
            <div class="stat-progress">
                <div class="progress-bar progress-completed"></div>
            </div>
            <div class="stat-details">
                <div class="stat-detail">
                    <div class="detail-value completed">{{ $unitStats['kediaman_sewa']['selesai'] }}</div>
                    <div class="detail-label">Selesai</div>
                </div>
                <div class="stat-detail">
                    <div class="detail-value incomplete">{{ $unitStats['kediaman_sewa']['tidak_lengkap'] }}</div>
                    <div class="detail-label">Tidak Lengkap</div>
                </div>
                <div class="stat-detail">
                    <div class="detail-value pending">{{ $unitStats['kediaman_sewa']['belum_banci'] }}</div>
                    <div class="detail-label">Belum Banci</div>
                </div>
            </div>
        </div>

        <!-- Unit Jualan -->
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-title">Unit Jualan</div>
                <div class="stat-badge badge-total">Total: {{ $unitStats['jualan']['total'] }}</div>
            </div>
            <div class="stat-progress">
                <div class="progress-bar" style="width: calc({{ $unitStats['jualan']['selesai'] }}/{{ $unitStats['jualan']['total'] }} * 100%); background: var(--success-color);"></div>
            </div>
            <div class="stat-details">
                <div class="stat-detail">
                    <div class="detail-value completed">{{ $unitStats['jualan']['selesai'] }}</div>
                    <div class="detail-label">Selesai</div>
                </div>
                <div class="stat-detail">
                    <div class="detail-value incomplete">{{ $unitStats['jualan']['tidak_lengkap'] }}</div>
                    <div class="detail-label">Tidak Lengkap</div>
                </div>
                <div class="stat-detail">
                    <div class="detail-value pending">{{ $unitStats['jualan']['belum_banci'] }}</div>
                    <div class="detail-label">Belum Banci</div>
                </div>
            </div>
        </div>

        <!-- Unit Premis -->
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-title">Unit Premis</div>
                <div class="stat-badge badge-total">Total: {{ $unitStats['premis']['total'] }}</div>
            </div>
            <div class="stat-progress">
                <div class="progress-bar" style="width: calc({{ $unitStats['premis']['selesai'] }}/{{ $unitStats['premis']['total'] }} * 100%); background: var(--success-color);"></div>
            </div>
            <div class="stat-details">
                <div class="stat-detail">
                    <div class="detail-value completed">{{ $unitStats['premis']['selesai'] }}</div>
                    <div class="detail-label">Selesai</div>
                </div>
                <div class="stat-detail">
                    <div class="detail-value incomplete">{{ $unitStats['premis']['tidak_lengkap'] }}</div>
                    <div class="detail-label">Tidak Lengkap</div>
                </div>
                <div class="stat-detail">
                    <div class="detail-value pending">{{ $unitStats['premis']['belum_banci'] }}</div>
                    <div class="detail-label">Belum Banci</div>
                </div>
            </div>
        </div>
    </div>

    <div class="summary-cards">
        <div class="summary-card">
            <div class="summary-title">Jumlah Lawatan Bancian</div>
            <div class="summary-value">{{ $lawatanStats['jumlah_lawatan'] }}</div>
        </div>
        <div class="summary-card">
            <div class="summary-title">Jumlah Pembanci</div>
            <div class="summary-value">{{ $lawatanStats['jumlah_pembanci'] }}</div>
        </div>
    </div>
</div>
@endsection
