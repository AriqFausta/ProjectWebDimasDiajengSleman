@extends('layouts.admin')

@section('title', 'Kelola Berita')

@section('content')
 <!-- Header labels -->
  <div class="row px-2 mb-3">
    <div class="col-1"><span class="text-muted small" style="padding-left: 10px;">Foto</span></div>
    <div class="col-3"><span class="text-muted small">Judul</span></div>
    <div class="col-3"><span class="text-muted small">Isi Berita</span></div>
    <div class="col-2"><span class="text-muted small">Tanggal</span></div>
    <div class="col-2"><span class="text-muted small">Carousel</span></div>
    <div class="col-1"><span class="text-muted small">Edit</span></div>
  </div>
  <div class="card text-white mb-3" style="border-radius:12px; background-color:#233046;">
    <div class="row g-0 align-items-center p-3">
      <div class="col-1">
        <div class="d-flex align-items-center justify-content-center">
          <img src="{{ asset('images/Dummy.png') }}" class="rounded" alt="News Image" style="width: 40px; height: 40px; object-fit: cover;">
        </div>
      </div>
      <div class="col-3 px-3">
        <p class="mb-0 text-white small text-truncate">Dimas Diajeng Sleman 2025 Siap Angkat Potensi Budaya dan ...</p>
      </div>
      <div class="col-3 px-3">
        <p class="mb-0 text-white small text-truncate">Sleman – Ajang pemilihan Dimas Diajeng menjadi salah satu wadah untuk mengenalkan potensi budaya, seni, dan pariwisata lokal kepada generasi muda dan masyarakat luas. Kegiatan ini diharapkan dapat mengangkat kearifan lokal dan memperluas promosi destinasi unggulan Sleman.</p>
      </div>
      <div class="col-2 px-3">
        <p class="mb-0 text-white small text-truncate">Rabu, 1 Oktober 2025</p>
      </div>
      <div class="col-2">
        <div class="d-flex justify-content-center">
          <button class="btn btn-outline-light py-1 px-2" title="Sematkan">
            <img src="{{ asset('images/carousel.png') }}" alt="Carousel Icon" style="width: 14px; height: 14px;">
          </button>
        </div>
      </div>
      <div class="col-1">
        <div class="d-flex justify-content-end">
          <button class="btn btn-warning me-2 py-1 px-2"><i class="fa-solid fa-pen"></i></button>
          <button class="btn btn-danger py-1 px-2"><i class="fa-solid fa-trash"></i></button>
        </div>
      </div>
    </div>
  </div>
  <div class="card text-white mb-3" style="border-radius:12px; background-color:#233046;">
    <div class="row g-0 align-items-center p-3">
      <div class="col-1">
        <div class="d-flex align-items-center justify-content-center">
          <img src="{{ asset('images/Dummy.png') }}" class="rounded" alt="News Image" style="width: 40px; height: 40px; object-fit: cover;">
        </div>
      </div>
      <div class="col-3 px-3">
        <p class="mb-0 text-white small text-truncate">Dimas Diajeng Sleman 2025 Siap Angkat Potensi Budaya dan ...</p>
      </div>
      <div class="col-3 px-3">
        <p class="mb-0 text-white small text-truncate">Sleman – Ajang pemilihan Dimas Diajeng menjadi salah satu wadah untuk mengenalkan potensi budaya, seni, dan pariwisata lokal kepada generasi muda dan masyarakat luas. Kegiatan ini diharapkan dapat mengangkat kearifan lokal dan memperluas promosi destinasi unggulan Sleman.</p>
      </div>
      <div class="col-2 px-3">
        <p class="mb-0 text-white small text-truncate">Rabu, 1 Oktober 2025</p>
      </div>
      <div class="col-2">
        <div class="d-flex justify-content-center">
          <button class="btn btn-outline-light py-1 px-2" title="Sematkan">
            <img src="{{ asset('images/carousel.png') }}" alt="Carousel Icon" style="width: 14px; height: 14px;">
          </button>
        </div>
      </div>
      <div class="col-1">
        <div class="d-flex justify-content-end">
          <button class="btn btn-warning me-2 py-1 px-2"><i class="fa-solid fa-pen"></i></button>
          <button class="btn btn-danger py-1 px-2"><i class="fa-solid fa-trash"></i></button>
        </div>
      </div>
    </div>
  </div>
@endsection