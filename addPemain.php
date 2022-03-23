<?php
    $hostname     = "localhost";
    $username     = "root";
    $password     = "";
    $databasename = "ssb.0.0";

    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $databasename);

    // Check connection
    if (mysqli_connect_errno())
    {
        die("Connection failed: " . $conn->connect_error);
    }
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
    <style>
    </style>
    <header>
        <div class="header-logo">SSB</div>
        <div class="header-list">
            <ul>
                <a href="home.php"><li>Home</li></a>
                <a href="dataPemain.php"><li>Daftar Data Pemain</li></a>
                
            </ul>
        </div>
    </header>
    <main>
        <div class="inputPemain">
            <form action="" method="post">
                <label for="id">ID Siswa :</label><br>
                <input class="removeSpinner" type="number" min="1" id="idSiswa" name="idSiswa"><br>
                <label for="">Nama Pemain :</label><br>
                <input type="text" id="namaPemain" name="namaPemain"><br>
                <label for="">Posisi Pemain :</label><br>
                <input type="text" id="posisiPemain" name="posisiPemain"><br>
                <label for="">Kecepatan :</label><br>
                <input type="text" id="kecepatan" name="kecepatan"><br>
                <label for="">Stamina :</label><br>
                <input type="text" id="stamina" name="stamina"><br>
                <label for="">Power :</label><br>
                <input type="text" id="power" name="power"><br>
                <button type="submit" id="submit" name="submit">Submit</button>
            </form>
            <?php
                if (isset($_POST['submit'])) {
                    $idSiswa = $_POST['idSiswa'];
                    $namaPemain = $_POST['namaPemain'];
                    $posisiPemain = $_POST['posisiPemain'];
                    $kecepatan = $_POST['kecepatan'];
                    $stamina = $_POST['stamina'];
                    $power = $_POST['power'];
                    $newData = "INSERT INTO pemain (idSiswa, namaPemain, posisiPemain, kecepatan, stamina, power)
                    VALUES ('$idSiswa', '$namaPemain', '$posisiPemain', '$kecepatan', '$stamina', '$power')";
                
                    if ($conn->query($newData) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $newData . "<br>" . $conn->error;
                    }
                }
                $conn->close();
            ?>
        </div>
    </main>
</body>
</html>