<?php
include "myconnection.php";

$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id_buku='$id'";

if (mysqli_query($connect, $query)) {
    header('Location:homeCRUD.php');
} else {
    echo "Data gagal di hapus <br>" . mysqli_error($connect);
    echo "<a class=" . "buton " . " href=" . "home.php" . ">Kembali ke Home</a>";
}
mysqli_close($connect);
