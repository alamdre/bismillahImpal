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

$id_brg     = mysqli_real_escape_string($con, $_POST['id_brg']); //added $con needs two parameter (connection, input)
$nama_brg      = mysqli_real_escape_string($con, $_POST['nama_brg']);



$sqql = "INSERT INTO dborder (id_brg, nama_brg) 
VALUES ('$id_brg', '$nama_brg')";


if (mysqli_query($con, $sqql)) {
    echo "Row inserted";
}else{
    die("Error: ". mysqli_sqlstate($con));
}

mysqli_close($con);
?> 