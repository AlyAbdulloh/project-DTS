<?php
include 'koneksi.php';

$id_siswa = $_POST['id_siswa'];
$nama_siswa = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$query = "UPDATE  siswaa SET nama_siswa='$nama_siswa', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal', nohp='$nohp',  email='$email' WHERE id_siswa='$id_siswa'";
mysqli_query($koneksi, $query);

header("location:index.php");
?>