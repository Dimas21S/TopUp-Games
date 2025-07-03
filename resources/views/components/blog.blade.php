@props(['kategori', 'waktu', 'judul', 'isi'])

<div class="row g-4">
  <div class="col-md-6">
    <div class="card h-100">
      <img src="{{ asset('image/Ling-mobile-legends.webp') }}" class="card-img-top" alt="Promo MLBB" loading="lazy">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <span class="badge bg-primary">{{ $kategori }}</span>
          <small class="text-muted">{{ $waktu }}</small>
        </div>
        <h5 class="card-title">{{ $judul }}</h5>
        <p class="card-text">{{ $isi }}</p>
        <a href="#" class="btn btn-outline-primary">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>