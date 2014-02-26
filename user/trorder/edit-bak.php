<?php 
include('config.php');
include('cek-login.php');
?>

<html>
<head>
<title>Modify Customer</title>
</head>

<body>
<h1>Form Input Data</h1>

<?php 
$id = $_GET['id'];

$query = mysql_query("select * from tcustomer where kodecust='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="update.php" method="post">
<input type="hidden" name="kodecust" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>NIK</td>
        	<td>:</td>
        	<td><input name="nik" type="text" id="nik" value="<?php echo $data['nik']; ?>" size="30" maxlength="20" required="required" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama Customer</td>
        	<td>:</td>
        	<td><input name="namacust" type="text" id="namacust" value="<?php echo $data['namacust']; ?>" size="30" maxlength="20" required="required" /></td>
        </tr>
		<tr>
        	<td>Umur</td>
        	<td>:</td>
        	<td><input name="umur" type="text" value="<?php echo $data['umur']; ?>" size="30" maxlength="20" required="required" /></td>
        </tr>
		<tr>
        	<td>Pekerjaan</td>
        	<td>:</td>
        	<td><input name="pekerjaan" type="text" value="<?php echo $data['pekerjaan']; ?>" size="30" maxlength="20" required="required" /></td>
        </tr>
		<tr>
        	<td>alamat</td>
        	<td>:</td>
        	<td><textarea name="alamat" cols="30" rows="3" id="alamat" required="required"><?php echo $data['alamat']; ?></textarea></td>
        </tr>
		<tr>
        	<td>Handphone</td>
        	<td>:</td>
        	<td><input name="telphp" type="text" id="telphp" value="<?php echo $data['telphp']; ?>" size="30" maxlength="20" required="required" /></td>
        </tr>
		<tr>
        	<td>Telepon Rumah</td>
        	<td>:</td>
        	<td><input name="telprumah" type="text" id="telprumah" value="<?php echo $data['telprumah']; ?>" size="30" maxlength="20" required="required" /></td>
        </tr>
		<tr>
        	<td>Kota</td>
        	<td>:</td>
        	<td><input name="kota" type="text" id="kota" value="<?php echo $data['kota']; ?>" size="30" maxlength="20" required="required" /></td>
        </tr>
		        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="view.php">Lihat Data</a>

</body>
</html>