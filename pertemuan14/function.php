 <?php  
 // koneksi ke database
$conn = mysqli_connect("localhost","root","","db_anime");

function query($query){
    global $conn;
    $result = mysqli_query( $conn , $query);
$rows=[];
while($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;
}
return $rows;
}


function tambah($data){
    // ambil data dari elemen tiap dalam elemen
global $conn;
    $nama =htmlspecialchars( $data["nama"]);
    $episode =htmlspecialchars ($data["eps"]);
    $studio =htmlspecialchars ($data["studio"]);
    $rilis =htmlspecialchars ($data["rilis"]);
    $rating =htmlspecialchars ($data["rating"]);
    $status =htmlspecialchars ($data["status"]);
//    upload gambar
$gambar = upload();
if(!$gambar){
    return false;
}
// query insert data
$query = "INSERT INTO tb_anime
VALUES
('','$nama','$episode','$rilis','$studio','$rating','$status','$gambar')";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}
function upload(){
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile =$_FILES['gambar']['size'];
$error = $_FILES['gambar']['error'];
$tmpName= $_FILES['gambar']['tmp_name'];
// cek apakah tidak ada gambar yang di upload
if($error===4){
    echo "<script>
    alert('pilih gambar terlebih dahulu');
    </script>";
    return false;
}
// cek apakah yang diupload gambar
$ekstensiGambarValid =['jpg','png','jpeg'];
$ekstensiGambar = explode('.',$namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
    echo "<script>
    alert('yang di upload bukan gambar');
    </script>";
}
// cek jika ukuran gambar terlalu besar
if($ukuranFile >1000000){
    echo "<script>
    alert('ukuran gambar terlalu besar');
    </script>";
    return false;
}
// lolos pengecekan gambar bisa diupload
// generate nama baru
$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;
move_uploaded_file($tmpName,'img/'.$namaFileBaru);
return $namaFileBaru;
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM tb_anime WHERE id = $id");
return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama =htmlspecialchars( $data["nama"]);
    $episode =htmlspecialchars ($data["eps"]);
    $studio =htmlspecialchars ($data["studio"]);
    $rilis =htmlspecialchars ($data["rilis"]);
    $rating =htmlspecialchars ($data["rating"]);
    $status =htmlspecialchars ($data["status"]);
    $gambarLama=htmlspecialchars ($data["gambarLama"]);
    // cek apakah user user pilih gambar baru aatau tidak
    if($_FILES['gambar']['error']=== 4){
        $gambar =$gambarLama;
    }else {
        $gambar =upload();
    }
    // query insert data
$query = "UPDATE tb_anime SET
                nama='$nama',
                eps='$episode',
                studio='$studio',
                tayang='$rilis',
                rating='$rating',
                status='$status',
                gambar='$gambar'
                WHERE id =$id";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM tb_anime
    WHERE
    nama LIKE '%$keyword%' OR
    tayang LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data){
    global $conn;
    $username =strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);
    // cek username sudah ada atau belum
  $result =  mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script> alert('username sudah terpakai');
        </script>";
        return false;
    }
  // cek konfirmasi password
    if($password !== $password2){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    // encripsi password
    $password = password_hash($password,PASSWORD_DEFAULT); 
    // tambahkan user baru ke database
mysqli_query($conn,"INSERT INTO user VALUES ('','$username','$password')");
return mysqli_affected_rows($conn);
}
?>