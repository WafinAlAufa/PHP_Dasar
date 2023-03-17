<?php 
$mahasiswa =[
    ["wafin", "90900880","ti","email"],
    ["wafin", "90900880","ti","email"],
    ["wafin", "90900880","ti","email"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
<ul>
    <?php foreach($mahasiswa as $ma): ?>
    
        
     <li><?php echo $ma[0] ?></li>
        <li>nama<?php echo $ma[1] ?></li>
        <li>nim<?php echo $ma[2] ?></li>
        <li>jurusan<?php echo $ma[3] ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>