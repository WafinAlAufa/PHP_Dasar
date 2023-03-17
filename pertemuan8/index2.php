<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","db_anime");

// ambil data dari table anime/query data
$result = mysqli_query($conn,"SELECT * FROM tb_anime");
// if(!$result){
//     echo mysqli_error($conn);
// }

// ambil data anime (fetch) dari object result
// mysqli_fetch_row() mengbalikan array numerik
// mysqli_fetch_assoc() Mengembalikan array assosiative
// mysqli_fetch_array() mengembalikan kedua nya assosiative dan numerik
// mysqli_fetch_object()

// $anm = mysqli_fetch_row($result);
// while($anm= mysqli_fetch_assoc($result)){
//     var_dump($anm);
// }
// $anm= mysqli_fetch_array($result);
// $anm= mysqli_fetch_object($result);

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
<?php while($row=mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">Edit</a> |
        <a href="">Hapus</a>
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
<?php endwhile; ?>
 </table>   
</body>
</html>