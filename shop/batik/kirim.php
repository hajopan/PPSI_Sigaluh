<?php 

include '../../input_barang/funct.php';
$ambil=query("SELECT*FROM tb_barang ORDER BY id_barang DESC");

 
if(isset($_POST['submit'])){
	

	header("location:https://api.whatsapp.com/send/?phone=6282211869417&text=Saya+ingin+membeli+produk+$nama_produk+&app_absent=0");

}else{
	echo "

	<script>
	window.location=history.go(-1);
	</script>

	";
}

?>

