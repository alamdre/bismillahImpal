<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "impal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

?>


<center>
DATA BARANG
<br>
<br>
<br>

<!-- ///////////////////////////// tabel///////////////////////////////// -->

<table  border='1' Width='800'>
<tr>
    <th> ID_Barang </th>
    <th> Nama_Barang</th>
</tr>

<?php
// Perintah view data
$sql="Select * From dborder" ;  //view semua data barang

$result=MySQLi_query ($conn, $sql);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($row = mysqli_fetch_array ($result)){
$id = $row['id_brg'];
 echo "
        <tr>
        <td>".$row['id_brg']."</td>
        <td>".$row['nama_brg']."</td>
        </tr>
        ";
}
?>
</table>
