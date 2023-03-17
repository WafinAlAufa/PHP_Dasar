<?php  
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
// mengambil data dari file function.php
require 'function.php';
// pegination
// konfigurasi
$jumlahDataPerHalaman =3;
$result = mysqli_query($conn,"SELECT * FROM tb_anime");
$jumlahData =count(query("SELECT * FROM tb_anime"));
$jumlahHalaman =ceil( $jumlahData / $jumlahDataPerHalaman);
$halamanAktif= (isset($_GET["halaman"]))? $_GET["halaman"] :1;
// jika =2 awalan data 2
$awalData =($jumlahDataPerHalaman * $halamanAktif) -$jumlahDataPerHalaman;
$anime = query("SELECT * FROM tb_anime LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if (isset($_POST["cari"])){
    $anime = cari($_POST["keyword"]);
}
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
    <a href="logout.php">logout</a>
 <h1>Rekomendasi Anime</h1>
 <a href="tambah.php">Tambah data anime</a>
 <br><br>
 <form action="" method="post">
 <input type="text" name="keyword" id="" size="30" autofocus placeholder="Masukan Keyword pencarian" autocomplete="off">
 <button type="submit" name="cari">cari</button>   
 </form>
 <br><br>
 <!-- navigasi -->
 <?php if($halamanAktif>1): ?>
    <a href="?halaman=<?=  $halamanAktif -1;?>">&laquo;</a>
    <?php endif; ?>

 <?php for($i=1 ;$i <= $jumlahHalaman; $i++): ?>
    <?php if ($i == $halamanAktif): ?>
    <a href="?halaman=<?= $i; ?>" style="font-weight : bold; color :red;"><?= $i; ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>" ><?= $i; ?></a>
        <?php  endif;?>
    <?php endfor; ?>
    <?php if($halamanAktif<$jumlahHalaman): ?>
    <a href="?halaman=<?=  $halamanAktif +1;?>">&raquo;</a>
    <?php endif; ?>
 <br>
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
        <a href="ubah.php?id=<?= $row["id"];?>">Edit</a> |
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