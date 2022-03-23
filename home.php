<?php
    require 'connect.php';
    $dbSsb = mysqli_query($conn, "SELECT * FROM pemain");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <!--https://www.figma.com/file/ldf80hsEKPnVvy4tzFG6eu/Inventory?node-id=4%3A379-->
    <header>
        <div class="header-logo">SSB</div>
        <div class="header-list">
            <ul>
                <a href="home.php"><li>Home</li></a>
                <a href="dataPemain.php"><li>Daftar Data Pemain</li></a>
                
            </ul>
        </div>
    </header>
    <div class="landingPage">
        <div class="drawer">
            <p>Selamat datang di aplikasi SSB. Aplikasi untuk menunjang proses latihan sekolah sepak bola.</p>
        </div>
        <div class="image">
            <img src="assets/home.jpeg" alt="">
        </div>
    </div>
</body>
</html>