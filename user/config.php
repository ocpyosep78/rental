<?php
//host yang digunakan
//99,9% tidak perlu dirubah
$host = 'mysql14.000webhost.com'; 
 
//username untuk login ke host
//biasanya didapatkan pada email konfirmasi order hosting
$user = 'a6440656_rental'; 
 
//jika menggunakan PC sendiri sebagai host,
//secara default password dikosongkan
$pass = 'rental78';
 
//isikan nama database sesuai database
//yang dibuat pada langkah-1
$dbname = 'a6440656_rental';
 
//mengubung ke host
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
 
//memilih database yang akan digunakan
$dbselect = mysql_select_db($dbname);
?>