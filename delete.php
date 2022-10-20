<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];

$query = "DELETE FROM siswaa where id_siswa='$id_siswa'";
mysqli_query($koneksi, $query);

header('location:index.php');
?>