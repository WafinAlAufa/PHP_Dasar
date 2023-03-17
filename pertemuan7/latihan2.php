<?php 
// cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) || 
!isset($_GET["eps"]) ){
    // redirect
    header("Location:index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anime</title>
</head>
<body>
   <ul>
    <li><img src="../pertemuan6/img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["eps"]; ?></li>
    <li><?= $_GET["tayang"]; ?></li>
    <li><?= $_GET["studio"]; ?></li>
    <li><?= $_GET["rating"]; ?></li>
    <li><?= $_GET["status"]; ?></li>
</ul> 
<a href="index.php">Kembali</a>
</body>
</html>