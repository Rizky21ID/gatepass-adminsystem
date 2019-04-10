<?php
error_reporting(0);
	session_start();
	mysql_connect('localhost','root','') or die('tidak dapat konek');
	mysql_select_db('db_gatepass') or die('database tidaka ada');
	$username =$_POST['username'];
	$password =$_POST['password'];
	$query =mysql_query("SELECT * FROM petugas WHERE username='$username' AND password ='$password'");
	$r =mysql_fetch_assoc($query);
	$cek =mysql_num_rows($query);
	if($cek !=0){
		$_SESSION['id_petugas'] =$r['id_petugas'];
		$_SESSION['nama_petugas'] =$r['nama_petugas'];
		$_SESSION['level'] =$r['level'];
		$_SESSION['username'] =$r['username'];
		$_SESSION['password'] =$r['password'];
		header('location:media.php?module=home');
	}

?>
<script>
document.location="login.php?module=salah";
</script>