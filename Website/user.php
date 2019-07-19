<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/icon.png">

<title>Update Profil</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
	<?php
		include 'config/koneksi.php';
		$id = $_GET['id'];
		$query = mysqli_query($conn, "select * from user where username='$id'");
		$d = mysqli_fetch_array($query);
	?>

<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">UpDate Profil</h2>       
        <div class="form-group">
        <label class="control-label col-sm-6">ID Otomatis</label>
			<input type="text" class="form-control" name="Id" id="id" disabled value="<?php echo $d['id']; ?>">        
        </div>
       <div class="form-group">
        <label class="control-label col-sm-6">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $d['nama']; ?>">
        </div>
       <div class="form-group">
         <label class="control-label col-sm-6">User Name :</label>
             <input type="text" class="form-control" name="user" id="user" disabled value="<?php echo $d['username']; ?>">
        </div>                
        <div class="form-group">
        <label class="control-label col-sm-6">Password</label>
             <input type="password" class="form-control" name="password" id="password" value="<?php echo $d['password']; ?>">
        </div>
        <div class="form-group">
        <label class="control-label col-sm-6">Confirm Password</label>
             <input type="password" class="form-control" name="c_password" id="c_password" value="<?php echo $d['c_password']; ?>">
        </div>
        
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Simpan</button>
        </div>
        <div class="clearfix">
            <a href="home3.php" class="pull-right">Menu Utama</a>
        </div>         
    </form>
   
</div>
</body>
</html>      
<?php
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$nama = $_POST['nama'];	
	$user = $_POST['username'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
	if($password != $c_password)
	{
  	   print "<script>alert('Konfirmasi password harus sama dengan password !');
		javascript:history.go(-1);</script>";
	   exit;
	}
	 $query =  mysqli_query($conn, "update user set nama='$nama', password='$password'");
	 print "<script>alert('Update Berhasil!'); </script>";
	   exit;
//	 print "Update Berhasil <br><a href=home.php><font color=blue>ke Menu Utama </font></a>";
	header("location: home.php");
}
?>			                          		                            