<?php 
// apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){
   // cek username dan password
    if( $_POST["nama"] == "admin" && $_POST["password"] == "123" ){
      // jika benar direct ke halaman dashborad
        header("Location: dashboard.php");
        // echo "berhasil"; test kesalahan
    exit;
    }else{
        // echo "gagal"; test kesalahan
        // jika salah redirect ke halaman login lagi
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (isset($error)): ?>
    <p>username / password salah!</p>
    <?php endif; ?>
    <ul>
   <form action="" method="post">
    <li>
        <label for="nama">username:</label>
        <input type="text" name="nama" id="nama">
    <li>
        <label for="password">password:</label>
        <input type="password" name="password" id="password">
        </li>
        <li>
  <button type="submit" name="submit" id="submit">Kirim!</button>
  </li>
</form> 
   </ul>
</body>
</html>