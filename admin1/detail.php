<?php  

include '../input_barang/funct.php';
$id=$_GET["id"];
$ambil= query("SELECT * FROM tb_barang INNER JOIN kategori ON kategori.id_kategori = tb_barang.id_kategori WHERE id_barang = $id")[0];

?>

<?php include '../navigasi/admin_nav.php'; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
				<center>
					<h3>
						Detail <strong>Produk</strong> <br>
					</h3>
				</center>

			</div>
		</div>                  
	</div>


</div>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
		<form>
			<div class="row">
				<div class="col">
					<label for="nama">Nama Lengkap</label>
					<input class="form-control" type="text" disabled="" value="<?php echo $ambil["nama_lengkap"]; ?>" id="nama">
				</div>
				<div class="col">
					<label for="kk">Nomor KK</label>
					<input class="form-control" type="text" disabled="" value="<?php echo $ambil["nomor_kk"]; ?>" id="kk">
				</div>
				<div class="col">
					<label for="hp">Nomor HP</label>
					<input class="form-control" type="text" disabled="" value="<?php echo $ambil["nomor_hp"]; ?>" id="hp">
				</div>
				<div class="col">
					<label for="alamat">Alamat</label>
					<input class="form-control" type="text" disabled="" value="<?php echo $ambil["alamat"]; ?>" id="alamat" style="width: 20rem">
				</div>
			</div>
			<div class="dropdown-divider mt-3"></div>
			<div class="row">
				<div class="col">
					<label for="nama">Nama Barang</label>
					<input class="form-control" type="text" disabled="" value="<?php echo $ambil["nama_barang"]; ?>" id="nama">
				</div>
				<div class="col">
					<label for="kategori">Kategori</label>
					<input class="form-control" type="text" disabled="" value="<?php echo $ambil["Kategori"]; ?>" id="kategori">
				</div>
				<div class="col">
					<label for="kk">Harga</label>
					<input class="form-control" type="text" disabled="" value="<?php echo $ambil["harga"]; ?>" id="kk">
				</div>
				<div class="col">
					<label for="alamat">Deskripsi Barang</label>
					<input class="form-control" type="text" disabled="" value="<?php echo $ambil["deskripsi_barang"]; ?>" id="alamat" style="width: 20rem">
				</div>
			</div>
			<div class="dropdown-divider mt-3"></div>
			<div class="row">
				<div class="col">
					<label for="nama">Gambar 1</label>
					<!-- <input class="form-control" type="text" disabled="" value="<?php echo $ambil["nama_barang"]; ?>" id="nama"> -->
					<img src="../input_barang/img/<?php echo $ambil["gambar"]; ?>" class="card-img-top img-thumbnail" alt="batik" style="height: 20rem">

				</div>
				<div class="col">
					<label for="kategori">Gambar 2</label>
					<!-- <input class="form-control" type="text" disabled="" value="<?php echo $ambil["Kategori"]; ?>" id="kategori"> -->
					<img src="../input_barang/img/<?php echo $ambil["gambar2"]; ?>" class="card-img-top img-thumbnail" alt="batik" style="height: 20rem">
				</div>
				<div class="col">
					<label for="kk">Gambar 3</label>
					<img src="../input_barang/img/<?php echo $ambil["gambar3"]; ?>" class="card-img-top img-thumbnail" alt="batik" style="height: 20rem">
				</div>
				
			</div>
		</form>
		<!--  <input class="form-control" type="text" disabled="" value="<?php echo $ambil["nama_barang"]; ?>">
 -->
	</div>

