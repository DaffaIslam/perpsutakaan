<?php 

    include "header.php";

?>

<h3>Tambah Buku</h3>

<form action="proses_tambah_buku.php" method="post">         
        nama buku :
        <input type="text" name="nama_buku" value="" class="formcontrol">
        <br><br>
        Deskripsi :
        <textarea name="deskripsi" class="form-control" rows="4">
</textarea> 
        <br><br>
        foto:
        <input type="file" name="foto" value="" class="formcontrol">
<br>
<br>
<input type="submit" name="simpan" value="Tambah buku" class="btn btn-primary">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
