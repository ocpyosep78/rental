<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
//$username = $_POST['username'];
//$password = $_POST['password'];

$kodekwitansi = $_POST['kodekwitansi'];
$tglkwitansi = $_POST['tglkwitansi'];
$pembayaran = $_POST['pembayaran'];
$kodekontrak = $_POST['kodekontrak'];
$kodecust = $_POST['kodecust'];
$namacust = $_POST['namacust'];
$jumlahbayar = $_POST['jumlahbayar'];
$kodeuser =  $_POST['kodeuser'];


//simpan data ke database
//$query = mysql_query("insert into user values('', '$username', '$password')") or die(mysql_error());
$query = mysql_query("insert into trkwitansi values ('', '$kodekwitansi', 
                                                    '$tglkwitansi',
													'$pembayaran',
													'$kodekontrak',
													'$kodecust',
													'$namacust',
													'$jumlahbayar',
													'$kodeuser')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>