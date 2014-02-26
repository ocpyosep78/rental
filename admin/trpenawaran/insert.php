<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
//$username = $_POST['username'];
//$password = $_POST['password'];

$kodetawar = $_POST['kodetawar'];
$tgltawar = $_POST['tgltawar'];
$kodeorder = $_POST['kodeorder'];
$kodecust = $_POST['kodecust'];
$namacust = $_POST['namacust'];
$alamat = $_POST['alamat'];
$namaalat = $_POST['namaalat'];
$hargasewa = $_POST['hargasewa'];
$lamasewa = $_POST['lamasewa'];
$jmlbiaya = $_POST['jmlbiaya'];
$totalbiaya = $_POST['totalbiaya'];


$jmlbiaya = $hargasewa * $lamasewa;
$totalbiaya = ($jmlbiaya * 0.1) + $jmlbiaya;

//simpan data ke database
//$query = mysql_query("insert into user values('', '$username', '$password')") or die(mysql_error());
$query = mysql_query("insert into trpenawaran values ('$kodetawar', 
                                                    '$tgltawar', 
													'$kodeorder',
													'$kodecust',
													'$namacust',
													'$alamat',
													'$namaalat',
													'$hargasewa',
													'$lamasewa',
													'$jmlbiaya',
													'$totalbiaya')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>