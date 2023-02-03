<!DOCTYPE html>
<html lang="en">
<head>  
<title>From Peserta</title>
<link rel="stylesheet" href="background.css">
<link rel="icon" type="icon/x-icon" href="hitler.jpg">
</head>
<body>
<center>
    <header>
    <h1>Tambah Peserta</h1>
</header>
    <form action="proses_tambahcoy.php" method="POST">
        <form>
        <table border ="5">
                <tr>
                    <td><label for="nama">Nama  : </label></td>
                    <td><input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td><label for="gender">Jenis Kelamin : </label></td>
                    <td><label><input type="radio" name="gender" value="L"/> Laki - laki </label>
                    <label><input type="radio" name="gender" value="P"/> Perempuan </label></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan : </label></td>
                    <td><input type="text" name="jurusan" /></td>
                </tr>
                <tr>
                    <td><label for="kapasitas">Kapasitas : </label></td>
                    <td><input type="text" name="kapasitas" /></td>
                </tr>
                <tr>
                    <td><label for="terisi">Terisi : </label></td>
                    <td><input type="text" name="terisi" /></td>
                </tr>
                <tr>
                    <td><label for="asal_sekolah">Asal Sekolah : </label></td>
                    <td><input type="text" name="asal_sekolah" /></td>
                </tr>
                <tr>
                    <td><label for="tempat_lahir">Tempat Lahir : </label></td>
                    <td><input name="tempat_lahir" type="text"/></td>  
                </tr>
                <tr>
                    <td><label for="tanggal_lahir">Tanggal Lahir : </label></td>
                    <td><input type="date" name="tanggal_lahir" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Tambah" name="tambah" /></td>
                </tr>
</center>
</table>
<form>
</body>
</html>
<!-- zaky coy -->