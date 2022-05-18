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
        <a href="homeCRUD.php">Home</a>
    </div>
    <div class="headerr">

        <h3>Selamat Datang di Toko Buku Baca Selalu</h3>
    </div>
    <div class="container">
        <?php
        include "myconnection.php";

        $id = $_GET['id'];
        $query = "SELECT * FROM buku WHERE id_buku='$id'";
        $result = mysqli_query($connect, $query);
        ?>
        <form action="editProcess.php" method="post" enctype="multipart/form-data">
            <table style="width:60% ;">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <tr>
                        <td>Kode Buku </td>
                        <td><input style="width: 100%;" type="text" name="id_buku" value="<?php echo $row['id_buku']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td><input style="width: 100%;" type="text" name="Judul" value="<?php echo $row['Judul']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td><input style="width: 100%;" type="text" name="Pengarang" value="<?php echo $row['Pengarang']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><input style="width: 100%;" type="text" name="Penerbit" value="<?php echo $row['Penerbit']; ?>" /></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>
                            <textarea style="width: 100%;" name="Deskripsi" cols="30" rows="10"><?php echo $row['Deskripsi']; ?></textarea>
                        </td>
                    </tr>
                    <td><input style="border: none;" class="detail" type="submit" name="save" value="Simpan" /></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </form>
        <br><br><br>
        <a class="buton" href="homeCRUD.php">Kembali ke Home</a>
    </div>
    <div class="footer">
        <p style="margin: auto;">Copyright &copy; Bangkit Maulana Caniago 2022</p>
    </div>
</body>

</html>