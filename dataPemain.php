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
    <div class="drawer">
        <p>Selamat datang, Fauzi</p>
    </div>
    <div class="main">
        <table>
            <tr>
                <th>ID Siswa</th>
                <th>Nama Pemain</th>
                <th>Posisi Pemain</th>
                <th>Kecepatan</th>
                <th>Stamina</th>
                <th>Power</th>
                <th>Action</th>
            </tr>
                <?php 
                $i=0;
			    while($row = mysqli_fetch_array($dbSsb)) {?>
                    <tr>
                        <td><?= $row["idSiswa"];?></td>
                        <td><?= $row["namaPemain"];?></td>
                        <td><?= $row["posisiPemain"];?></td>
                        <td><?= $row["kecepatan"];?></td>
                        <td><?= $row["stamina"];?></td>
                        <td><?= $row["power"];?></td>
                        <td><a href="updatePemain.php?id=<?php echo $row["idSiswa"]; ?>">Update</a></td>
                    </tr>
                <?php $i++;
                }
                ?>
        </table>
        <a href="addPemain.php"><button type="button">+ Pemain</button></a>
        
    </div>
</body>
</html>