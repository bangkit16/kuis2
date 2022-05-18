<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "tokobuku";

$connect = mysqli_connect($hostname, $username, $password, $database);

if ($connect) {
    echo "Koneksi ke MySQL berhasil <br>";
} else {
    echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
}

$query = "CREATE TABLE buku(
    id_buku VARCHAR(10) PRIMARY KEY,
    Judul VARCHAR(200) NOT NULL,
    Pengarang VARCHAR(100) NOT NULL,
    Penerbit VARCHAR(50),
    Deskripsi TEXT
)";

if (mysqli_query($connect, $query)) {
    echo "Tabel buku berhasil dibuat";
} else {
    echo "Tabel buku gagal dibuat <br>" . mysqli_error($connect);
}
mysqli_close($connect);
