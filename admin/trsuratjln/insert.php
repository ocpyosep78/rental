<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
//$username = $_POST['username'];
//$password = $_POST['password'];

$kodesuratjln = $_POST['kodesuratjln'];
$tglsuratjln = $_POST['tglsuratjln'];
$kodekontrak = $_POST['kodekontrak'];
$kodeoperator = $_POST['kodeoperator'];
$kodecust = $_POST['kodecust'];
$namacust = $_POST['namacust'];
$alamatcust = $_POST['alamatcust'];
$telp = $_POST['telp'];
$person = $_POST['person'];
$kodealat = $_POST['kodealat'];
$namaalat = $_POST['namaalat'];
$qty = $_POST['qty'];
$kodeuser = $_POST['kodeuser'];

//simpan data ke database
//$query = mysql_query("insert into user values('', '$username', '$password')") or die(mysql_error());
$query = mysql_query("insert into trsuratjln values ('', '$kodesuratjln', 
                                                    '$tglsuratjln', 
													'$kodekontrak',
													'$kodeoperator',
													'$kodecust',
													'$namacust',
													'$alamatcust',
													'$telp',
													'$person',
													'$kodealat',
													'$namaalat',
													'$qty',
													'$kodeuser')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>