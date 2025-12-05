@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="container-fluid">
        <!-- Kartu Statistik -->
        <div class="stats-cards">
        <div class="card card-dashboard card-gradient p-4">
            <div class="d-flex align-items-center">
            <i class="fa-solid fa-image fa-3x text-yellow me-3"></i>
            <div>
                <h6 class="fw-semibold mb-1">Total Galeri</h6>
                <h3 class="fw-bold">{{$totalGaleri . ' Galeri'}}</h3>
            </div>
            </div>
        </div>

        <div class="card card-dashboard card-gradient p-4">
            <div class="d-flex align-items-center">
            <i class="fa-solid fa-newspaper fa-3x text-yellow me-3"></i>
            <div>
                <h6 class="fw-semibold mb-1">Total Berita</h6>
                <h3 class="fw-bold">{{$totalBerita . ' Berita'}}</h3>
            </div>
            </div>
        </div>

        <div class="card card-dashboard card-gradient p-4">
            <div class="d-flex align-items-center">
            <i class="fa-solid fa-envelope fa-3x text-yellow me-3"></i>
            <div>
                <h6 class="fw-semibold mb-1">Total Email</h6>
                <h3 class="fw-bold">{{$totalEmail . ' Email'}}</h3>
            </div>
            </div>
        </div>
        </div>

        <!-- Recent Activity -->
        <div class="card shadow-sm border-0 card-width-admin">
            <div class="card-body">
                <h5 class="fw-bold mb-4">Recent Activity</h5>
                <div class="list-group">
                    @foreach ($logs as $log)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                        <i class="fa-solid fa-list-ul text-warning me-2"></i>
                        {{ $log->action }}
                        </div>
                        <small class="text-muted">{{ $log->created_at->format('d/m/Y, H:i') }}</small>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
