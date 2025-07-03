@props(['kategori', 'waktu', 'judul', 'isi', 'gambar'])

<div class="col-md-6 col-lg-4">
  <div class="blog-card">
    <div class="blog-img-container">
      <img src="{{ $gambar }}" alt="Mobile Legends" class="blog-img">
    </div>
    <div class="blog-content">
      <span class="blog-badge">{{ $kategori }}</span>
      <span class="blog-date">{{ $waktu }}</span>
      <h5 class="blog-title">{{ $judul }}</h5>
      <p class="blog-excerpt">{{ $isi }}</p>
      <a href="#" class="read-more">
        Baca Selengkapnya <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </div>
</div>