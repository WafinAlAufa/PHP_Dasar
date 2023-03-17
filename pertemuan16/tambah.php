<?php 
require 'function.php';
if(isset($_POST["submit"])){
    // cek data
    if(tambah($_POST) > 0){
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href='index.php';
        </script>
        ";
    }else{
        echo "<script>
        alert('data gagal ditambahkan!');
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
    <title>tambah data anime</title>
</head>
<body>
  <h1>tambah data anime</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
        <label for="nama">Nama:</label>    
        <input type="text" name="nama" id="nama" required></li>
        <li><label for="eps">Episode:</label>    
        <input type="number" name="eps" id="eps"></li>
        </li>
        <li><label for="studio">Studio:</label>    
        <input type="text" name="studio" id="studio"></li>
        </li>
        <li><label for="rilis">Rilis:</label>    
        <input type="text" name="rilis" id="rilis"></li>
        </li>
        <li><label for="rating">Rating:</label>    
        <input type="text" name="rating" id="rating"></li>
        </li>
        <li><label for="status">Status:</label>    
        <input type="text" name="status" id="status"></li>
        </li>
        <li><label for="gambar">Gambar:</label>    
        <input type="file" name="gambar" id="gambar"></li>
        </li>
        <li><button type="submit" id="submit" name="submit">KIRIM!</button></li>
    </ul>
  </form>  
</body>
</html>