@extends('layouts.app')

@section('title', 'Laman Utama')
@section('page-title', 'Senarai Modul')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laman Utama</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row justify-content-center">
        @foreach($modules as $module)
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
            <a href="{{ $module['route'] }}" class="card module-card text-decoration-none w-100 shadow-sm">
                <div class="card-body text-center py-4 d-flex flex-column justify-content-between h-100">
                    <div>
                        <div class="icon mb-3">
                            <span class="icon-bg d-inline-flex align-items-center justify-content-center mb-2">
                                <i class="fas fa-{{ $module['icon'] }} fa-2x"></i>
                            </span>
                        </div>
                        <h6 class="fw-bold text-dark text-uppercase mb-2">{{ $module['title'] }}</h6>
                        <p class="text-muted small mb-0">{{ $module['description'] }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('styles')
<style>
    .module-card {
        transition: box-shadow 0.3s, transform 0.2s;
        border-radius: 18px;
        border: none;
        background: linear-gradient(135deg, #e3f0ff 0%, #f9f9f9 100%);
        color: #222;
        min-height: 260px;
        box-shadow: 0 2px 8px rgba(44, 62, 80, 0.06);
        position: relative;
        overflow: hidden;
    }

    .module-card:hover {
        transform: translateY(-6px) scale(1.03);
        box-shadow: 0 8px 24px rgba(230, 57, 70, 0.15), 0 2px 8px rgba(44, 62, 80, 0.08);
        border: none;
    }

    .module-card .card-body {
        padding: 2rem 1.2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .icon-bg {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #e63946 60%, #f1faee 100%);
        box-shadow: 0 2px 8px rgba(230, 57, 70, 0.08);
        margin: 0 auto 10px auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .module-card .icon i {
        color: #fff;
        font-size: 2rem;
        filter: drop-shadow(0 2px 4px rgba(44, 62, 80, 0.10));
    }

    .module-card h6 {
        font-size: 1.05rem;
        letter-spacing: 0.5px;
        color: #222;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .module-card p {
        color: #6c757d;
        font-size: 0.93rem;
        margin-top: 0.5rem;
    }

    .breadcrumb {
        background-color: transparent;
        font-size: 1rem;
        font-weight: 500;
    }

    .breadcrumb a {
        color: #e63946;
        transition: color 0.2s;
    }

    .breadcrumb a:hover {
        color: #222;
        text-decoration: underline;
    }

    .breadcrumb-item.active {
        color: #0a0a0a;
    }

    @media (max-width: 575.98px) {
        .module-card .card-body {
            padding: 1.2rem 0.7rem;
        }
        .icon-bg {
            width: 48px;
            height: 48px;
        }
    }
</style>
@endsection
