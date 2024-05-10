<?php 
include '../../input_barang/funct.php';

$id=$_GET["id"];
$ambil= query("SELECT * FROM tb_barang WHERE id_barang = $id")[0];

//$ambil=query("SELECT*FROM tb_barang  WHERE id_kategori='3' AND status='Y' ORDER BY id_barang DESC");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Deskripsi Produk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<title>Makanan</title>
	
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #1f2120">
			<div class="container">
				<a class="navbar-brand" href="../../carousel/index.php" style="color: white">SI Galuh</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="../../carousel/index.php" style="color: white">Home</a>
						</li>

						<li class="nav-item dropdown" >
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
								Shop
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1f2120">
								<li><a class="dropdown-item" href="../batik/batik.php"style="color: white">Batik</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#" style="color: white">Knalpot</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="../makanan/makanan.php"style="color: white">Makanan</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="../shop.php"style="color: white">Lihat Semua</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../../main.php" style="color: white">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../../login/login.php" style="color: white">Login</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End Navbar -->

	<!-- <div class="container-fluid" >
		<form action="" method="post" class="mt-5 pt-5">

			<input type="hidden" name="id" value="<?php echo $ambil["id_barang"] ?>">
			<input type="input" name="id" value="<?php echo $ambil["nama_barang"] ?>">



		</form>
	</div> -->
<div class="divider mt-5 pt-4"></div>
	<div class="section ms-2 ps-0 mt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- <img src="../../input_barang/img/<?php echo $ambil["gambar"]; ?>" class="card-img-top img-thumbnail" alt="batik" style="height: 22rem"> -->
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-indicators">
											<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
											<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
											<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
										</div>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="../../input_barang/img/<?php echo $ambil["gambar"]; ?>" class="d-block w-100 img-thumbnail" alt="kuali1" style="height: 24rem">
											</div>
											<div class="carousel-item">
												<img src="../../input_barang/img/<?php echo $ambil["gambar2"]; ?>" class="d-block w-100 img-thumbnail" alt="kuali2" style="height: 24rem">
											</div>
											<div class="carousel-item">
												<img src="../../input_barang/img/<?php echo $ambil["gambar3"]; ?>" class="d-block w-100 img-thumbnail" alt="kuali3" style="height: 24rem">
											</div>
										</div>
										<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="visually-hidden">Next</span>
										</button>
									</div>
				</div>
				<div class="col-md-5">
					<h2><?php echo $ambil["nama_barang"]; ?></h2>
					<h4>Rp.<?php echo $ambil["harga"]; ?></h4>
					<h4 class="mt-4 ">Deskripsi</h4>
					<p><?php echo $ambil["deskripsi_barang"]; ?></p>
					<p>Nama pemilik : <strong><?php echo $ambil["nama_lengkap"]; ?></strong></p>
					<p>Alamat : <strong><?php echo $ambil["alamat"]; ?></strong></p>
					
					<div class="d-grid gap-2">
					<!-- <button type="button" class="btn btn-success btn-md btn-block">Beli Sekarang</button> -->
					<a class="btn btn-primary mb-2 px-4" href="kirim.php?id=<?php echo $ambil["id_barang"]?>" role="button">Beli</a>
				</div>
				</div>
			</div>
		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
