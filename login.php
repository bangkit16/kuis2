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
        <a style="border-bottom: 3px solid #0C1251;" href="login.php">Login</a>
        <a href="homeCRUD.php">Home</a>
    </div>
    <div class="headerr">

        <h3>Selamat Datang di Toko Buku Baca Selalu</h3>
    </div>
    <div class="container">
        <br>
        <?php
        if (isset($_GET["error"])) {
            $error = $_GET["error"];
        } else {
            $error = "";
        }

        $message = "";
        if ($error == "gagal") {
            $message = "Gagal login, silahkan coba kembali";
        }
        ?>
        <p style="color: red;"><?php echo $message; ?></p>
        <form action="prosesLogin.php" method="POST">
            <h3 style="margin: auto;">Login</h3>
            <br>
            <table style="width: 50%; width: 300px;">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input class="buton" type="submit" name="login" value="Login"></td>
                </tr>
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