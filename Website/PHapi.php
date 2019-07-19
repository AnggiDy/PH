<?php 
$koneksi = mysqli_connect("localhost","root","","tambak_udang");
$idkolam=$_GET['id'];

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
$sql="Select * from ph where idkolam='$idkolam' order by id DESC";
	if(!$koneksi->query($sql)==TRUE){
		echo "gagal";
	}else{
		$data=$koneksi->query($sql);
		foreach($data as $no   => $d){
			$row=array();
			$row[]=$no+1;
			$row[]=$d['time'];
			$row[]=$d['ph'];
	
			$ph[]=$row;
		}
		$hasil['data']=$ph;
		echo json_encode($hasil);
	}
}
?>