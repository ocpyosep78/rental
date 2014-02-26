<?php
include('config.php');

//tangkap data dari form
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

//update data di database sesuai user_id
$query = mysql_query("UPDATE tcustomer SET 
							namacust='$namacust',
							alamat='$alamat',
							telprumah='$telprumah',
							telphp='$telphp',
							email='$email',
							person='$person',
							npwp='$npwp',
							salesman='$salesman'
							  where kodecust='$kodecust'") or die(mysql_error());
if ($query) {
	header('location:view.php?message=success');
}
?>