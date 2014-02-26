<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form

$kodealat = $_POST['kodealat'];
$namaalat = $_POST['namaalat'];
$type = $_POST['type'];
$merk = $_POST['merk'];
$tahunbeli = $_POST['tahunbeli'];
$jumlah = $_POST['jumlah'];
$hargasewa = $_POST['hargasewa'];

//simpan data ke database
$query = mysql_query("insert into talatberat values ('$kodealat', 
                                                    '$namaalat', 
													'$type', 
													'$merk', 
													'$tahunbeli',
													'$jumlah',
													'$hargasewa')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>