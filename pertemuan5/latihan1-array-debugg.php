<?php 
// array
// array bisa berisi data yang beda
// variabel yang dapat memiliki banyak nilai  variabel
// membuat array dengan cara lama
// pasangan antara key dan value
// key-nya adalah index,yang dimulai dari 0

$hari = array("senin","selasa","rabu");
// cara baru penulisan array
$bulan = ["januari","februari","maret"];
$arr1 = [123,"tulisan",false];

// menampilkan array
// var_dump() / print_r()
// var_dump($arr1);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// // menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];
// ?>


<!-- menambahkan elemen baru pada array -->
<?php 
var_dump($hari);
$hari[] ="kamis";
$hari[] ="jum'at";
echo "<br>";
var_dump($hari);
?>