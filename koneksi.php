<?php
	$hostname	= "localhost"; //bawaan
	$username	= "admin"; //bawaan
	$password	= ""; //kosong
	$database	= "final_paweb"; //nama database yang akan dikoneksikan

	$connect	= new mysqli($hostname, $username, $password, $database); //query koneksi

	if($connect->connect_error) { //cek error
		die("Error : ".$connect->connect_error);
	}
?>