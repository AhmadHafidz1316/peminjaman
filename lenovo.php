<?php
    require 'konek.php';
    $sql= "SELECT * FROM lenovo";
    $datas = $server->query($sql);
    $sql = "SELECT * FROM lenovo WHERE status = 'tersedia'";
    $result = mysqli_query($server, $sql);
    $jumlahA = mysqli_num_rows($result);
    $sqli = "SELECT * FROM lenovo WHERE status = 'dipinjam'";
    $resul = mysqli_query($server, $sqli);
    $jumlahI = mysqli_num_rows($resul);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.cdnfonts.com/css/apercu-movistar" rel="stylesheet">

</head>
<style>
    *{
    margin : 0 ;
    padding : 0 ;
}


h1{
    text-align: center;
}


nav ul li{
    list-style: none;
    display: inline-block;
}

nav ul li a{
    text-decoration: none;
}
.home{
    margin-bottom : 10px ;
}
.satu, .dua , .tiga{
    margin-left: 5px;
    color: black;
}
.vector{
    margin-bottom : 10px ;
}
.contact{
    margin-bottom : 10px ;
}

*{
    margin : 0 ;
    padding : 0 ;
}

body{
    font-family: 'Montserrat' , sans-serif ;
    background-color : #1E90FF ;
    margin: 0 ;
    padding : 0 ;
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

.side{
    margin-left: 10px;
    margin-top : 30px ;
}

.crd{
    width : 100px ;
    height : 100px ;
    background-color : #D9D9D9 ;
    border-radius: 100% ;
    margin-top : 4rem ;
    margin-left : 4rem ;
} 
li a    {
    margin-left : 1rem ;
}
.satu , .dua{
    margin-bottom : 1rem ;
}
object{
    margin-left : 18rem ;
    width : 900px ;
    height : 900px ;
    margin-top : -25rem ;
}

h1 , h3 , h4{
    color : white ;
    text-align : left ;
}
h1{
    margin-bottom : 5px ;
    margin-top : 7px ;
}
h3{
    font-size : 20px ;
    margin-left : 1px ;
}

.ob{
    margin-top : -27rem ;
    margin-left : 28rem ;
}

.dll{
    margin-left : 34rem ;
}
.ava{
position: absolute;
width: 124.3px;
height: 107.96px;
margin-left : 40rem ;
top: 114px;

background: #7FE9D6;
box-shadow: 0px 10px 30px rgba(75, 72, 233, 0.1);
border-radius: 8px;
}
.use{
position: absolute;
width: 124.3px;
height: 107.96px;
margin-left : 50rem ;
top: 114px;

background: #EA7A7A;
box-shadow: 0px 10px 30px rgba(75, 72, 233, 0.1);
border-radius: 8px;
}
.un{
position: absolute;
width: 124.3px;
height: 107.96px;
margin-left : 60rem ;
top: 114px;

background: #E1E5EE;
box-shadow: 0px 10px 30px rgba(75, 72, 233, 0.1);
border-radius: 8px;
}

.ob h4{
    margin-top : 5rem ; 
    text-align : center ;
    color : #446167 ;
}
    
    .kanan{
        margin-left: 250px;
        margin-top: -505px;
        color: white;
        font-family: 'Apercu Movistar', sans-serif;
        margin-right: 50px;
    }
    .judul h1{
        font-size: 60px;
        margin-top: -110px;
        padding-top: -50px;
        padding-bottom: 20px;
    }
    .laptop button {
        background: #FFFFFF;
        box-shadow: 0px 10px 30px rgba(0, 163, 255, 0.05), 0px 2px 40px rgba(0, 117, 255, 0.1);
        border-radius: 8px; 
        width: 150px; 
        height: 150px;
        margin-left: 25px;
        margin-right: 25px;
        margin-bottom: 50px;   
        justify-content: space-around;
    }
    .laptop {
        background: white;
        width: 1070px;
        margin-left: -50px;
        padding-top: 30px;
    }
    .laptop p {
        color: #787878;
        margin-top: -7px; 
        margin-bottom: 7px;
        font-size: 15px;
    }
    .laptop i {
        padding-top : -70px;
        font-size: 60px;
        color: #787878;
    }
    .button {
        margin-right: 30px;
        border-color: white;
        margin-right: 100px;
        width: 190px;
        height:171px;
        margin-left: 30px;
    }
    .laptop button {
        width: 190px;
        height:171px;
        margin-bottom: 15px;
        margin-left: 30px;
    }
    .turun {
        margin-top: 40px;
        margin-left: -60px;
    }
    .modal-content h1 {
        color: #787878;
    }
    .avaible {
      position: absolute;
      width: 124.3px;
      height: 107.96px;
      left: calc(50% - 124.3px/2 + 222.15px);
      top: 114px;
      padding-top: 20px;
      /* background: #7FE9D6; */
      box-shadow: 0px 10px 30px rgba(75, 72, 233, 0.1);
      border-radius: 8px;
    }
    .info h1 h6 {
        margin-bottom: -60px;
    }
    .in-use {
      position: absolute;
      width: 124.3px;
      height: 107.96px;
      left: calc(50% - 124.3px/2 + 359.56px);
      top: 115.87px;
      padding-top: 17px;
      /* background: #EA7A7A; */
      border-radius: 8px;
    }

    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
    @import url('https://fonts.cdnfonts.com/css/apercu-movistar');
</style>
<body>
<div class="sidebar">
        <div class="crd">
            <img src="style/profile.svg" style="margin-left : 7px ; color : grey ;"></i>
        </div>
        <nav style="margin-top : 4rem ; margin-left : 1rem ;  ;">
            <div class="satu">
                <ul>
                    <li style="margin-left : -1px ; list-style: none;"><img src="style/rumah.svg"><a href="utama.php" style="text-decoration:none;">Home</a> </li>
                </ul>
            </div>
            <div class="dua">
                <ul>
                    <li class="kedua" style="list-style:none;"><img src="style/kotakHitam.svg"></i></i><a href="" style="text-decoration:none;">Pengembalian </a></li>
                </ul>
            </div>
            <div class="tiga">
                <ul>
                    <li style="margin-left : 2px ; list-style:none;"><img src="style/teleponHitam.svg"></i><a href="cs.php" style="text-decoration:none;">Contact</a></i></li>
                </ul>
            </div>
        </nav>
    </div>  
    
    <object data="style/Mapindo.svg" type=""></object>
    <div class="ob">
        <h1 style ="font-size : 70px ; margin-top : 4rem ; margin-left : 3rem ;">LENOVO</h1>
            <div class="ava">
                <h1 style = "margin-left : 2.8rem ; font-size : 50px ; margin-top : 1.2rem ; color : #446167 ;"><?php echo$jumlahA ?></h1>
                <h6 style = "margin-top : -0.3rem ;text-align : center ;">Available</h6>
            </div>
            <div class="use">
                <h1 style = "margin-left : 2.8rem ; font-size : 50px ; margin-top : 1.2rem ; color : #446167 ;"><?php echo $jumlahI ?> </h1>
                <h6 style = "margin-top : -0.3rem ;text-align : center ;">In-use</h6>
            </div>


        <div class="laptop">
        <?php foreach( $datas as $data) { ?>
            <button class ="button" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-laptop"></i>
                <p>no laptop: <?= $data["nomor"]?></p>
                <p>status: <?= $data["status"]?></p>
            </button>
        <?php }?>
        </div>
    </div>

<!-- Modal -->
<?php 

?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" data-bs-dismiss="modal"><i class="bi bi-arrow-90deg-left" data-bs-dismiss="modal"></i></button>
        <h1 class="modal-title fs-5" id="exampleModalLabel">Silahkan isi form terlebih dulu</h1>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
        <h3>Lenovo</h3>
        <label>No Laptop</label> <br>
        <input name="nomor" class="form-control" type="text" placeholder="input nomor laptop" aria-label="default input example">
        <br><br>
        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<?php 
    if(isset($_POST['submit'])) { 
        $barang = "Laptop Lenovo";
        $nomor = $_POST['nomor'];
        $status = "butuh konfimasi";
        $sql = "INSERT INTO db_barang (barang, no, status) VALUES ('$barang',  '$nomor',  '$status')";
        $result = mysqli_query($server, $sql);
        if ($result) {
            $sql = "UPDATE lenovo SET status = 'dipinjam' WHERE nomor = '$nomor'";
            $result = mysqli_query($server, $sql);
        }
    }
?>
<script>
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
</body>
</html>