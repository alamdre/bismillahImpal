 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<!-- <form action = 'editbrg.php' method = "POST"> -->
<table border="1">
    <tr><th>no</th><th>ID</th><th>Nama</th><th>Jenis</th><th>jumlah</th><th>harga</th><th>status</th><th>Total</th><th>Tenggang bayar</th><th>Nama Perusahaan</th><th>CP </th><th>tanggal </th><th>Edit</th></tr>
<?php
$no =1;
include "koneksi.php";
$databrg = mysqli_query($connect,"SELECT * from orderbrg");
foreach ($databrg as $row){
$id = $row['id_brg'];
 echo "
        <tr>
        <td>".$no."</td>;
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
        <td><a href='editbrg.php?kode=$row[id_brg]'>edit</td>
        </tr>";
        $no++;
}
?>
</body>
</html> 