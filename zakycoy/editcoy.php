<?php

include("koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: tampil.php');
}



$id = $_GET['id'];
$sql = "SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id = tb_jurusan.jurusan_id WHERE tb_peserta.id='$id'";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>  
<title>From Edit Peserta</title>
<link rel="stylesheet" href="background.css">
</head>
<body>
<center>
    <header>
    <h1>Edit Peserta</h1>
</header>
    <form action="proses_editcoy.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']?>" />
        <form>
        <table border ="5">
                <tr>
                    <td><label for="nama">Nama  : </label></td>
                    <td><input type="text" name="nama" value="<?php echo $data['nama']?>"/></td>
                </tr>
                <tr>
                    <td><label for="gender">Jenis Kelamin : </label></td>
                    <td><label><input type="radio" name="gender" value="L"/> Laki - laki </label>
                    <label><input type="radio" name="gender" value="P"/> Perempuan </label></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan : </label></td>
                    <td><input type="text" name="jurusan" value="<?php echo $data['jurusan']?>"/></td>
                </tr>
                <tr>
                    <td><label for="kapasitas">Kapasitas : </label></td>
                    <td><input type="text" name="kapasitas" value="<?php echo $data['kapasitas']?>"/></td>
                </tr>
                <tr>
                    <td><label for="terisi">Terisi : </label></td>
                    <td><input type="text" name="terisi" value="<?php echo $data['terisi']?>"/></td>
                </tr>
                <tr>
                    <td><label for="asal_sekolah">Asal Sekolah : </label></td>
                    <td><input type="text" name="asal_sekolah" value="<?php echo $data['asal_sekolah']?>"/></td>
                </tr>
                <tr>
                    <td><label for="tempat_lahir">Tempat Lahir : </label></td>
                    <td><input name="tempat_lahir" type="text"value="<?php echo $data['tempat_lahir']?>"/></td>  
                </tr>
                <tr>
                    <td><label for="tanggal_lahir">Tanggal Lahir : </label></td>
                    <td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']?>"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="edit" name="edit" /></td>
                </tr>
</center>
</table>
<form>
</body>
</html>
<!-- zaky coy -->