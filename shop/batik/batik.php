<?php 
include '../../input_barang/funct.php';

$ambil=query("SELECT*FROM tb_barang  WHERE id_kategori='1' AND status='Y' ORDER BY id_barang DESC");

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<form action="kirim.php" method="post" target="_blank"> 
		<title>Batik</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>
		<header>

			<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #3e4551">
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
									<li><a class="dropdown-item" href="#"style="color: white">Batik</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="../knalpot/knalpot.php" style="color: white">Knalpot</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="../makanan/makanan.php"style="color: white">Makanan</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="../shop.php"style="color: white">Lihat Semua</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../../main.php" style="color: white">About</a>
							</li>
							

						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- End Navbar -->
		<!-- Carousel -->
		<!--  -->

		<!-- End Carousel -->

		<!-- produk -->
		<?php $i=1; ?>
		<?php foreach ($ambil as $row):?>
			<div class="container mt-5 ">
				<!--Product  -->
				<div class="row justify-content-beetween ">
					<div class="col-md-4 mb-3" style="width: 20rem">
				<form>
					<div class="card " style="width: 18rem;">
						<img src="../../input_barang/img/<?php echo $row["gambar"]; ?>" class="card-img-top img-thumbnail" alt="batik" style="height: 20rem">

						<div class="card-body">
							<h5 class="card-title"><?php echo $row["nama_barang"]; ?></h5>
							
							<p class="card-text"><strong>Rp.<?php echo $row["harga"]; ?></strong></p>
							<!-- <a href="#" class="btn btn-primary" data-bs-target="#PratinjauBarang">Go somewhere</a> -->
							<div class="d-grid gap-2 d-md-block">
								<a class="btn btn-success mb-2 px-4" href="../makanan/tampil_makanan.php?id=<?php echo $row["id_barang"]?>" role="button">Lihat</a>
								<a class="btn btn-primary mb-2 px-4" href="../makanan/kirim.php?id=<?php echo $row["id_barang"]?>" role="button">Beli</a>
								</div>


						</div>
					</div>
					<!-- Modal -->
					
				</div>
			</form>
		</div>
		</div>
			<?php $i++; ?>
		<?php endforeach; ?>
	</div>
	<!-- end produk -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>