<?php 
$ambil ="UPDATE tb_login SET 
	status='Y', WHERE id='$_GET[id]' ";

if ($ambil) {	

	echo "
	<script type='text/javascript'>
	setTimeout(function () {
	swal({
	title: 'CONFIRMASI SUKSES',
	text:  'Akun telah Aktif !',
	type: 'success',
	timer:3000,
	showConfirmButton: true
	});     
	},10);  
	window.setTimeout(function(){ 
	window.location.replace('../admin1/index.php');
	} ,3000);   
	</script>";
}else{
	echo "
    <script>
      alert('data gagal di edit');
      document.location.href = '../admin1/index.php';
    </script>

    ";
}



 ?>
