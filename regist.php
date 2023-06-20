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
            <div class="input" style="margin: 40px auto 0; width: 350px; height: 200px;">
                <form action="#" method="POST">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder=" Example : ahmad@gmail.com " style="width: 100%; height: 50px; background-color: #DCDCDC; border-radius: 5px; border: none;" required>
                    <br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" placeholder=" Example : 123 " style="width: 100%; height: 50px; background-color: #DCDCDC; border-radius: 5px; border: none;" required>
                    <br>
                    <label for="nama">Nama</label><br>
                    <input type="text" name="nama" placeholder=" Example : Ahmad Hafidz Rino Putra " style="width: 100%; height: 50px; background-color: #DCDCDC; border-radius: 5px; border: none;" required>
                    <br>
                    <label for="rombel">Rombel</label><br>
                    <input type="text" name="rombel" placeholder=" Example : PPLG X4 " style="width: 100%; height: 50px; background-color: #DCDCDC; border-radius: 5px; border: none;" required>
                    <br>
                    <label for="rayon">Rayon</label><br>
                    <input type="text" name="rayon" placeholder=" Example : WIKRAMA-3 " style="width: 100%; height: 50px; background-color: #DCDCDC; border-radius: 5px; border: none;" required>
                    <br>
                    <label for="nis">NIS</label><br>
                    <input type="text" name="nis" placeholder=" Example : 12208874 " style="width: 100%; height: 50px; background-color: #DCDCDC; border-radius: 5px; border: none;" required>
                    <br><br>
                    <button type="submit" class="btn btn-secondary"  name="kirim" style="width: 150px">
                        <center>Masuk</center>
                    </button>
                    <br><br><br>
                </form>
                Hubungi <a href="csAwal.php" style="text-decoration:none;">CS</a> Bila Bermasalah
                <br><br>
                <a href="index.php" style="text-decoration:none">Login</a>
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
    $nama = $_POST['nama'];
    $rombel = $_POST['rombel'];
    $rayon = $_POST['rayon'];
    $nis = $_POST['nis'];

    $sql = "INSERT INTO user (email, password, nama, rombel, rayon, nis) 
            VALUES ('$email', '$password', '$nama', '$rombel', '$rayon', '$nis')";
    
    if (mysqli_query($server, $sql)) {
        echo "<script>
        alert('Silahkan Login');
        document.location.href = 'index.php'; 
    </script>";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }

    mysqli_close($conn);
}
?>
