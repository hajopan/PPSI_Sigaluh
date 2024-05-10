<?php 
if(isset($_POST['submit'])){
	

	header("location:https://api.whatsapp.com/send/?phone=6282211869417&text=Saya+ingin+membeli+produk+Kuali+&app_absent=0");

}else{
	echo "

	<script>
	window.location=history.go(-1);
	</script>

	";
}

?>

