<?php
include("koneksi.php");
if(isset($_POST['edit'])){
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $gender = $_POST['gender'];
 $asal_sekolah = $_POST['asal_sekolah'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $tanggal_lahir = $_POST['tanggal_lahir'];
 $jurusan = $_POST['jurusan'];
 $kapasitas = $_POST['kapasitas'];
 $terisi = $_POST['terisi'];

$sql="UPDATE tb_jurusan SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE jurusan_id='$id'";
$query= mysqli_query($db,$sql);
$sql="UPDATE tb_peserta SET nama='$nama', gender='$gender', asal_sekolah='$asal_sekolah', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' WHERE id='$id'";
$query= mysqli_query($db,$sql);



 if($query){
    header('location:tampil.php');
}else{
    die('gagal mengedit');
}
}
?>
<!-- zaky coy -->