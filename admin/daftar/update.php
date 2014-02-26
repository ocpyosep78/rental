<?php
include('config.php');

//tangkap data dari form
$id = $_POST['user_id'];
$password = $_POST['password'];


//update data di database sesuai user_id
$query = mysql_query("update user set password='$password' where user_id='$id'") or die(mysql_error());

if ($query) {
	header('location:view.php?message=success');
}
?>