<?php 
date_default_timezone_set('Asia/Jakarta');
//menghubungkan dengan database 
$dbhost="mysql14.000webhost.com"; //nama server, kalo di lokalan atau d komputer sendiri ketik aja localhost 
$dbusername="a6440656_rental"; //user database anda 
$dbpassword="rental78"; //password database anda 
$dbname="a6440656_rental"; // nama database anda 
$conn = mysql_connect($dbhost, $dbusername, $dbpassword); 
mysql_select_db($dbname) or die ("Error Database"); 
?> 
