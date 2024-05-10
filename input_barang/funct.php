<?php
// $koneksi=mysqli_connect("localhost","root","","db_sigaluh");

function query($query){
	include ('../koneksi.php');
	$ambil=mysqli_query($koneksi,$query);
	$row=[];
	while ($row=mysqli_fetch_assoc($ambil)) {
		$rows[]=$row;
	}
	return $rows;
}


function simpan($data){
	// global $koneksi;
	include ('../koneksi.php');

	$nama_lengkap=$data['nama_lengkap'];
	$nomor_kk=$data['nomor_kk'];
	$alamat=$data['alamat'];
	$nama_barang=$data['nama_barang'];
	$deskripsi_barang=$data['deskripsi_barang'];
	$harga=$data['harga'];
	$id_kategori=$data['id_kategori'];
	$nomor_hp=$data['nomor_hp'];


	$gambar = upload();
	if (!$gambar) {
		return false;
	}
	$gambar2 = upload1();
	if (!$gambar2) {
		return false;
	}
	$gambar3 = upload2();
	if (!$gambar3) {
		return false;
	}


	$query="INSERT INTO tb_barang (id_barang,nama_lengkap,nomor_kk,nomor_hp,nama_barang,deskripsi_barang,harga,gambar,gambar2,gambar3,alamat,id_kategori,status)
			 values 
			 ('','$nama_lengkap','$nomor_kk',$nomor_hp,'$nama_barang','$deskripsi_barang','$harga','$gambar','$gambar2','$gambar3','$alamat','$id_kategori','N')";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);

}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];
//cek apakah tidak ada gambar yg di upload
	if ($error === 4) {
		echo " <script>
		alert ('pilih gambar dahulu');
		</script>";
		return false;
	}

//cek apakah yang di upload gambar atau bukan
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end ($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo " <script>
		alert ('yang anda upload bukan gambar');
		</script>";
		return false;
	}

// cek jika ukuran terlalu besar
	if ($ukuranFile > 10000000) {
		echo " <script>
		alert ('ukuran terlalu besar, ganti yang lain atau rubah ukuran');
		</script>";
		return false;
	}

//jika upload lolos
//generate nama gambar baru

	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru.= $ekstensiGambar;


	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

	return $namaFileBaru;


}
function upload1(){
	$namaFile = $_FILES['gambar2']['name'];
	$ukuranFile = $_FILES['gambar2']['size'];
	$error = $_FILES['gambar2']['error'];
	$tmpName = $_FILES['gambar2']['tmp_name'];
//cek apakah tidak ada gambar yg di upload
	if ($error === 4) {
		echo " <script>
		alert ('pilih gambar dahulu');
		</script>";
		return false;
	}

//cek apakah yang di upload gambar atau bukan
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end ($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo " <script>
		alert ('yang anda upload bukan gambar');
		</script>";
		return false;
	}

// cek jika ukuran terlalu besar
	if ($ukuranFile > 10000000) {
		echo " <script>
		alert ('ukuran terlalu besar, ganti yang lain atau rubah ukuran');
		</script>";
		return false;
	}

//jika upload lolos
//generate nama gambar baru

	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru.= $ekstensiGambar;


	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

	return $namaFileBaru;


}
function upload2(){
	$namaFile = $_FILES['gambar3']['name'];
	$ukuranFile = $_FILES['gambar3']['size'];
	$error = $_FILES['gambar3']['error'];
	$tmpName = $_FILES['gambar3']['tmp_name'];
//cek apakah tidak ada gambar yg di upload
	if ($error === 4) {
		echo " <script>
		alert ('pilih gambar dahulu');
		</script>";
		return false;
	}

//cek apakah yang di upload gambar atau bukan
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end ($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo " <script>
		alert ('yang anda upload bukan gambar');
		</script>";
		return false;
	}

// cek jika ukuran terlalu besar
	if ($ukuranFile > 10000000) {
		echo " <script>
		alert ('ukuran terlalu besar, ganti yang lain atau rubah ukuran');
		</script>";
		return false;
	}

//jika upload lolos
//generate nama gambar baru

	$namaFileBaru = uniqid();
	$namaFileBaru .='.';
	$namaFileBaru.= $ekstensiGambar;


	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

	return $namaFileBaru;


}
