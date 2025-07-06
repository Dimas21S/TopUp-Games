@props(['title', 'harga' ])

<div class="col-md-4 mb-4">
  <div class="card shadow-sm h-100 border-0 hover-shadow">
    <div class="card-body text-center">
      <i class="bi bi-gem display-4 text-primary mb-3"></i>
      <h5 class="card-title">{{ $title }}</h5>
      <p class="card-text">Harga: {{ $harga }}</p>
      <a href="#" class="btn btn-primary">Beli Sekarang</a>
    </div>
  </div>
</div>