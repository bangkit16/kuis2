<!DOCTYPE html>
<html>

<head>
    <title>Toko Buku Baca Selalu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&family=Sora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">

        <h1>Toko Buku Baca Selalu</h1>
        <a href="login.php">Login</a>
        <a href="homeCRUD.php">Home</a>
    </div>
    <div class="headerr">

        <h3>Selamat Datang di Toko Buku Baca Selalu</h3>
    </div>
    <div class="container">
        <br>
        <?php

        $judul = $_GET["search"];
        include "myconnection.php"; ?>
        <h3>Hasil Pencarian Buku <?php echo $judul ?></h3>
        <br>
        <table>
            <tr>
                <th style="width: 150px;">Kode Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Aksi</th>
            </tr>
            <?php

            $query = "SELECT * FROM buku WHERE Judul LIKE '%$judul%'";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {

            ?>
                    <tr>
                        <td class="first"><?php echo $row["id_buku"]; ?></td>
                        <td><?php echo $row["Judul"]; ?></td>
                        <td><?php echo $row["Pengarang"]; ?></td>
                        <td>
                            <a class="detail" href="detail.php?id=<?php echo $row["id_buku"]; ?>">Detail</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </table>
        <br><br><br>
        <a class="buton" href="home.php">Kembali ke Home</a>
    </div>
    <div class="footer">
        <p style="margin: auto;">Copyright &copy; Bangkit Maulana Caniago 2022</p>
    </div>
</body>

</html>