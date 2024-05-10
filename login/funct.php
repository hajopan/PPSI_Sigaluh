<?php  

//$koneksi=mysqli_connect("localhost","root","","db_sigaluh");

//buat fuanction registrasi
function registrasi($data){
	include ('../koneksi.php');

	// $username = strtolower(stripcslashes($data["username"]));
 //    $nama_lengkap = strtolower(stripcslashes($data["nama_lengkap"]));
 //    // $nomor = strtolower(stripcslashes($data["nomor"]));
	// $password = mysqli_real_escape_string($koneksi,$data["password"]);
	// $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);
	// $level = mysqli_real_escape_string($koneksi,$data["level"]);
	//$pass = md5($_POST['password']);
	$username = mysqli_escape_string($koneksi, $_POST['username']);
	$nama_lengkap =mysqli_escape_string($koneksi,$_POST['nama_lengkap']);
		$password = mysqli_escape_string($koneksi, $_POST['password']);
	
		$level = mysqli_escape_string($koneksi, $_POST['level']);  


	//cek apakah username sudah ada atau belum

	$result = mysqli_query($koneksi, "SELECT username FROM tb_login WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
			alert('username sudah terdaftar, Silahkan Coba lagi.');
			</script>
		";
		return false;
	}

	//cek konfirmasi password

	// if ($password !== $password2) {
	// 	echo "<script>
	// 		alert('Konfirmasi password tidak sesuai, Cobalagi');
	// 		</script>";
	// 	return false;
	// }

	//enkripsi password (ada dua yaitu md5 dan hash )

	//$password = password_hash($password, PASSWORD_DEFAULT);
		$password =md5($password);
	//tambahkan user baru ke data base

	mysqli_query($koneksi, "INSERT INTO tb_login values 
		('','$username','$nama_lengkap','$password','Admin','N')");


		return mysqli_affected_rows($koneksi);
}

function query($query){
	include ('../koneksi.php');
	$ambil=mysqli_query($koneksi,$query);
	$row=[];
	while ($row=mysqli_fetch_assoc($ambil)) {
		$rows[]=$row;
	}
	return $rows;
}

// function ubah($data){
// global $koneksi;

// $id =$data["id"];
// $data ="UPDATE tb_login SET 
// 	status='Y', WHERE id=$id
// 	";

// if ($data) {	

// 	echo "
// 	<script type='text/javascript'>
// 	setTimeout(function () {
// 	swal({
// 	title: 'CONFIRMASI SUKSES',
// 	text:  'Akun telah Aktif !',
// 	type: 'success',
// 	timer: 3000,
// 	showConfirmButton: true
// 	});     
// 	},10);  
// 	window.setTimeout(function(){ 
// 	window.location.replace('../admin1/index.php');
// 	} ,3000);   
// 	</script>";
// }else{
// 	echo "
//     <script>
//       alert('data gagal di edit');
//       document.location.href = '../admin1/index.php';
//     </script>

//     ";
// }
// mysqli_query($koneksi, $query);
// return mysqli_affected_rows($koneksi);
// }


	function ubah($id){
		include ('../koneksi.php');
		$query="UPDATE tb_barang SET status='Y' where id_barang=$id";
		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}

function hapus($id){

	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_barang where id_barang = $id");


	return mysqli_affected_rows($koneksi);
}



?>