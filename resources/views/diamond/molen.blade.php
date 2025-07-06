<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Top-Up Game - Jual Voucher Game Murah dan Aman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    body {
      background-color: #2c3e50;
    }
      .hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
      }
      input::placeholder {
      color: #ccc;
      font-style: italic;
    }

    input:focus {
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

  </style>
</head>
<body>
<main>
  <div class="container py-4">
    <!-- Header -->
    <header class="pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" fill="currentColor" viewBox="0 0 118 94">
          <path d="..." /> <!-- Path dipersingkat -->
        </svg>
        <span class="fs-4">Mobile Legends</span>
      </a>
    </header>

    <!-- Jumbotron Full Background -->
    <div class="jumbotron position-relative text-white rounded-3 overflow-hidden mb-4" style="height: 450px;">
      <img src="{{ asset('image/1309595.jpg') }}" class="position-absolute w-100 h-auto object-fit-cover" alt="Jumbotron Background" style="z-index: 1;">

      <!-- Overlay -->
      <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50" style="z-index: 2;"></div>

      <!-- Content -->
      <div class="container h-100 d-flex flex-column justify-content-center align-items-start position-relative" style="z-index: 3; padding: 2rem;">
        <h1 class="display-5 fw-bold">Custom Jumbotron</h1>
        <p class="fs-4">Gunakan utilities Bootstrap untuk membuat tampilan jumbotron seperti ini.</p>
        <button class="btn btn-primary btn-lg">Contoh Button</button>
      </div>
    </div>

    <!-- Dua Kolom -->
    <div class="row g-4">
      <!-- Kolom Form -->
      <div class="col-md-9">
        <div class="p-4 text-bg-dark rounded-3">
          <h3 class="mb-4">Formulir Kontak</h3>

          <form>
            <div class="row mb-3">
              <div class="col">
                <label for="id_game" class="form-label">ID Game</label>
                <input type="text" id="id_game" name="id_game" class="form-control" placeholder="Contoh: 12345678" required>
              </div>
              <div class="col">
                <label for="server" class="form-label">Server</label>
                <input type="text" id="server" name="server" class="form-control" placeholder="Contoh: 1234" required>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col">
                <label for="diskon" class="form-label">Kode Diskon</label>
                <input type="text" id="diskon" name="kode_diskon" class="form-control" placeholder="Masukkan kode jika ada">
              </div>
            </div>

            <button type="submit" class="btn btn-outline-light mt-3">Kirim</button>
          </form>

        </div>
      </div>

      <!-- Kolom Konten -->
      <div class="col-md-3">
        <div class="p-4 bg-light border rounded-3">
          <h4 class="mb-3">Informasi</h4>
          <ul class="list-unstyled">
            <li><strong>⚡ Instant Delivery:</strong> Diamond masuk dalam 1–3 menit</li>
            <li><strong>🎁 Promo Diskon:</strong> Gunakan kode <code>MLBB10</code></li>
            <li><strong>💳 Pembayaran:</strong> Dana, OVO, ShopeePay, Transfer</li>
          </ul>
          <button class="btn btn-outline-primary w-100 mt-2">Lihat Promo</button>
        </div>
      </div>

    </div>

    <div class="row mt-4">
      <div class="col-12">
        <div class="p-4 bg-light border rounded-3">
          <h3 class="mb-3">Pilih Diamond</h3>
          <p>Silakan pilih paket diamond sesuai kebutuhan Anda dan klik tombol "Beli Sekarang".</p>

          <div class="row mt-4">
            <!-- Diamond Item 1 -->
            <x-diamond-box title="Diamond 100" harga="Rp 10.000" />

            <!-- Diamond Item 2 -->
            <x-diamond-box title="Diamond 200" harga="Rp 18.000" />

            <!-- Diamond Item 3 -->
            <x-diamond-box title="Diamond 500" harga="Rp 45.000" />

            <x-diamond-box title="Diamond 500" harga="Rp 45.000" />

            <x-diamond-box title="Diamond 500" harga="Rp 45.000" />
            
            <x-diamond-box title="Diamond 500" harga="Rp 45.000" />
          </div> <!-- /row -->
        </div>
      </div>
    </div>

  </div>
</main>

    <!-- Footer -->
    <div class="mt-5">
      <x-footer/>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
