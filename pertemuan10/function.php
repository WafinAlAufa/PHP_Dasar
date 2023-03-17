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
    $gambar =htmlspecialchars ($data["gambar"]);
// query insert data
$query = "INSERT INTO tb_anime
VALUES
('','$nama','$episode','$rilis','$studio','$rating','$status','$gambar')";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
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
    $gambar =htmlspecialchars ($data["gambar"]);
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
?>