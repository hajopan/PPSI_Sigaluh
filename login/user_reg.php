<?php 
// ini buat koneksi
include 'funct.php';   

//jika tombol registrasi di tekan

if (isset($_POST["register"])) {

	if (registrasi ($_POST) > 0) {
		echo "
			<script>
			alert('Admin berhasil di tambahkan');
			document.location.href='admin_dash.php';
			</script>
		";
	} else {

		echo mysqli_error($koneksi);
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi admin</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<div class="main1">
    	<p class="sign" align="center">Registrasi Admin</p>
     <form action="" class="form1" method="post">
      <input class="un " type="text" align="center" placeholder="Username" name="username">
      <input class="un " type="text" align="center" placeholder="Nama Lengkap" name="nama_lengkap">
      <input class="un " type="text" align="center" placeholder="Nomor Handphone" name="nomor">

      <input class="pass" type="text" align="center" placeholder="Password" name="password">
      <input class="pass" type="text" align="center" placeholder="Password" name="password2">
      <input type="submit" name="register" value="register" class="submit" align="center">
      <p class="forgot" align="center"><a href="admin_log.php">sudah punya akun? login disini</p>
      

    </div>


</body>
</html>