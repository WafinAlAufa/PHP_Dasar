<?php 
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
// echo $mahasiswa[1] ["jurusan"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      ul{
        list-style: none;
        line-height: 3vh;
      }
      
    </style>
</head>
<body>
  <h1>List Recomendation Anime</h1>  
<?php foreach($anime as $anm): ?>
  <ul>
  <li><img src="img/<?= $anm["gambar"]; ?>"> </li>
    <li>Name : <?= $anm["nama"]; ?></li>
    <li>Episodes : <?= $anm["eps"]; ?></li>
    <li>Aired: <?= $anm["tayang"]; ?></li>
    <li>Studios : <?= $anm["studio"]; ?></li>
    <li>Status : <?= $anm["status"]; ?></li>
    <li>Rating : <?= $anm["rating"]; ?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>