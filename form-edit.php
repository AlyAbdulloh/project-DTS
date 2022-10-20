<?php
    include 'koneksi.php';
    $id = $_GET['id_siswa'];
    $siswa = mysqli_query($koneksi, "SELECT * FROM siswaa where id_siswa='$id'");
    $row = mysqli_fetch_array($siswa);

    $agama = array('islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu');

    // fuction set active radio
    function active_radio_button($value, $input){
        $result = $value==$input?'checked':'';
        return $result;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Input</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&family=Figtree:wght@300&family=Quicksand&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Figtree', sans-serif;
        }

        header {
            background-color: rgb(255, 252, 249);
        }

        nav {
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

        nav ul li a {
            text-decoration: none;
            text-align: center;
            color: black;
        }

        nav ul li a:hover {
            font-weight: 5px;
            color: rgb(247, 57, 57);
        }

        h3 {
            font-size: 25px;
        }

        article {
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 20px;
        }

        form {
            width: 100%;
        }

        table {
            width: 100%;
            border-spacing: 30px;
        }

        input[type='text']{
            width: 100%;
            padding: 10px;
        }

        input[type='email']{
            width: 100%;
            padding: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 15px;
        }

        select:focus {
            outline: none;
        }

        input:focus{
            outline: none;
        }

        .lab {
            width: 150px;
        }

        button {
            padding: 10px;
            border: none;
            color: white;
        }

        button a {
            text-decoration: none;
            color: white;
        }

        button {
            cursor: pointer;
        }

        button[type='submit']{
            background-color: rgb(42, 109, 255);
        }

        button[type='reset']{
            background-color: rgb(255, 74, 42);
        }

        button {
            background-color: rgb(56, 211, 25);
        }

    </style>
</head>

<body>
    <header>
        <nav>
            <h3>DIGITAL TALENT</h3>
            <ul>
                <li><a href="halaman.html">Beranda</a></li>
                <li><a href="index.php">Calon Peserta</a></li>
                <li><a href="">Daftar Baru</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <article>
            <h1>Tambah Data Peserta</h1>
            <form action="edit.php" method="post">
                <table>
                <input type="hidden" value="<?php echo $row['id_siswa'];?>" name="id_siswa">
                    <tr>
                        <td class="lab">Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $row['nama_siswa']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="lab">Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="lab">Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>> Laki Laki
                        </br>
                            <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td class="lab">Agama</td>
                        <td>
                            <select name="agama" id="">
                            <?php
                                foreach($agama as $a){
                                    echo "<option value='$a' ";
                                    echo $row['agama']==$a?'selected = "selected"':'';
                                    echo ">$a</option>";
                                }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="lab">Sekolah Asal</td>
                        <td><input type="text" name="sekolah_asal" value="<?php echo $row['sekolah_asal']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="lab">No Hp</td>
                        <td><input type="text" name="nohp" value="<?php echo $row['nohp']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="lab">Email</td>
                        <td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" value="simpan">Simpan</button>
                        </td>
                    </tr>
                </table>
            </form>
        </article>
    </main>
</body>

</html>