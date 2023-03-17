<?php 
// variable scope/lingkup variabel
// $x =10;
// function tampilX(){
//     global $x;
//     echo $x;
// }
// tampilX();

// super global
// variabel global milik php
// merupakan  array asossiative
// echo $_SERVER["SERVER_NAME"];

// $GET
$anime=[
    [
    "nama"=>"Kono Subarashii Sekai ni Shukufuku wo!",
    "eps"=>"10",
    "tayang"=>" Jan 14, 2016 to Mar 17, 2016",
    "studio"=>" Studio Deen",
    "gambar"=>"back.png",
    "status"=>"Finished Airing",
    "rating"=>" PG-13 - Teens 13 or older"
    ],
    ["nama"=>"Chainsaw Man",
    "eps"=>"12",
    "tayang"=>"Oct 12, 2022 to Dec 28, 2022",
    "studio"=>"MAPPA",
    "gambar"=>"up.png",
    "status"=>"Finished Airing",
    "rating"=>"R-17+"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
    <style>
        ul{
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>List Recomendation Anime</h1>
    <ul>
    <?php foreach ($anime as $anm ):?>
 <li>
    <a href="latihan2.php?nama=<?= $anm["nama"]; ?>&eps=<?= $anm["eps"];?>&tayang=<?= $anm["tayang"];?>&studio=<?= $anm["studio"];?>&rating=<?= $anm["rating"];?>&status=<?= $anm["status"];?>&gambar=<?= $anm["gambar"];?>"><?= $anm["nama"];?></a></li>
 <?php endforeach; ?>
        </ul>    
    <!-- <ul>
        <li><img src="../pertemuan6/img/<?= $anm["gambar"];?>"></li>
        <li>Name:<?= $anm["nama"]; ?></li>
        <li>Episodes:<?= $anm["eps"]; ?></li>
        <li>Airing:<?= $anm["tayang"]; ?></li>
        <li>Studios:<?= $anm["studio"]; ?></li>
        <li>Rating:<?= $anm["rating"]; ?></li>
        <li>Status:<?= $anm["status"]; ?></li>
    </ul> -->
  
</body>
</html>