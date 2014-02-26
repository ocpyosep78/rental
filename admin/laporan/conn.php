<?php 
function open_connection(){

	//konfigurasi
	$host="mysql14.000webhost.com";
	$user="a6440656_rental";
	$pass="rental78";
    //$db="auto_complete_DB";
	$db="a6440656_rental";
	
	//koneksi database
	$koneksi=mysql_connect($host,$user,$pass);
	mysql_select_db($db,$koneksi);
	
	return $koneksi;
}
?>
