
<?php

session_start();
session_destroy();
	echo "<script>alert('Yakin ingin Keluar ?');</script>";
    echo "<script>location='login.php';</script>";
?>