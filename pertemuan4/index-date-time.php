<!-- function php bawaan -->
<!-- function tanggal (m,M,d,l,Y)-->
<?php 
// echo date("l,d-");
?>

<!-- time waktu  Unix time/epoch time-->
<!-- detik yang sudah berlalu dari 1970 sampai searang -->
<?php 
// echo time ();
?>
<!-- gabungan waktu dan tanggal -->
<?php 
// echo date('l',time()+60*60*24*100);
?>
<!-- mktime membuat detik sendiri detik nya -->
<!-- terdapat 6 parameter (0,0,0,0,0,0) -->
<!-- jam,menit,detik,bulan,tanggal,tahun -->
<?php
echo date('l', mktime(0,0,0,10,23,1999))
?>

<!-- strtotime -->
<?php 
echo date('l', strtotime("23 oct 1999"));
?>