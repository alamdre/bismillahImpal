<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "impal";

  $con = mysqli_connect($servername, $username, $password, $dbname);

//cek dulu apakah parameter kode ada atau tidak
if(isset($_GET['kode'])){
   $kode = $_GET['kode'];
} else {
    //kalo gak ada  parameternya
    echo "<script>alert('Kode Barang Belum Dipilih');document.location='prosesbarang.php'</script>";
}

//ambil data barang dengan kode yang dipilih dan tampilkan dalam form
   $sql = "SELECT * FROM ordrebrg WHERE id_brg='$kode'";
   $query = mysqli_query($con,$sql);
   $data = mysqli_fetch_array($query);
   //tampung masing-masing data ke dalam variabel
   $kode = $data['id_brg'];
   $jumlah = $data['jumlah'];
   $harga = $data['harga'];
   $total = $data['total'];
?>
<!-- sekarang bikin formnya -->
<html>
<head><title>Edit Data Barang</title>
<script language="javascript">
function cekform(){
    //ini untuk ngecek formnya (semua form tidak boleh kosong)
    if(document.editbrg.txtkode.value==""){
        alert('Kode Barang Harus Diisi');
        document.editbrg.txtkode.focus();
        return false;
    } else if(document.editbrg.txtjumlah.value==""){
        alert('Jumlah Barang Harus Diisi');
        document.editbrg.txtjumlah.focus();
        return false;
    } else if(document.editbrg.txtharga.value==""){
        alert('Harga Barang Harus Diisi');
        document.editbrg.txtharga.focus();
        return false;
    } else if(document.editbrg.txttotal.value==""){
        alert('Total Barang Harus Diisi');
        document.editbrg.txttotal.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>
<body>
Edit Barang
<form action="" method="post" name="editbrg" onsubmit="return cekform()">
<table width="500" border="1">
  <tr>
    <td width="163">Kode Barang </td>
    <td width="321"> <!-- textbox untuk kodebarang dibuat menjadi readonly. Ini karena field kodebarang adalah Primary Key, sehingga tidak boleh diedit --><input name="txtkode" type="text" id="txtkode" size="10" maxlength="10" value="<?php echo $kode?>" readonly/></td>
  </tr>
  <tr>
    <td>Jumlah Barang </td>
    <td><input name="txtjumlah" type="text" id="txtjumlah" value="<?php echo $jumlah?>"/></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><input name="txtharga" type="text" id="txtharga" value="<?php echo $harga?>"/></td>
  </tr>
  <tr>
    <td>Total Harga</td>
    <td><input name="txttotal" type="text" id="txttotal" value="<?php echo $total?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="tblEdit" type="submit" id="tblEdit" value="Edit Barang" /></td>
  </tr>
</table>

</form>
</body>
</html>
<?php
//ini kalo tombol editnya diklik
//perhatikan nama dari tombol edit nya (tblEdit)
if(isset($_POST['tblEdit'])){
    //ini adalah variabel untuk menampung inputan dari form (nama variabel bebas)
    // yang ada di dalam $_POST[''] adalah nama dari masing-masing textbox
    $kode = $_POST['txtkode'];
    $jumlah = $_POST['txtjumlah'];
    $harga = $_POST['txtharga'];
    $total = $_POST['txttotal'];
    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan uturan field yang ada dalam tabel
    $sql = "UPDATE orderbrg SET jumlah='$jumlah', harga='$harga', total='$total' WHERE id_brg='$kode'";
    //jalankan kuerynya
    $query = mysql_query($sql);
    //cek apakah variabel $kueri bernilai TRUE atau FALSE
    if($query){
    //ini kalo TRUE
    //tampilin alert pake javascript aja deh
        echo "<script>alert('Data barang berhasil diedit'); document.location='daftarbarang.php'</script>";
    } else {
    //ini kalo FALSE
        echo "<script>alert('Data barang gagal diedit')</script>";
        //tampilkan pesan error mysqlnya
        echo mysql_error();
    }
}
?>