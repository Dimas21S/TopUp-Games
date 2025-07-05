<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #2c3e50;
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
        <span class="fs-4">Form Example</span>
      </a>
    </header>

    <!-- Jumbotron -->
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom Jumbotron</h1>
        <p class="col-md-8 fs-4">Gunakan utilities Bootstrap untuk membuat tampilan jumbotron seperti ini.</p>
        <button class="btn btn-primary btn-lg" type="button">Contoh Button</button>
      </div>
    </div>

    <!-- Dua Kolom -->
    <div class="row g-4">
      <!-- Kolom Form -->
      <div class="col-md-6">
        <div class="p-4 text-bg-dark rounded-3">
          <h3 class="mb-4">Formulir Kontak</h3>

          <form>
            <div class="row mb-3">
              <div class="col">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" class="form-control" placeholder="Nama lengkap">
              </div>
              <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" placeholder="email@example.com">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" id="firstname" class="form-control">
              </div>
              <div class="col">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" id="lastname" class="form-control">
              </div>
              <div class="col">
                <label for="secondEmail" class="form-label">Email Kedua</label>
                <input type="email" id="secondEmail" class="form-control">
              </div>
            </div>

            <button type="submit" class="btn btn-outline-light mt-3">Kirim</button>
          </form>
        </div>
      </div>

      <!-- Kolom Konten -->
      <div class="col-md-6">
        <div class="p-4 bg-light border rounded-3">
          <h3>Add Borders</h3>
          <p>Tampilan kolom ini memperlihatkan konten dengan border. Cocok untuk tambahan informasi atau penjelasan produk.</p>
          <button class="btn btn-outline-secondary" type="button">Contoh Tombol</button>
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
