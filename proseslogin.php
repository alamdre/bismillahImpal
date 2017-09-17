 <?php
 session_start();
include "koneksi.php";

$username = $_POST['username'];
$password     = $_POST['password'];
 
$login = mysqli_query($connect, "SELECT * FROM akun WHERE username = '$username' AND password='$password'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $password)
	{ 
		if  ($row['jabatan'] == 'admin'){
 			header('location: index.html');
 		}
 		else if ($row['jabatan'] == 'gudang')
		{
			header('location: tampilbarang.php');
		}
	}


else
{
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='login.html'></a></center>";

}
?>