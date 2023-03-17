<?php 
// pertemuan 2 -php dasar
// sintaks php
// standar ouput
// echo,print
// print_r {debugg program}
// var_dump {debugg program}
echo "wafin";
echo 1213;
echo true;
echo false;
print "wafin";
print_r ("wafin");
var_dump ("wafin");
?>
<!-- // 1. php di dalam html
// 2. html didalam php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>halo selamat datang <?php echo " wafin";  ?></h1>
<p><?php echo "ini adalah paragraf" ;?></p>
</body>
</html>
<?php 
echo "<h1>halo,ini adalah h1</h1>";
?>
<!-- variabel dan tipe data -->
<!-- variabel -->
<!-- variabel tidak boleh diawali angka,tapi boleh mengandung angka -->
<?php 
$nama ="wafin";
$nama2="jonny";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>nama saya <?php echo $nama; echo $nama2; ?></h1>
<?php echo "halo nama saya $nama" ?>
</body>
</html>
<!-- operator -->
<!-- aritmatika (+ - * / %) -->
<?php 
$x = 10;
$y = 20;
echo $y+$x;
?>
<!-- operator penggabung string / concatenation / contat -->
<?php 
$nama_depan ="wafin";
$nama_belakang = "al aufa";
echo $nama_depan ."". $nama_belakang;
?>
<!-- operator assignment (= , +=,-=,*=,/=,%=,.=) -->
<?php 
$x =1;
$x -= 5;
echo $x;
$nama = "wafin";
$nama .= " ";
$nama .= "al aufa";
echo $nama;
?>
<!-- operator perbandingan(<,>,>=,<=,==,!=) -->
<?php 
var_dump(1=="1");
?>
<!-- identitas -->
<!-- ===,!== -->
<?php 
var_dump(1==="1");
?>
<!-- logika (&&, || ,!) -->
<?php 
$x =10;
var_dump($x<20 && $x % 2 == 0);
?>