<?php 
// koneksi database
include 'config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kolam = $_POST['namakolam'];
$luas = $_POST['luaskolam'];
$kedalaman = $_POST['dalamkolam'];
$jenis = $_POST['jenisudang'];
$beli = $_POST['tglbeli'];
$jumlahbibit = $_POST['bibit'];
$prediksipanen = $_POST['tglpanen'];
$jumlahpanen = $_POST['panen'];
 
// update data ke database
mysqli_query($conn,"update kolam set kolam='$kolam', luas='$luas', kedalaman='$kedalaman', jenis='$jenis', pembelian='$beli', 
jumlahbibit='$jumlahbibit',prediksipanen='$prediksipanen', jumlahpanen='$jumlahpanen' where idkolam='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:edit.php");
 
?>