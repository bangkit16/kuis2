<?php
session_start();

if (!isset($_SESSION["user"])) {
    header('Location:index.php');
}

?>
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
        <a href="logout.php">Logout</a>
        <a style="border-bottom: 3px solid #0C1251;" href="homeCRUD.php">Home</a>
    </div>
    <div class="headerr">

        <h3>Selamat Datang di Toko Buku Baca Selalu</h3>
        <div class="search-container">
            <form action="search.php" method="get">
                <input class="search" type="text" placeholder="Cari Buku ..." name="search">
                <input class="sub" type="submit" name="submit" value="Cari"></input>
            </form>
        </div>
    </div>
    <div class="container">
        <br>
        <h2>Selamat Datang <?php echo $_SESSION["user"]; ?></h2>
        <br><br>
        <a style="background-color: blue;" class="detail" href="tambah.php">Tambah Data</a>
        <br><br>
        <table>
            <tr>
                <th style="width: 150px;">Kode Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Aksi</th>
            </tr>
            <?php

            include "myconnection.php";

            $query = "SELECT * FROM buku";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {

            ?>
                    <tr>
                        <td class="first"><?php echo $row["id_buku"]; ?></td>
                        <td><?php echo $row["Judul"]; ?></td>
                        <td><?php echo $row["Pengarang"]; ?></td>
                        <td style="width: 350px;">
                            <a class="detail" href="detail.php?id=<?php echo $row["id_buku"]; ?>">Detail</a>
                            <a class="detail" href="editForm.php?id=<?php echo $row["id_buku"]; ?>" style="background-color: #47E257;">Edit</a>
                            <a class="detail" href="delete.php?id=<?php echo $row["id_buku"]; ?>" style="background-color: #FF5151;">Hapus</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </table>
    </div>
    <div class="footer">
        <p style="margin: auto;">Copyright &copy; Bangkit Maulana Caniago 2022</p>
    </div>

</body>

</html>