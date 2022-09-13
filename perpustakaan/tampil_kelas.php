<?php include 'Navbardata.php' ?>

<h3>Daftar Kelas</h3>
<table class="table table-hover table-striped">
<thead>
    <tr>
        <th>No</th>
        <th>Kelas</th>
        <th>Kelompok</th>
        <th>Ubah</th>
        <th>Hapus</th>
       
    </tr>
</thead>

        
<tbody>
    <?php 
    include "koneksi.php";
    $qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");

    $no=0;
    while($data_kelas=mysqli_fetch_array($qry_siswa)){

    $no++;
    ?>

<tr>
                    <td><?= $no ?></td>
                    <td><?= $data_kelas['nama_kelas'] ?></td>
                    <td><?= $data_kelas['kelompok'] ?></td>
             
                    <td><a href="ubah_siswa.php?id_siswa=<?= $data_siswa['id_kelas'] ?>" class="btn btn-success">Ubah</a></td>
                    <td><a href="hapus.php?id_siswa=<?= $data_siswa['id_kelas'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
            <?php 

            }

            ?>

        </tbody>

    </table>

    <a href="tambah_siswa.php"> <button type="button" class="btn btn-dark"> Add Siswa </button></a>
    <a href="tambah_kelas.php"> <button type="button" class="btn btn-dark"> Add Kelas </button></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>