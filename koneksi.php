<?php 
$koneksi = mysqli_connect("localhost","root","","praktek_02_akbar");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>