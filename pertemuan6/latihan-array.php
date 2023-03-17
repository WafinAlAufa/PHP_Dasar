<?php 
// array
// membuat array
// $hari = array("senin","kamis");
// $bulan =["jakarta"];
// $tahun =[100,"kotak"];
// // var_dump($hari);
// // echo '<br>';
// // print_r($bulan);
// // // menampilkan 1 elemen aray
// // echo $hari[0] ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    .kotak{
        width: 30px;
        height: 30px;
        background-color: aqua;
        line-height: 30px;
        text-align: center;
        margin: 3px ;
        float: left;
    }
    .kotak:hover{
        transform: rotate(360deg);
        transition: 0.5s;
        border-radius: 50%;
    }
    .clear{
        clear: both;
    }
</style>
</head>
<body>
    <!-- array multi dimensi -->
    <?php 
    $angka =[[1,2,3],[4,5,6],[7,8,9]];
    echo $angka[2][2];
    ?>
    <?php foreach($angka as $a): ?>
        <?php foreach($a as $b): ?>
    <div class="kotak"><?php echo $b; ?></div>
<?php endforeach ;?>
<div class="clear"></div>
<?php endforeach; ?>
</body>
</html>