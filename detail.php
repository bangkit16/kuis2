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

        $idbuku = $_GET["id"];
        include "myconnection.php";
        $query = "SELECT * FROM buku WHERE id_buku = '$idbuku'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
        ?>
        <h3>Detail Buku <?php echo $row["Judul"] ?></h3>
        <br>
        <table style="width: 80%;">
            <tr>
                <td>Kode Buku </td>
                <td><?php echo $row["id_buku"] ?></td>
            </tr>
            <tr>
                <td>Judul Buku </td>
                <td><?php echo $row["Judul"] ?></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><?php echo $row["Pengarang"] ?></td>
            </tr>
            <tr>
                <td>Penerbit </td>
                <td><?php echo $row["Penerbit"] ?></td>
            </tr>
            <tr>
                <td>Deskripsi </td>
                <td><?php echo $row["Deskripsi"] ?></td>
            </tr>

        </table>
        <br><br><br>
        <a class="buton" href="homeCRUD.php">Kembali ke Home</a>
    </div>
    <div class="footer">
        <p style="margin: auto;">Copyright &copy; Bangkit Maulana Caniago 2022</p>
    </div>
</body>

</html>