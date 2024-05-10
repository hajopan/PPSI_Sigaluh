		<?php 

		include 'funct.php';
		$ambil=query("SELECT*FROM kategori ORDER BY id_kategori ASC");
		

		if (isset($_POST["tambah"])) {
			if (simpan($_POST)>0) {
				echo "
				<script>
				alert('Produk berhasil diajukan, silahkan tunggu 1x24 jam di Nomor WA anda');
				document.location.href='index.php';
				;
				</script> ";
			}
			else{
				echo "
				<script>
				alert('data gagal ditambahkan');
				document.location.href='index.php';
				</script> ";
				
			}
		}

		?>

		<?php include '../navigasi/navbar.php'; ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">

		<div class="container ">
			<div class="row text-center mb-2 mt-5 pt-3">
				<div class="col">
					<h3>Buat Pesan Baru</h3>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-6">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="mb-3">
							<h4>Informasi Pengirim</h4>
							<label for="text" class="form-label">Nama Sesuai KTP</label>
							<input type="name" class="form-control " id="nama" aria-describedby="name" name="nama_lengkap">
							<label for="text" class="form-label">NIK</label>
							<input type="nim" class="form-control" id="nim" aria-describedby="nim" name="nomor_kk">
							<label for="text" class="form-label">Alamat</label>
							<input type="kelas" class="form-control" id="kelas" aria-describedby="kelas" name="alamat">
							<label for="text" class="form-label">Nomor Telepon</label>
							<input type="kelas" class="form-control" id="kelas" aria-describedby="kelas" name="nomor_hp">
							<small id="emailHelp" class="form-text text-muted">*Nomor Telepon yang memiliki Whatsapp</small>
						</div>
						<h4>Informasi Barang</h4>


						<div class="mb-3">
							<label for="text" class="form-label">Nama Barang</label>
							<input type="name" class="form-control" id="nama_penerima" aria-describedby="name" name="nama_barang">
							<label for="text" class="form-label">Deskripsi Barang</label>
							<textarea class="form-control" name="deskripsi_barang"> </textarea>
							<!-- <input type="textarea" class="form-control" id="nama_penerima" aria-describedby="name" name="nama_penerima"> -->
							<label for="text" class="form-label">Harga Barang</label>
							<input type="name" class="form-control" id="nama_penerima" aria-describedby="name" name="harga">
							<small id="emailHelp" class="form-text text-muted">*contoh 10.000 atau 10.000-20.000</small>
							<select class="form-select mt-3" name="id_kategori" aria-label="Default select example">
								
								<option selected>Pilih Kategori</option>
								<!-- <?php $i=1; ?>
								<?php foreach ($ambil as $row):?>
									<option value="$row['id_kategori'];"><?php echo $row["Kategori"]; ?></option> 
									<?php $i++; ?>
								<?php endforeach; ?> -->
						<option value="1">Batik</option>	
						<option value="2">Knalpot</option>
						<option value="3">Makanan</option>
						<option value="4">Lainnya</option>
					</select>



				</div>
				<label for="text" class="form-label">Gambar Barang</label>
				<div class="input-group">
					<div class="custom-file mb-3">
						<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="gambar">

					</div>
					<div class="custom-file mb-3">
						<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="gambar2">

					</div>
					<div class="custom-file mb-3">
						<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"name="gambar3">

					</div>

				</div>

				<div class="d-grid gap-2">
					<button class="btn btn-primary mb-2" type="submit" name="tambah" value="tambah">Kirim Pengajaun</button>
				</div>

			</form>
		</div>
	</div>

</div>




<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
