<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
//$username = $_POST['username'];
//$password = $_POST['password'];

$kodekontrak = $_POST['kodekontrak'];
$tglkontrak = $_POST['tglkontrak'];
$kodeorder = $_POST['kodeorder'];
$kodecust = $_POST['kodecust'];
$namacust = $_POST['namacust'];
$namaalat = $_POST['namaalat'];
$hargasewa = $_POST['hargasewa'];
$lamasewa = $_POST['lamasewa'];
$jmlbiaya = $_POST['jmlbiaya'];
$totalbiaya = $_POST['totalbiaya'];
$kodeuser =  $_POST['kodeuser'];

$jmlbiaya = $hargasewa * $lamasewa;
$totalbiaya = ($jmlbiaya * 0.1) + $jmlbiaya;

//simpan data ke database
//$query = mysql_query("insert into user values('', '$username', '$password')") or die(mysql_error());
$query = mysql_query("insert into trkontrak values ('', '$kodekontrak', 
                                                    '$tglkontrak', 
													'$kodeorder',
													'$kodecust',
													'$namacust',
													'$namaalat',
													'$hargasewa',
													'$lamasewa',
													'$jmlbiaya',
													'$totalbiaya',
													'$kodeuser')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>