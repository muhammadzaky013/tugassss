<?php
include("koneksi.php");
isset($_GET['simpan']);
$id = $_GET['id'];
$sql= "DELETE FROM tb_peserta where id=$id";
$query = mysqli_query($db, $sql);
$sql= "DELETE FROM tb_jurusan where jurusan_id=$id";
$query = mysqli_query($db, $sql);

if($query){
    header('Location:tampil.php?status=sukses');
}else{

    die("akses dilarang");
}
?>
<!-- zaky coy -->