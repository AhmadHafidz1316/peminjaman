<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="kontak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
    <style>
         *{
    margin : 0 ;
    padding : 0 ;
}

body{
    background-color: #1E90FF;
}

.card {
position: absolute;
width: 800px;
height: 490px;
/* left: 282px;
top: 171px; */
margin-left : 36rem ;
margin-top : 9rem ;

background: linear-gradient(101.88deg, rgba(255, 255, 255, 0.56) 4.05%, rgba(255, 255, 255, 0.56) 48.89%, rgba(255, 255, 255, 0.56) 98.35%);
box-shadow: 0px 4px 30px rgba(23, 41, 53, 0.25);
border-radius: 9px;
}

.ch{
    position: absolute;
width: 450px;
height: 130px;
margin-left : 3rem ;
margin-top : -8rem ;
background: #FFFFFF;
box-shadow: 0px 2px 27px rgba(42, 60, 72, 0.13);
border-radius: 4px;
}

::placeholder{
    color : #787878 ;
}

.button {
    font-family: monospace;
    background-color: #364f7a;
    color: #3b82f6;
    border: none;
    border-radius: 5px;
    margin-left : 1rem ;
    margin-top : -6rem ;
    width: 100px;
    height: 30px;
    transition: .3s;
  }
  
  .button:hover {
    background-color: #3b82f6;
    box-shadow: 0 0 0 5px #3b83f65f;
    color: #fff;
  }
    </style>
</head>
<body>
<object data="style/Mapindo.svg" style=" position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index:-1;"></object>
    <div class="card">
    <a href="index.php"><i class="fa-solid fa-angles-left" style = "color : #5484A8 ; margin-left : 7px ; margin-top : 5px ;"></i></a>
        <h1 style = "text-align : left ; margin-left : 3rem ; margin-top : 3rem ; color : #585E97 ;">Kontak CS Untuk Informasi <br> lebih lanjut</h1>
        <hr width="57%" style = "margin-left : 3rem ; margin-top : 10px ; border: 2px solid #717A9A;"> 
        <h3 style = "margin-top : 3rem ; margin-left : 3rem ; color : #4D6D8A ;">Bila memiliki masalah, keluhan, <br>pertanyaan. Silahkan<br> hubungi nomer berikut</h3>
        <img src="style/Logoorang.svg" alt="" style = "width : 250px ; margin-left : 33rem ; margin-top : -13rem ;">
        <div class="ch">
            <h3 style = "margin-left : 2rem ; margin-top : 2rem ; color : #787878 ;">Hubungi CS</h3>
            <form action="whatsapp://send" method="GET">
  <input style="margin-left: 2rem; margin-top: 2rem; border: none; outline: none; border-bottom: 1px solid #ccc;" type="text" name="phone" value="+6283807102775" readonly>
  <input class="button" type="submit" value="HUBUNGI">
</form>

           
        </div>
    </div>
</body>
</html>