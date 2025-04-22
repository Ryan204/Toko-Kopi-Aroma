<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Kopi Aroma - Kategori Kopi Premium</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #6F4E37;
      --secondary-color: #C4A484;
      --light-color: #F5F5DC;
    }

    body {
      background-color: #f9f5f0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--primary-color) !important;
    }

    .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 100px 0;
      margin-bottom: 50px;
      text-align: center;
    }

    .coffee-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
      background-color: white;
      margin-bottom: 30px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .coffee-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 25px;
    }

    .card-title {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 15px;
    }

    .card-text {
      color: #666;
    }

    .coffee-icon {
      font-size: 2rem;
      color: var(--primary-color);
      margin-bottom: 15px;
    }

    footer {
      background-color: var(--primary-color);
      color: white;
      padding: 30px 0;
      margin-top: 50px;
    }

    .section-title {
      position: relative;
      margin-bottom: 40px;
      color: var(--primary-color);
      text-align: center;
    }

    .section-title:after {
      content: "";
      display: block;
      width: 80px;
      height: 3px;
      background: var(--secondary-color);
      margin: 15px auto;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-coffee me-2"></i>Toko Kopi Aroma
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!--  Banner -->
  <div class="hero-section">
    <div class="container">
      <h1 class="display-4 fw-bold">Selamat Datang di Toko Kopi Aroma</h1>
      <p class="lead">Temukan berbagai macam kopi berkualitas premium dari seluruh dunia</p>
    </div>
  </div>

  <!-- Kategori -->
  <div class="container mb-5">
    <h2 class="section-title">Kategori Kopi Kami</h2>

    <div class="row">
      @foreach($categories as $category)
      <div class="col-md-6">
        <div class="coffee-card">
          <img src="{{ $loop->first ? 'https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80' : 'https://images.unsplash.com/photo-1459755486867-b55449bb39ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80' }}"
            class="card-img-top"
            alt="{{ $category->name }}">
          <div class="card-body text-center">
            <div class="coffee-icon">
              <i class="fas fa-coffee"></i>
            </div>
            <h3 class="card-title">{{ $category->name }}</h3>
            <p class="card-text">{{ $category->description }}</p>
            <a href="#" class="btn btn-outline-primary mt-3">Lihat Produk</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <h3><i class="fas fa-coffee me-2"></i>Toko Kopi Aroma</h3>
      <p class="mb-4">Menghadirkan kopi terbaik sejak 2047😂</p>
      <div class="social-media mb-4">
        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
      </div>
      <p class="mb-0">&copy; 2025 Toko Kopi Ryan Tandy. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>