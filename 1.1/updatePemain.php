<?php
include_once 'connect.php';
if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE pemain set idSiswa='" . $_POST['idSiswa'] . "', namaPemain='" . $_POST['namaPemain'] . "', posisiPemain='" . $_POST['posisiPemain'] . "', kecepatan='" . $_POST['kecepatan'] . "' ,stamina='" . $_POST['stamina'] . "' ,power='" . $_POST['power'] . "' WHERE idSiswa='" . $_POST['idSiswa'] . "'");
    $message = "Record";
}
if (isset($result)) {
    $result = [];
    $result = mysqli_query($conn, "SELECT * FROM pemain WHERE id");
    $row = mysqli_fetch_array($result);
}
?>
<html>
<!-- https://www.studentstutorial.com/php/php-mysql-data-update.php#:~:text=Update%20Data%20in%20MySQL%20Using%20PHP.%20To%20update,retrieve%20data%20from%20database%20with%20a%20update%20option.?msclkid=bad9ace2a84c11ec872ab271d6acde5f -->
<head>
    <title>Update Employee Data</title>
</head>

<body>
    <form name="frmUser" method="post" action="">
        <div><?php if (isset($message)) {
                    echo $message;
                } ?>
        </div>
        <div style="padding-bottom:5px;">
            <!-- <a href="retrieve.php">Employee List</a> -->
        </div>
        ID Siswa : <br>
        <input type="hidden" name="idSiswa" class="txtField" value="<?php echo $row[0]; ?>">
        <input type="number" name="idSiswa" value="<?php echo $row['idSiswa']; ?>">
        <br>
        Nama Pemain : <br>
        <input type="text" name="namaPemain" class="txtField" value="<?php echo $row['namaPemain']; ?>">
        <br>
        Posisi Pemain :<br>
        <input type="text" name="posisiPemain" class="txtField" value="<?php echo $row['posisiPemain']; ?>">
        <br>
        Kecepatan :<br>
        <input type="text" name="kecepatan" class="txtField" value="<?php echo $row['kecepatan']; ?>">
        <br>
        Stamina :<br>
        <input type="text" name="stamina" class="txtField" value="<?php echo $row['stamina']; ?>">
        <br>
        Power :<br>
        <input type="text" name="power" class="txtField" value="<?php echo $row['power']; ?>">
        
        <input type="submit" name="submit" value="Submit" class="buttom">
    </form>
</body>

</html>