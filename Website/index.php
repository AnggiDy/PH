<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/icon.png">
<title>User Login</title>
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
<body>
<div class="login-form">
	<div style="text-align: center"><img src="img/icon.png"/></div>
    <form action="" method="post">
        <h2 class="text-center">Login Monitoring PH</h2>       
        <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="Username  .. " required="required"/>
        </div>
        <div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password .. " required="required"/>        
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block">Log in</button>
        </div>
    </form>
    
        <?php
		include 'config/koneksi.php';
		if(isset($_POST['login'])){
				$username = $_POST['user'];
				$password = $_POST['password'];
				$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
				$result = mysqli_fetch_array($query);
				$row = mysqli_num_rows($query);
				if(($username == "") or ($password == ""))
				{
				print "<center><font color=white>Anda belum memasukkan User Name dan password !</font>" ;
				exit;
				}
				if($row != 0) 
				{
					if($password != $result['password']) {
						print "<center>Password salah !";
						echo "<br />";
//						echo 'hasil var_dump variabel $row : ';
						}
					else
						{
						
						$_SESSION['username']=$username;
						$nama=$result['nama'];
						$_SESSION['nama']=$nama;
						print $_SESSION['username'];
						header("location: home3.php");
						}
					}
				else
				{
					print "<center>Maaf, Username tidak terdaftar atau Password salah!<br>Silahkan daftar dulu <a href='login_2.php?register=masukkan nama,email,dan password untuk daftar'><font
					color=blue>disini</a></font>";
				}
		}
		?>
	</div>
</body>
</html>
