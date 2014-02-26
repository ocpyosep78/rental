<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
//$username = $_POST['username'];
//$password = $_POST['password'];

$kodeorder = $_POST['kodeorder'];
$tglorder = $_POST['tglorder'];
$kodecust = $_POST['kodecust'];
$namacust = $_POST['namacust'];
$namaalat = $_POST['namaalat'];
$tglsewa = $_POST['tglsewa'];
$tglkembali = $_POST['tglkembali'];
$ketlokasi = $_POST['ketlokasi'];
$kodeuser = $_POST['kodeuser'];

//simpan data ke database
//$query = mysql_query("insert into user values('', '$username', '$password')") or die(mysql_error());
$query = mysql_query("insert into trorder values ('', '$kodeorder', 
                                                    '$tglorder', 
													'$kodecust',
													'$namacust',
													 '$namaalat',
													'$tglsewa',
													'$tglkembali',
													'$ketlokasi',
													'$kodeuser')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>