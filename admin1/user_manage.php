<?php 
include '../login/funct.php';
$ambil=query("SELECT*FROM tb_login ORDER BY id DESC");

 ?>
<?php include '../navigasi/admin_nav.php'; ?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <center>
              <h3>
               Account Manager<strong> SI GALUH</strong> <br>
              </h3>
            </center>

         </div>
      </div>                  
    </div>

        
</div>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Akun Seller</h1>

</div>

<button type="button" class="btn btn-primary" value="Input" >Tambah Data</button>
<?php $i=1; ?>
<?php foreach ($ambil as $row):?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Username </th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Level</th>
      <th scope="col">Status</th>

      <th scope="col">Aksi</th>

  </tr>
</thead>
<tbody>
    <tr>
      <!-- <th scope="row"></th> -->
      <td><?php echo $i; ?></td>
      <td><?php echo $row["username"]; ?></td>
      <td><?php echo $row["nama_lengkap"]; ?></td>
      <td><?php echo $row["level"]; ?></td>
      <td><?php echo $row["status"]; ?></td>
      
      <td>
          <button type="button" class="btn btn-success btn-sm"><a href="edit_akun.php">Edit</a></button>

          <button type="button" class="btn btn-danger btn-sm" ><a href="hapus_akun.php?id=<?php echo $row["id"]?>".onclink="return confirm('anda yakin ingin menghapus data ini?');">Delete</a> </button>
      </td>
  </tr>
  <?php $i++; ?>
	<?php endforeach; ?>
</body>
</table>
