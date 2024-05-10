<?php 

include '../login/funct.php';

$id = $_GET["id"];


if (ubah ($id)) {
	echo "

		<script>
			alert('data berhasil di Terima, segera lakukan konfirmasi ke penjual');
			document.location.href = 'confirm.php';
		</script>

		";
}else {

	echo "

		<script>
			alert('data gagal di terima');
			document.location.href = 'tampil_produk.php';
		</script>

		";
}

 ?>
