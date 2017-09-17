<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "impal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

?>

<center>
DATA STOCK BARANG
<br>
<br>
<br>
<div>
<form action = 'hasil.php' method = "POST">
<table>
<tr>
	<td>Search</td>
	<td><input type="text" name = "id_brg" placeholder = "input ID Barang" required/></td>
	<td><input type="submit" name="submit"/></td>
	</tr>
	</table>
	</form>
</div>
<table  border='1' Width='800'>
<tr>
    <th> ID Barang</th>
    <th> Nama Barang</th>
    <th> Jenis Barang</th>
    <th> Jumlah Barang</th>

</tr>

<?php
$sql="Select * From orderbrg" ;  
$result=MySQLi_query ($conn, $sql);

while ($row = mysqli_fetch_array ($result)){
$id = $row['id_brg'];
 echo "
        <tr>
        <td>".$row['id_brg']."</td>
        <td>".$row['nama_brg']."</td>
        <td>".$row['jenis_brg']."</td>
        <td>".$row['jumlah']."</td>
        </tr>
        ";
}
?>
</table>
