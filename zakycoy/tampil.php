<!DOCTYPE html>
<html>
<head>
 <title>TUGAS LATIHAN</title>
 <link rel="stylesheet" href="background.css">
 <link rel="icon" type="icon/x-icon" href="hitler.jpg">
</head>
<body>
  <center> 
          <h1>DATA PESERTA</h1>
 <table border="1">
  <tr>
   <td>No.</td>
   <td>Nama</td>
   <td>Jurusan</td>
   <td>Gender</td>
   <td>Asal Sekolah</td>
   <td>Tempat Lahir</td>
   <td>Tanggal Lahir</td>
   <td>Kapasitas</td>
   <td>Terisi</td>
   <td>Aksi</td>
  </tr>
  
  <?php
  include("koneksi.php");
  $query = mysqli_query($db, "SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id =
  tb_jurusan.jurusan_id");
  $no = 1;
  foreach ($query as $row):
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td><?= $row['gender']; ?></td>
        <td><?= $row['asal_sekolah']; ?></td>
        <td><?= $row['tempat_lahir']; ?></td>
        <td><?= $row['tanggal_lahir']; ?></td>
        <td><?= $row['kapasitas']; ?></td>
        <td><?= $row['terisi']; ?></td>
        <td>
        <a href="editcoy.php?id=<?= $row['id'];?>">Edit</a>
          <a href="hapuscoy.php?id=<?= $row['id'];?>">| Hapus</a>

  <?php endforeach; ?>

  </center>
  </table>
  </body><p>
    <tr>
  <td><h4><a href=tambah.php>TAMBAH</a></h4></td>
  <td></td><h4><a href=menu.php>MENU</a></h4>
  </P>
</tr>
  </html>
  <!-- zaky coy -->