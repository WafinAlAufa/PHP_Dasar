<?php  
// mengambil data dari file function.php
require 'function.php';
$anime = query("SELECT * FROM tb_anime");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Anime</title>
</head>
<body>
 <h1>Rekomendasi Anime</h1>

 <a href="tambah.php">Tambah data anime</a>
 <br><br>
 <table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Episode</th>
    <th>Studio</th>
    <th>Rilis</th>
    <th>Rating</th>
    <th>Status</th>
</tr>
<?php $i=1; ?>
<?php foreach($anime as $row): ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">Edit</a> |
        <a href="hapus.php?id=<?= $row["id"];?>" onclick=" return confirm('yakin');">Hapus</a>
    </td>
    <td>
        <img src="img/<?= $row["gambar"];  ?>" width="50" alt="">
    </td>
    <td><?= $row["nama"];  ?></td>
    <td><?= $row["eps"];  ?></td>
    <td><?= $row["studio"];  ?></td>
    <td><?= $row["tayang"];  ?></td>
    <td><?= $row["rating"];  ?></td>
    <td><?= $row["status"];  ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
 </table>   
</body>
</html>