<?php 
$koneksi = mysqli_connect("localhost","root","","tambak_udang");
$idkolam=$_GET['id'];
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
	$sql="Select * from ph where idkolam='$idkolam' order by id DESC limit 30";
	if(!$koneksi->query($sql)==TRUE){
		echo "gagal";
	}else{
		$data=$koneksi->query($sql);
		$time=array();
		$ph=array();
		$x=array();
		foreach($data as $no   => $d){
			
			$waktu=explode(' ',$d['time']);
			$time[]=$waktu[1];
			//$ph[]=$d['ph'];
			array_push($ph,$d['ph']);
		}
		$x['time']=$time;
		$x['ph']=$ph;
		//$hasil['data']=$data;
		echo json_encode($x);
	}
}
?>