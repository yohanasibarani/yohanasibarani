<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	<!-- cek apakah sudah login -->
	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
	<h4>Selamat datang, <?php echo $_SESSION['nama']; ?>! anda telah login.</h4> 
	<br/>
<!DOCTYPE html>
<html>
<head></head>
<body>
	<a href="logout.php">LOGOUT</a>
</body>
</html>




