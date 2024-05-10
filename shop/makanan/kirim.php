<?php 
include '../../input_barang/funct.php';

$id=$_GET["id"];
$ambil= query("SELECT * FROM tb_barang WHERE id_barang = $id")[0];

?>

<?php 
// if(isset($_POST['submit'])){
// 	$ambil["nama_barang"];
// 	$ambil["nomor_hp"];
	
// header("location:https://api.whatsapp.com/send/?phone=$nomor_hp&text=Saya+ingin+membeli+produk+$nama_barang+&app_absent=0");

// }else{
// 	echo "

// 	<script>
// 	window.location=history.go(-1);
// 	</script>

// 	";
// }
$nama=$ambil["nama_barang"];
$nomor_hp=$ambil["nomor_hp"];
header("location:https://api.whatsapp.com/send/?phone=$nomor_hp&text=Saya+ingin+membeli+produk+$nama+&app_absent=0");

?>