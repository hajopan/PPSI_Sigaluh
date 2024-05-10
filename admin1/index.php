<?php 
include '../input_barang/funct.php';
$ambil=query("SELECT*FROM tb_barang INNER JOIN kategori ON kategori.id_kategori = tb_barang.id_kategori WHERE status='N' ORDER BY id_barang DESC");

?>
<?php include '../navigasi/admin_nav.php'; ?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <div class="col-md-9">
    <div class="card">
      <div class="card-body">
        <center>
          <h3>
           PANEL ADMIN <strong> SI GALUH</strong> <br>
         </h3>
       </center>

     </div>
   </div>                  
 </div>


</div>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Notifikasi</h1>

  </div>
<!-- 
  <button type="button" class="btn btn-light" value="Input" ><a href="../input_barang/index.php">Tambah Data</a> </button> -->

 <?php $i=1; ?>
<?php foreach ($ambil as $row):?> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Nomor KK</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kategori</th>
      <th scope="col">Status</th>

      <th scope="col">Aksi</th>

    </tr>
  </thead>

  <tbody>

    <tr>

        <!-- <th scope="row"></th> -->
        <td><?php echo $i; ?></td>
        <td><?php echo $row["nama_lengkap"]; ?></td>
        <td><?php echo $row["nomor_kk"]; ?></td>
        <td><?php echo $row["nama_barang"]; ?></td>
        <td><?php echo $row["Kategori"]; ?></td>    
      <!-- <td><?php echo $row["gambar"]; ?></td>
      <td><?php echo $row["gambar2"]; ?></td>
      <td><?php echo $row["gambar3"]; ?></td> -->

      <td><?php echo $row["status"];?></td>
      


      <!-- id_barang,nama_lengkap,nomor_kk,nama_barang,deskripsi_barang,harga,gambar,gambar2,gambar3,alamat,id_kategori,status -->
      <td>
        <!-- <button type="button" class="btn btn-success btn-sm"><a href="edit_akun.php?id=<?php echo $row["id_barang"]?>".onclick="return confirm('anda yakin ingin menerima data ini?')">Terima</a></button> -->
        <a class="btn btn-success btn-sm mb-3" href="edit_akun.php?id=<?php echo $row["id_barang"]?>".onclick="return confirm('anda yakin ingin menerima data ini?'" role="button">Terima</a>
        <a class="btn btn-info btn-sm mb-3" href="detail.php?id=<?php echo $row["id_barang"]?>" role="button">Detail</a>
        <a class="btn btn-danger btn-sm mb-3" href="hapus_akun.php?id=<?php echo $row["id_kategori"]?>".onclink="return confirm('anda yakin ingin menghapus data ini?'" role="button">Hapus</a>

      </td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
</body>
</table>
