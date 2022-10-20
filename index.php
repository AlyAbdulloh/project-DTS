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

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th{
            background-color: #333;
            color: white;
        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even){
            background-color: #f2f2f2;
        }

        .tindakan{
            display: flex;
            gap: 5px;
        }

        td a{
            text-decoration: none;
            padding: 5px;
            background-color: orange;
            border-radius: 8px;
            color: #fff;
            display: block;
            text-align: center;
        }

        td .delete {
            background-color: red;
        }

        button{
            width: 100px;
            padding: 10px;
            color: white;
            background-color: red;
            text-align: center;
            outline: none;
            border-radius: 5px;
            border: none;
        }

        button:hover{
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h3>DIGITAL TALENT</h3>
            <ul>
                <li><a href="halaman.html">Beranda</a></li>
                <li><a href="">Calon Peserta</a></li>
                <li><a href="form-input.html">Daftar Baru</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <article>
            <h1>Pendaftar</h1>
            <hr>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Peserta</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah asal</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Tindakan</th>
                </tr>
                <?php
                    include 'koneksi.php';

                    $query = "SELECT * FROM siswaa";
                    $result = mysqli_query($koneksi, $query);

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row['id_siswa'] ?></td>
                    <td><?php echo $row['nama_siswa'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['jenis_kelamin'] ?></td>
                    <td><?php echo $row['agama'] ?></td>
                    <td><?php echo $row['sekolah_asal'] ?></td>
                    <td><?php echo $row['nohp'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td class="tindakan">
                        <a href="form-edit.php?id_siswa=<?php echo $row['id_siswa']; ?>">Edit</a>
                        <a href="delete.php?id_siswa=<?php echo $row['id_siswa']; ?>" class="delete">Delete</a>
                    </td>
                </tr>
                <?php
                        }
                    }else{
                        echo "0 result";
                    }
                ?>
            </table>
            <button onclick="window.print()">Print to PDF</button>
        </article>
    </main>
</body>
</html>