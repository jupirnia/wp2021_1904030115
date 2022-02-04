<?php

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	$host = 'localhost';
	$user = 'root'; 
	$pass = '';
	$dbname ='db_toko';
	try{
		$config = new PDO('mysql:host=localhost;dbname=db_toko;', $user='root',$pass='');
		
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	$view = 'fungsi/view/view.php'; // DIREKTORI PROSES SELECT /
?>

