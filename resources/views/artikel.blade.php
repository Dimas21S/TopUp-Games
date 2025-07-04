<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Top-Up Game - Jual Voucher Game Murah dan Aman</title>
  <meta name="description" content="Top-up diamond Mobile Legends, Free Fire, PUBG Mobile dan game lainnya dengan harga termurah dan proses cepat.">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  {{-- Google Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lora:ital,wght@0,400..700;1,400..700&family=Rubik+Mono+One&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary-color: #0dcaf0;
      --secondary-color: #6c757d;
    }
    
    body {
      margin: 0;
      padding: 0;
      background-color: #2c3e50;
      color: white;
      font-family: 'Lora', serif;
    }

    .header-transparent {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 10;
      padding: 16px 32px;
      background: linear-gradient(to bottom, rgba(0,0,0,0.7), transparent);
    }

    .brand-logo {
      font-size: 1.5rem;
      font-weight: bold;
      text-decoration: none;
      color: white;
    }

    .brand-logo:hover {
      color: var(--primary-color);
    }

    .nav-link {
      color: white !important;
      margin: 0 10px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: var(--primary-color) !important;
      transform: translateY(-2px);
    }

    .btn-outline-light {
      border-color: white;
      color: white;
      transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
      background-color: white;
      color: black;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .carousel-inner img {
      height: 450px;
      object-fit: cover;
      filter: brightness(0.8);
    }

    .carousel-item::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), transparent);
      z-index: 1;
    }

    .carousel-caption {
      z-index: 2;
      bottom: 30%;
    }

    .card {
      width: 50%;
      height: auto;
      transition: all 0.3s ease;
      border: none;
      border-radius: 10px;
      overflow: hidden;
      background-color: #34495e;
    }
    
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    
    .card-title {
      font-weight: bold;
      color: var(--primary-color);
    }
    
    .card-text {
      color: #ecf0f1;
    }

    section {
      padding: 60px 0;
    }

    .section-title {
      position: relative;
      margin-bottom: 40px;
      padding-bottom: 15px;
    }
    
    .section-title:after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: var(--primary-color);
    }

    /* Blog Section Styles */
    .blog-section {
      background-color: #34495e;
      padding: 80px 0;
    }
    
    .blog-card {
      background: #2c3e50;
      border-radius: 10px;
      overflow: hidden;
      transition: all 0.3s ease;
      height: 100%;
      border: none;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .blog-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    
    .blog-img-container {
      height: 200px;
      overflow: hidden;
    }
    
    .blog-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .blog-card:hover .blog-img {
      transform: scale(1.05);
    }
    
    .blog-content {
      padding: 20px;
    }
    
    .blog-badge {
      background: var(--primary-color);
      color: #fff;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 4px 10px;
      border-radius: 20px;
      margin-bottom: 10px;
      display: inline-block;
    }
    
    .blog-date {
      color: #bdc3c7;
      font-size: 0.8rem;
      margin-bottom: 10px;
      display: block;
    }
    
    .blog-title {
      color: white;
      font-weight: 600;
      margin-bottom: 12px;
      font-size: 1.1rem;
      line-height: 1.4;
    }
    
    .blog-excerpt {
      color: #ecf0f1;
      font-size: 0.9rem;
      margin-bottom: 15px;
      line-height: 1.5;
    }
    
    .read-more {
      color: var(--primary-color);
      font-weight: 600;
      text-decoration: none;
      font-size: 0.9rem;
      display: inline-flex;
      align-items: center;
      transition: all 0.3s ease;
    }
    
    .read-more:hover {
      color: white;
      text-decoration: underline;
    }
    
    .read-more i {
      margin-left: 5px;
      transition: transform 0.3s ease;
    }
    
    .read-more:hover i {
      transform: translateX(3px);
    }
    
    .view-all {
      text-align: center;
      margin-top: 40px;
    }
    
    .view-all-btn {
      background: transparent;
      border: 2px solid var(--primary-color);
      color: var(--primary-color);
      padding: 8px 25px;
      border-radius: 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    
    .view-all-btn:hover {
      background: var(--primary-color);
      color: #2c3e50;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(13, 202, 240, 0.3);
    }

    @media (max-width: 768px) {
      .carousel-inner img {
        height: 400px;
      }
      
      .carousel-caption {
        bottom: 20%;
      }
      
      .carousel-caption h1 {
        font-size: 1.8rem;
      }
      
      .carousel-caption p {
        font-size: 1rem;
      }
      
      .blog-img-container {
        height: 180px;
      }
    }

    @media (max-width: 576px) {
      .carousel-inner img {
        height: 300px;
      }

      .header-transparent {
        padding: 10px 16px;
      }
      
      .carousel-caption {
        bottom: 10%;
      }
      
      .carousel-caption h1 {
        font-size: 1.5rem;
      }
      
      .carousel-caption .btn {
        font-size: 0.8rem;
        padding: 5px 10px;
      }
      
      .blog-section {
        padding: 60px 0;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
    }
  </style>
</head>

<body>

  <!-- Header Transparan -->
  <x-header/>

  <!-- Main Carousel -->
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active position-relative">
        <img src="{{ asset('image/wallpaper-2.jpg') }}" alt="Diskon Mobile Legends" class="d-block w-100">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="display-4 fw-bold" style="font-family: 'Bebas Neue', sans-serif;">Top-up Diamond Murah</h1>
            <p class="lead">Diskon hingga 70% untuk pengguna baru. Top-up cepat & aman.</p>
            <p><a class="btn btn-lg btn-primary px-4" href="#">Daftar Sekarang</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item position-relative">
        <img src="{{ asset('image/1309595.jpg') }}" alt="Diskon Free Fire" class="d-block w-100">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="display-4 fw-bold" style="font-family: 'Bebas Neue', sans-serif;">Promo Game Terpopuler</h1>
            <p class="lead">Cukup 1 klik untuk top-up Free Fire & game lainnya!</p>
            <p><a class="btn btn-lg btn-primary px-4" href="#">Pelajari Lebih</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item position-relative">
        <img src="{{ asset('image/1309771.jpg') }}" alt="Diskon PUBG Mobile" class="d-block w-100">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="display-4 fw-bold" style="font-family: 'Bebas Neue', sans-serif;">Top-up PUBG Mobile</h1>
            <p class="lead">Harga spesial untuk pengguna setia kami.</p>
            <p><a class="btn btn-lg btn-primary px-4" href="#">Lihat Semua</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Improved Blog Section -->
  <section class="blog-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mb-5">
          <h2 class="section-title" style="font-family: 'Rubik Mono One', monospace;">Artikel & Promo Terbaru</h2>
          <p class="text-muted">Temukan tips, trik, dan promo menarik seputar game favorit Anda</p>
        </div>
      </div>
      
      <div class="row g-4">
        <!-- Blog Item 1 -->
        <x-blog kategori="Promo" waktu="2 hari lalu" judul="Diskon 50% Diamond Mobile Legends" isi="Dapatkan diskon 50% untuk pembelian diamond Mobile Legends. Promo berlaku hingga akhir bulan ini." gambar="{{ asset('image/skin-lesley.webp') }}"/>
        
        <!-- Blog Item 2 -->
        <x-blog kategori="Game" waktu="1 minggu lalu" judul="Cara Mendapatkan Skin Gratis di Free Fire" isi="Ikuti langkah-langkah mudah untuk mendapatkan skin gratis di Free Fire. Jangan lewatkan kesempatan ini!" gambar="{{ asset('image/lukas-mobile-legends.jpeg') }}"/>

        <!-- Blog Item 3 -->
        <x-blog kategori="Update" waktu="3 hari lalu" judul="Patch Terbaru PUBG Mobile 2.1" isi="Apa saja yang baru di update PUBG Mobile versi 2.1? Simak perubahan dan fitur baru di sini." gambar="{{ asset('image/Ling-mobile-legends.webp') }}"/>
      </div>

      <div class="view-all">
        <button class="view-all-btn">Lihat Semua Artikel</button>
      </div>
    </div>
  </section>

  <!-- Footer -->
    <footer class="bg-dark text-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>Top-Up Game</h5>
          <p class="text-muted">&copy; 2025 Top-Up Game. All rights reserved.</p>
        </div>
        <div class="col-md-3">
          <h5>Informasi</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Tentang Kami</a></li>
            <li><a href="#" class="text-muted">Kontak</a></li>
            <li><a href="#" class="text-muted">Kebijakan Privasi</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Top-Up</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Mobile Legends</a></li>
            <li><a href="#" class="text-muted">Free Fire</a></li>
            <li><a href="#" class="text-muted">PUBG Mobile</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Bantuan</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">FAQ</a></li>
            <li><a href="#" class="text-muted">Panduan</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Additional JS for better user experience -->
  <script>
    // Enable smooth scrolling for all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });

    // Initialize carousel with pause on hover
    const carousel = new bootstrap.Carousel('#mainCarousel', {
      pause: 'hover',
      interval: 5000
    });
  </script>
</body>

</html>
