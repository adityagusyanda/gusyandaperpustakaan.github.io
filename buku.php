<center><h2>Input Data Buku</h2></center>
<?php
if (isset($_POST['save'])) {
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $query_insert = mysqli_query($koneksi,"INSERT INTO buku VALUES('','$kode_buku','$judul_buku','$penulis','$penerbit')");

    if ($query_insert) {
        header('refresh:1 URL: http://localhost/03_PASGANJIL2021_XIIRPL2_ADITYAGUSYANDA/buku.php');
?>
<?php
    }
}
    if (isset($_GET['hapus'])) {
        $id = $_GET['id'];
        $query_delete = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id'");

        if ($query_delete) {
        header('refresh:1 URL: http://localhost/03_PASGANJIL2021_XIIRPL2_ADITYAGUSYANDA/buku.php');
?>
<?php
        }
    }
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data
</button>
<br>
<br>
<table class="table table-dark table-striped">
    <tr>
        <th>NO</th>
        <th>KODE BUKU</th>
        <th>JUDUL BUKU</th>
        <th>PENULIS</th>
        <th>PENERBIT</th>
        <th>ACTION</th>
    </tr>
<?php
$no=1;
$query = mysqli_query($koneksi, "SELECT * FROM buku");
foreach ($query as $row) {
    # code...

?>
    <tr>
        <td><?php echo $no?></td>
        <td><?php echo $row['kode_buku']?></td>
        <td><?php echo $row['judul_buku']?></td>
        <td><?php echo $row['penulis']?></td>
        <td><?php echo $row['penerbit']?></td>
        <td>
        <a href="?page=buku&hapus&id=<?php echo $row['id_buku'] ?>">
            <button name="hapus" id="hapus" class="btn btn-danger">HAPUS</button>
        </a>
        </td>
    </tr>
<?php
$no++;
}
?>
</table>

<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">KODE BUKU</label>
            <input type="text" class="form-control" name="kode_buku" placeholder="Masukkan Kode Buku" required>
         </div>
        <div class="mb-3">
            <label class="form-label">JUDUL BUKU</label>
            <input type="text" class="form-control" name="judul_buku" placeholder="Masukkan Judul Buku" required>
         </div>
         <div class="mb-3">
            <label class="form-label">PENULIS</label>
            <input type="text" class="form-control" name="penulis" placeholder="Masukkan Nama Penulis" required>
         </div>
         <div class="mb-3">
            <label class="form-label">PENERBIT</label>
            <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Nama Penerbit" required>
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="save" name="save" class="btn btn-primary">Save</button>
      </div>
    </div>
    </form>
  </div>
</div>
<br>