<?php
include('config.php');

//tangkap data dari form
$kodealat = $_POST['kodealat'];
$namaalat = $_POST['namaalat'];
$type = $_POST['type'];
$merk = $_POST['merk'];
$tahunbeli = $_POST['tahunbeli'];
$jumlah = $_POST['jumlah'];
$hargasewa = $_POST['hargasewa'];


//update data di database sesuai user_id
$query = mysql_query("UPDATE talatberat SET 
							namaalat='$namaalat',
							type='$type',
							merk='$merk',
							tahunbeli='$tahunbeli',
							jumlah='$jumlah',
							hargasewa='$hargasewa'
							  where kodealat='$kodealat'") or die(mysql_error());
if ($query) {
	header('location:view.php?message=success');
}
?>