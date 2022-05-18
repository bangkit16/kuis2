<?php
include "myconnection.php";

$idbuku = $_POST['id_buku'];

$judul = $_POST["Judul"];
$pengarang = $_POST["Pengarang"];
$penerbit = $_POST["Penerbit"];
$deskripsi = $_POST["Deskripsi"];

$query = "INSERT into buku(id_buku ,Judul ,Pengarang , Penerbit , Deskripsi) VALUES ('$idbuku' , '$judul' , '$pengarang' , '$penerbit','$deskripsi')";

if (mysqli_query($connect, $query)) {
    header('Location:homeCRUD.php');
} else {
    echo "gagal mengubah data <br>" . mysqli_error($connect);
    echo "<a class=" . "buton " . " href=" . "home.php" . ">Kembali ke Home</a>";
}
mysqli_close($connect);
