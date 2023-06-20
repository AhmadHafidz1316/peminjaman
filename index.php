<?php
session_start(); // Memulai sesi

if (isset($_SESSION['email'])) {
    // Pengguna sudah login, alihkan ke halaman utama
    header("Location: utama.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class="background">
        <object data="style/Mapindo.svg"></object>
    </div>

    <div class="leftbottom">
        <object data="style/leftbottom.svg"></object>
    </div>

    <div class="topright">
        <object data="style/topright.svg"></object>
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded" style="font-family: 'PP Pangram Sans', sans-serif;">
        <div class="card">
            <div class="tulisan">
                <object data="style/tulisan.svg"></object>
            </div>
            <div class="input" style="margin: 300px auto 0; width: 350px; height: 200px;">
                <form action="#" method="POST">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder="  @gmail.com " style="width: 100%; height: 50px; background-color: #DCDCDC; border-radius: 5px; border: none;" required>
                    <br><br>
                    <label for="email">Password</label><br>
                    <input type="password" name="password" placeholder="  " style="width: 100%; height: 50px; background-color: #DCDCDC; border-radius: 5px; border: none;" required>
                    <br><br>
                    <button type="submit" class="btn btn-secondary"  name="kirim" style="width: 150px">
                        <center>Masuk</center>
                    </button>
                    <br><br><br>
                </form>
                Hubungi <a href="csAwal.php" style="text-decoration:none;">CS</a> Bila Bermasalah
                <br>
                Bila belum memiliki akun <a href="regist.php" style="text-decoration:none;">Klik disini</a>
            </div>
        </div>
        <div class="card-body"></div>
    </div>

    <div class="welend">
        WeLend<br>
        <h1>Peminjaman Menjadi Lebih Mudah</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>

<?php

require 'konek.php';
if(isset($_POST['kirim'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($server, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        echo "<script>
            alert('Selamat Datang');
            document.location.href = 'utama.php'; 
        </script>";
    } else {
        echo "<script>alert('Username atau Password salah !!!');</script>";
    }

    mysqli_close($conn);
}
?>
