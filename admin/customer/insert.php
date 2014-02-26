<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
//$username = $_POST['username'];
//$password = $_POST['password'];

$kodecust = $_POST['kodecust'];
$nik = $_POST['nik'];
$namacust = $_POST['namacust'];
$alamat = $_POST['alamat'];
$telprumah = $_POST['telprumah'];
$telphp = $_POST['telphp'];
$email = $_POST['email'];
$person = $_POST['person'];
$npwp = $_POST['npwp'];
$salesman = $_POST['salesman'];

//simpan data ke database
//$query = mysql_query("insert into user values('', '$username', '$password')") or die(mysql_error());
$query = mysql_query("insert into tcustomer values ('', '$nik', 
                                                    '$namacust', 
													'$alamat',
													'$telprumah',
													'$telphp',
													'$email',
													'$person',
													'$npwp',
													'$salesman')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>