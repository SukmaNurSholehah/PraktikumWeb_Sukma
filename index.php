<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
      html{
          scroll-behavior:smooth;
      }
      body{
          background-color:#f4f7fc;
      }

      .navbar{
          background: linear-gradient(to right, #5b7cf0, #6f58c9) !important;
      }

      .carousel img{
          height:500px;
          object-fit:cover;
      }

      .about-card{
          border:none;
          border-radius:20px;
      }

      .about-img{
          width:280px;
          border-radius:15px;
      }

      .portfolio-card{
          border:none;
          border-radius:15px;
          transition:.3s;
      }

      .portfolio-card:hover{
          transform:translateY(-8px);
      }

      .portfolio-card img{
          height:180px;
          object-fit:cover;
      }

      .contact-card{
          border:none;
          border-radius:20px;
      }

      footer{
          background:#2d3748;
          color:white;
          text-align:center;
          padding:20px;
          margin-top:50px;
      }
      .navbar-brand,
      .navbar-nav .nav-link{
          color: white !important;
          font-weight: bold;
      }

     .navbar-nav .nav-link{
          color: white !important;
          font-weight: bold;
          padding: 8px 15px;
          border-radius: 8px;
          transition: 0.3s;
      }

      .navbar-nav .nav-link:hover{
          background-color: #5a4bb7;
          color: white !important;
      }
     
      </style>
  </head>
  <body>

<!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-sm">
    <a class="navbar-brand fw-bold" href="#">WebSukmaa</a>

    <button class="navbar-toggler" type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-4">
        <li class="nav-item">
          <a class="nav-link active fw-bold"  href="#home">
            Home
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active fw-bold" href="#profil">
            Profil
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active fw-bold" href="#portofolio">
            Portofolio
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active fw-bold" href="login.php">
            Login
          </a>
       </li>

      </ul>
    </div>
  </div>
</nav>
<!--Akhir navbar-->

<!--Carousel-->
<div id="home" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#home" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#home" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#home" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="container">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar/pantai.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar/gunung.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar/sunset.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Akhir Carousel-->

<!-- About Me -->
<section class="container my-5" id="profil">
    <div class="card shadow about-card">
        <div class="card-body p-5">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="gambar/foto.jpeg"
                         class="about-img shadow">
                </div>
                <div class="col-md-8">
                    <h2 class="fw-bold mb-4">
                        About Me
                    </h2>
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <td>Sukma Nur Sholehah</td>
                        </tr>
                        <tr>
                            <th>TTL</th>
                            <td>Kuala Kapuas, 24 Oktober 2006</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>Perempuan</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Nganjuk</td>
                        </tr>
                        <tr>
                            <th>Hobi</th>
                            <td>Memasak</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir About Me -->

<!-- Portofolio -->
<section class="container my-5" id="portofolio">
  <div class="text-center mb-5">
    <h2 class="fw-bold">My Portofolio</h2>
    <p class="text-muted">
        Kumpulan Tugas Praktikum Web Programming
    </p>
  </div>

  <div class="row g-4">
    <!-- Modul 1 -->
    <div class="col-md-4">
      <div class="card portfolio-card shadow h-100">
        <img src="gambar/html.jpg"
             class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Modul 1</h4>
          <p class="text-muted">HTML & CSS</p>
          <a href="prak1_sukma.html" class="btn btn-primary w-100 mb-2">Prak 1</a>
          <a href="prak2_sukma.html" class="btn btn-primary w-100 mb-2">Prak 2</a>
          <a href="prak3_sukma.html" class="btn btn-primary w-100 mb-2">Prak 3</a>
          <a href="margin.html" class="btn btn-primary w-100 mb-2">Margin</a>
          <a href="portofolio.html" class="btn btn-primary w-100 mb-2">Portofolio</a>
          <a href="positioning.html" class="btn btn-primary w-100 mb-2">Positioning</a>
          <a href="index.html" class="btn btn-primary w-100">
            Index HTML
          </a>
        </div>
      </div>
    </div>

    <!-- Modul 2 -->
    <div class="col-md-4">
      <div class="card portfolio-card shadow h-100">
        <img src="gambar/php.jpg"
             class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Modul 2</h4>
          <p class="text-muted">Struktur Dasar PHP</p>
          <a href="biodata.php" class="btn btn-success w-100 mb-2">
            Biodata
          </a>
          <a href="ketiga.php" class="btn btn-success w-100 mb-2">
            Ketiga
          </a>
          <a href="tugasPHP.php" class="btn btn-success w-100">
            Tugas PHP
          </a>
        </div>
      </div>
    </div>

    <!-- Modul 3 -->
    <div class="col-md-4">
      <div class="card portfolio-card shadow h-100">
        <img src="gambar/php.jpg"
             class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Modul 3</h4>
          <p class="text-muted">Pernyataan Perulangan</p>
          <a href="perulangan.php" class="btn btn-warning w-100 mb-2">
            Perulangan 1
          </a>
          <a href="perulangan_2.php" class="btn btn-warning w-100 mb-2">
            Perulangan 2
          </a>
          <a href="perulangan_3.php" class="btn btn-warning w-100 mb-2">
            Perulangan 3
          </a>
          <a href="perulangan_5.php" class="btn btn-warning w-100 mb-2">
            Perulangan 5
          </a>
          <a href="perulangan_6.php" class="btn btn-warning w-100 mb-2">
            Perulangan 6
          </a>
          <a href="perulangan_7.php" class="btn btn-warning w-100 mb-2">
            Perulangan 7
          </a>
          <a href="tugasPerulangan.php" class="btn btn-warning w-100">
            Tugas Perulangan
          </a>
        </div>
      </div>
    </div>

    <!-- Modul 4 -->
    <div class="col-md-6">
      <div class="card portfolio-card shadow h-100">
        <img src="gambar/php.jpg"
             class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Modul 4</h4>
          <p class="text-muted">Array</p>
          <a href="array1.php" class="btn btn-danger w-100 mb-2">
            Array 1
          </a>
          <a href="array2.php" class="btn btn-danger w-100 mb-2">
            Array 2
          </a>
          <a href="array3.php" class="btn btn-danger w-100 mb-2">
            Array 3
          </a>
          <a href="tugasArray1.php" class="btn btn-danger w-100 mb-2">
            Tugas Array 1
          </a>
          <a href="tugasArray2.php" class="btn btn-danger w-100">
            Tugas Array 2
          </a>
        </div>
      </div>
    </div>

    <!-- Modul 5 -->
    <div class="col-md-6">
      <div class="card portfolio-card shadow h-100">
        <img src="gambar/php.jpg"
             class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Modul 5</h4>
          <p class="text-muted">Form</p>
          <a href="form_text.php" class="btn btn-info w-100 mb-2">
            Form Text
          </a>
          <a href="login.php" class="btn btn-info w-100 mb-2">
            Login
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Akhir Portofolio -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <footer>
    <h5 class="mb-2">WebSukmaa</h5>
    <p class="mb-0">
        Web Programming I <br>
        2026
    </p>
</footer>
  </body>
</html>