<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&family=Figtree:wght@300&family=Quicksand&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Figtree', sans-serif;
        }

        header {
            background-color: rgb(255, 252, 249);
        }

        nav{
            display: flex;
            height: 45px;
            align-items: center;
            gap: 30px;
            margin-left: 30px;
            padding: 30px 0;
        }

        nav ul li {
            display: inline-block;
            font-size: 20px;
            margin-right: 10px;
            text-align: center;
        }

        nav ul li a{
            text-decoration: none;
            text-align: center;
            color: black;
        }
        nav ul li a:hover{
            font-weight: 5px;
            color: rgb(247, 57, 57);
        }

        h3 {
            font-size: 25px;
        }
        article {
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        article h1 {
            font-size: 35px;
        }

        article p {
            font-size: 17px;
        }
    </style>
</head>
<body>
    <?php

        include 'koneksi.php';

        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah_asal = $_POST['sekolah_asal'];
        $nohp = $_POST['nohp'];
        $email = $_POST['email'];

        $query = "INSERT INTO siswaa (nama_siswa, alamat, jenis_kelamin, agama, sekolah_asal, nohp, email) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '$nohp', '$email')";
        $done= mysqli_query($koneksi, $query);


    ?>
    <header>
        <nav>
            <h3>DIGITAL TALENT</h3>
            <ul>
                <li><a href="halaman.html">Beranda</a></li>
                <li><a href="index.php">Calon Peserta</a></li>
                <li><a href="form-input.html">Daftar Baru</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <article>
            <h1>Selamat Datang Calon Peserta Digital Talent</h1>
            <hr>
            <?php
                if($done){
            ?>
            <p>Pendaftaran Berhasil</p>
            <?php
                }else{
            ?>
            <p>Pendaftaran Tidak Berhasil</p>   
            <?php    
                }
            ?>
        </article>
    </main>
</body>
</html>