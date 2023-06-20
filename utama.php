<?php
session_start(); // Memulai sesi

if (!isset($_SESSION['email'])) {
    // Pengguna belum login, alihkan ke halaman login
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #1E90FF;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background-color: white;
            padding: 20px;
            z-index: 1001;
            transition: all 0.3s ease-in-out;
        }

        .side {
            margin-left: 10px;
            margin-top: 30px;
        }

        .crd {
            width: 100px;
            height: 100px;
            background-color: #D9D9D9;
            border-radius: 100%;
            margin-top: 4rem;
            margin-left: 4rem;
        }

        li a {
            margin-left: 1rem;
        }

        .satu,
        .dua {
            margin-bottom: 1rem;
        }

        object {
            margin-left: 35rem;
            width: 900px;
            height: 900px;
            margin-top: -25rem;
        }

        .card {
            width: 1738.5px;
            height: 597px;
            margin: 0;
            padding: 0;
            background-color: #F5F8FA;
            margin-top: 6rem;

        }

        h1,
        h3,
        h4 {
            color: white;
            text-align: left;
        }

        h1 {
            margin-bottom: 5px;
            margin-top: 7px;
        }

        h3 {
            font-size: 20px;
            margin-left: 1px;
        }

        .ob {
            margin-top: -27rem;
            margin-left: 20rem;
        }

        .dll {
            margin-left: 34rem;
        }

        .len img,
        .acer img,
        .hp img,
        .dll img {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .len img:hover,
        .acer img:hover,
        .hp img:hover,
        .dll img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <object data="style/Mapindo.svg" type=""></object>
    <?php
    require 'konek.php';

    if (!$server) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    $loggedInIndex = $_SESSION['email']; 

    $query = "SELECT nama, rombel, rayon, nis FROM user WHERE email = '$loggedInIndex'";
    $result = mysqli_query($server, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $rombel = $row['rombel'];
        $rayon = $row['rayon'];
        $nis = $row['nis'];

        echo '<div class="ob">';
        echo '<h3>Selamat datang.</h3>';
        echo '<h1>' . $nama . '</h1>';
        echo '<h4 style="margin-left: 2px;">' . $rombel . ' - ' . $rayon . ' - ' . $nis . '</h4>';
        echo '</div>';
    } else {
        echo "Data tidak ditemukan";
    }

    mysqli_close($server);


    ?>


    <div class="card">
        <div class="len">
            <a href="lenovo.php" style="text-decoration: none;">
                <img src="style/laptopLenovo.svg" alt="" style="margin-left : 21rem ; margin-top : 15rem ; border-radius:5px;">
                <h1 style="margin-left : 22.5rem ; color : white ; margin-top : -20.5rem ;">Laptop <br> Lenovo</h1>
            </a>

        </div>
        <div class="acer">
            <a href="acer.php" style="text-decoration: none;">
                <img src="style/acer.svg" alt="" style="margin-left : 38rem ; margin-top : -5.5rem ; border-radius:5px;">
                <h1 style="margin-left : 39.5rem ; color : white ; margin-top : -20.5rem ;">Laptop <br> Acer</h1>
            </a>
        </div>
        <div class="hp">
            <a href="hp.php" style="text-decoration: none;">
                <img src="style/hp.png" alt="" style="margin-left : 55rem ; margin-top : -5.9rem ; border-radius:5px;">
                <h1 style="margin-left : 56.5rem ; color : white ; margin-top : -20.5rem ;">HP</h1>
            </a>
        </div>
        <div class="dll">
            <a href="" style="text-decoration: none;">
                <img src="style/lainnya.svg" alt="" style="margin-left : 38rem ; margin-top : -6.2rem ; filter: brightness(60%)">

            </a>
        </div>


    </div>
    <b></b>
    <h1 style="color : #576A80 ; margin-top : -35.5rem ; margin-left : 21rem ; font-weight : bolder ; margin-bottom : 7px ;">Pinjam apa hari ini ? </h1>
    <hr width="59%" style="margin-left : 21rem ; margin-top : 70px ; border: 3px solid #717A9A;">
    <div class="sidebar">
        <div class="crd">
            <i class="fa-solid fa-user fa-4x" style="margin-left : 22px ; margin-top : 1rem ; color : grey ;"></i>
        </div>
        <nav style="margin-top : 4rem ; margin-left : 1rem ;  ;">
            <div class="satu">
                <ul>
                    <li style="margin-left : -1px ; list-style: none;"><i class="fa-solid fa-house fa-lg" style="color: #b9bfcb;"></i><a href="#" style="text-decoration:none;">Home</a> </li>
                </ul>
            </div>
            <div class="dua">
                <ul>
                    <li class="kedua" style="list-style:none;"><i class="fa-solid fa-window-maximize fa-lg" style="color: #b9bfcb;"></i><a href="" style="text-decoration:none;">Pengembalian </a></li>
                </ul>
            </div>
            <div class="tiga">
                <ul>
                    <li style="margin-left : 2px ; list-style:none;"><i class="fa-solid fa-phone fa-lg" style="color: #b9bfcb;"></i><a href="cs.php" style="text-decoration:none;">Contact</a></i></li>
                </ul>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <a href="logout.php" style="text-decoration:none;">Logout</a>
        </nav>
    </div>
</body>

</html>