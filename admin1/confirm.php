 <form action="kirim.php" method="post" target="_blank">


<?php include '../navigasi/admin_nav.php'; ?>



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<div class="col-md-9">
		<div class="card">
			<div class="card-body">
				<center>
					<h3>
						<strong> SI GALUH</strong> <br>
					</h3>
				</center>

			</div>
		</div>                  
	</div>


</div>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Konfirmasi Barang</h1>

	</div>
	<form >
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Masukkan Nomor Telepon</label>
			<input type="input" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nomor telepon" name="nomor_hp">
		</div>


		<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Masukkan Pesan</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan pesan Konfirmasi" name="pesan"></textarea>
		</div>
		<div class="d-grid gap-2">
            <button class="btn btn-primary mb-2" type="submit" name="submit">Kirim</button>
          </div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

