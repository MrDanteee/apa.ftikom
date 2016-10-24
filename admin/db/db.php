<?php
	$dbhost		= "localhost";
	$dbuser		= "root";
	$dbpassword	= "";
	$database	= "lab";
	$db 		= @mysql_connect($dbhost, $dbuser, $dbpassword) or die("Koneksi Error : " . @mysql_error()); 
	
	@mysql_select_db($database) or die("Tidak bisa koneksi ke database"); 
?>
