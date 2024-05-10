<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>SI GALUH</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
<link rel="stylesheet" type="text/css" href="style.css">
  

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  
  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>
<body>
  
  <header>
   
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-4" style="background-color: #3e4551">
      <div class="container">
        <a class="navbar-brand" href="#" style="color: white">SI Galuh</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="color: white">Home</a>
            </li>
            
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                Shop
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1f2120">
                <li><a class="dropdown-item" href="../shop/batik/batik.php"style="color: white">Batik</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../shop/knalpot/knalpot.php" style="color: white">Knalpot</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../shop/makanan/makanan.php"style="color: white">Makanan</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../shop/shop.php"style="color: white">Lihat Semua</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../main.php" style="color: white">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login/login.php" style="color: white">Login</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../input_barang/index.php" style="color: white">Barang</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="../assets/brand/kantor.jpg"class="img-fluid" style="background-size: cover; background-attachment: fixed;"><rect width="100%" height="100%" fill="#777"/></svg>

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Sistem Informasi Galuh</h1>
              
              <p><a class="btn btn-lg btn-primary" href="../shop/shop.php">Belanja Sekarang</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="foto.jpg"  class="img-fluid" alt="batik"><rect width="100%" height="100%" fill="#777"/></svg>

          <div class="container">
            <div class="carousel-caption">
              <h1 style="color: white ">Desa Galuh</h1>
              <p>Galuh adalah desa di kecamatan Bojongsari, Purbalingga, Jawa Tengah, Indonesia</p>
              <p><a class="btn btn-lg btn-primary" href="../main.php">Tentang</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="../assets/brand/gambar3.png"class="img-fluid"><rect width="100%" height="100%" fill="#777"/></svg>

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Ingin menjual produk anda di SI Galuh?</h1>
              <p>Ajukan produk UMKM Anda agar lebih dikenal oleh banyak orang</p>
              <p><a class="btn btn-lg btn-primary" href="../input_barang/index.php">Ajukan Sekarang</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
         
          <img src="../assets/brand/batik.jpg" alt="batik" width="140" height="140" class="rounded-circle ">
          <h2>Batik</h2>
          <p> batik tulis di desa Galuh yang tetap eksis dibuat dengan menggunakan alat sederhana berupa canting dan kompornya pun terbuat dari tungku bahan bakarnya adalah kayu bakar</p>
          <p><a class="btn btn-secondary" href="../shop/batik/batik.php">Beli &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          
          <img src="../assets/brand/knalpot.jpg" alt="batik" width="140" height="140" class="rounded-circle ">

          <h2>Knalpot</h2>
          <p>Desa Galuh menjadi salah satu tempat Industri rumahan knalpot Purbalingga. Kualitas knalpot yang dihasilkan, bisa diuji dan dibandingkan dengan produk lainnya.</p>
          <p><a class="btn btn-secondary" href="../shop/knalpot/knalpot.php">Beli &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../assets/brand/jajan.jpg" alt="batik" width="140" height="140" class="rounded-circle ">

          <h2>Makanan</h2>
          <p>Makanan yang di produksi di Desa Galuh menjadi sebuah Cita rasa yang memberikan rasa unik pada produk makanan yang dihasilkan</p>
          <p><a class="btn btn-secondary" href="../shop/makanan/makanan.php">Beli &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Produksi Batik Desa Galuh</h2>
          <p class="lead">batik tulis di desa Galuh yang tetap eksis dibuat dengan menggunakan alat sederhana berupa canting dan kompornya pun terbuat dari tungku bahan bakarnya adalah kayu bakar</p>
        </div>
        <div class="col-md-5">
          <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="../assets/brand/batik.jpg"><rect width="500" height="500" fill="#eee"/></svg> -->
          <img src="../assets/brand/batik.jpg" class="img-thumbnail" alt="batik">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Produk Knalpot Desa Galuh</h2>
          <p class="lead">Desa Galuh menjadi salah satu tempat Industri rumahan knalpot Purbalingga. Kualitas knalpot yang dihasilkan, bisa diuji dan dibandingkan dengan produk lainnya. Kelebihan knalpot buatan desa Galuh,Purbalingga adalah meningkatkan tenaga mobil serta suara knalpot yang bisa diatur sesuai keinginan konsumen seperti suara bas, suara kering, dan lain-lain.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="../assets/brand/knalpot.jpg" class="img-thumbnail" alt="knalpot">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Produk Makanan  <span class="text-muted">Desa Galuh</span></h2>
          <p class="lead">Makanan yang di produksi di Desa Galuh menjadi salah satu jajanan yang dikenal dari kabupaten Purbalingga. Rasa yang beragam dengan khas bahan yang diandalkan, menjadi sebuah Cita rasa yang memberikan rasa unik pada produk makanan yang dihasilkan. Jajanan yang beragam ini menjamin kualitas rasa yang enak, dan sehat yang dihasilkan produk rumah sendiri.</p>
        </div>
        <div class="col-md-5">
          <img src="../assets/brand/jajan.jpg" class="img-thumbnail" alt="batik">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
  
    <!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- <div class="container my-5"> -->
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #3e4551"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15827.415163565996!2d109.36047521303668!3d-7.370279914906104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65582280debfa9%3A0x4ab1aa9650feab6c!2sGaluh%2C%20Kec.%20Bojongsari%2C%20Kabupaten%20Purbalingga%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1655224269328!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="embed-responsive-item" ></iframe>
          
</div>
          </div>
          <!--Grid column-->

          

          <!--Grid column-->
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0 text-end">
            <h5 class="text-uppercase">Produk</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="../shop/batik/batik.php" class="text-white">Batik</a>
              </li>
              <li>
                <a href="../shop/knalpot/knalpot.php" class="text-white">Knalpot</a>
              </li>
              <li>
                <a href="../shop/makanan/makanan.php" class="text-white">Makanan</a>
              </li>
              <li>
                <a href="../shop/shop.php" class="text-white">Semua Produk</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

       
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="mb-4  mt-4" />

      <!-- Section: Social media -->
     
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright: SI Galuh
      
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
<!-- </div> -->
<!-- End of .container -->

  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>
