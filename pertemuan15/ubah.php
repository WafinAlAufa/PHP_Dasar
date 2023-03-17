<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;}
require 'function.php';
// ambil data di url
$id =$_GET["id"];

// query data anime

$anm = query("SELECT * FROM tb_anime WHERE id=$id")[0];


if(isset($_POST["submit"])){
    // cek data
    if(ubah($_POST) > 0){
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href='index.php';
        </script>
        ";
    }else{
        echo "<script>
        alert('data diubah gagal!');
        document.location.href='index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data anime</title>
</head>
<body>
  <h1>ubah data anime</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?= $anm["id"];?>">
    <input type="hidden" name="gambarLama" id="gambarLama" value="<?= $anm["gambar"];?>">
    <ul>
        <li>
        <label for="nama">Nama:</label>    
        <input type="text" name="nama" id="nama" required value="<?= $anm["nama"];?>"></li>
        <li><label for="eps">Episode:</label>    
        <input type="number" name="eps" id="eps" value="<?= $anm["eps"];?>"></li>
        </li>
        <li><label for="studio">Studio:</label>    
        <input type="text" name="studio" id="studio" value="<?= $anm["studio"];?>"></li>
        </li>
        <li><label for="rilis">Rilis:</label>    
        <input type="text" name="rilis" id="rilis" value="<?= $anm["tayang"];?>"></li>
        </li>
        <li><label for="rating">Rating:</label>    
        <input type="text" name="rating" id="rating" value="<?= $anm["rating"];?>"></li>
        </li>
        <li><label for="status">Status:</label>    
        <input type="text" name="status" id="status" value="<?= $anm["status"];?>"></li>
        </li>
        <li><label for="gambar">Gambar:</label>   <br>
        <img src="img/<?=$anm["gambar"];?>" alt="" width="50"> <br>
        <input type="file" name="gambar" id="gambar" ?></li>
        </li>
        <br>
        <li><button type="submit" id="submit" name="submit">KIRIM!</button></li>
    </ul>
  </form>  
</body>
</html>