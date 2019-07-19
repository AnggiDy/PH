<?php 
$koneksi = mysqli_connect("localhost","root","","tambak_udang");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$ph=$_POST['ph'];
$sql = "insert into ph (idkolam, ph) value (1,'$ph')";
if($koneksi->query($sql)==TRUE){
  echo "berhasil diinput";
}else{
	echo "gagal";
}
?>