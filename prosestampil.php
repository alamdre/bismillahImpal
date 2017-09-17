<?php
include "koneksi.php";
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
        <td>".$row['harga']."</td>
        <td>".$row['status']."</td>
        <td>".$row['total']."</td>
        <td>".$row['tenggang_bayar']."</td>
        <td>".$row['nama_perusahaan']."</td>
        <td>".$row['cp']."</td>
        <td>".$row['tanggal']."</td>
        </tr>
        ";
}
?>