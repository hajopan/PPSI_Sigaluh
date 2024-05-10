<?php 
if(isset($_POST['submit'])){
	$nomor_hp =$_POST['nomor_hp'];
	$pesan =$_POST['pesan'];
	
header("location:https://api.whatsapp.com/send/?phone=$nomor_hp&text=$pesan+&app_absent=0");

}else{
	echo "

	<script>
	window.location=history.go(-1);
	</script>

	";
}

?>