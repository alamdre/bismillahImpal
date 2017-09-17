 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "impal";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
/*$jumlah = $jumlah+$tambah;*/
$id_brg     = mysqli_real_escape_string($con, $_POST['id_brg']); 
$nama_brg	= mysqli_real_escape_string($con, $_POST['nama_brg']);
$jenis_brg	= mysqli_real_escape_string($con, $_POST['jenis_brg']); 
$jumlah		= mysqli_real_escape_string($con, $_POST['jumlah']); 
$harga		= mysqli_real_escape_string($con, $_POST['harga']);
$total		= mysqli_real_escape_string($con, $_POST['total']); 
$sql = "INSERT INTO orderbrg (id_brg, nama_brg, jenis_brg, jumlah, harga, total) 
VALUES ('$id_brg', '$nama_brg', '$jenis_brg', '$jumlah','$harga', '$total')";


if (mysqli_query($con, $sql)) {
    echo "Row inserted";
}else{
    die("Error: ". mysqli_sqlstate($con));
}

mysqli_close($con);
?> 