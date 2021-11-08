<?php
include_once "../sambungan.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = "SELECT * FROM pengguna WHERE username='$user' AND password='$pass' AND aktif='Y'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$b=mysqli_fetch_array($login);
if($ketemu>0){
	session_start();
	$_SESSION['idkasis'] 		= $b['idpengguna'];
	$_SESSION['userkasis'] 		= $b['username'];
	$_SESSION['namakasis'] 		= $b['nama'];
	$_SESSION['jabatankasis'] 	= $b['jabatan'];
	$_SESSION['hakakseskasis'] 	= $b['hakakses'];
	if($b['foto']==""){
		$_SESSION['fotokasis'] 	= "0.jpg";
	}else{
		$_SESSION['fotokasis'] 	= $b['foto'];
	}
	header('location: index.php?m=awal');
}else{
	include "login.php";
	echo '<script language="javascript">';
		echo 'alert ("salah")';
	echo '</script>';
}
?>
