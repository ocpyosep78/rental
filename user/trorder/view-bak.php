<?php 
include('config.php');
include('cek-login.php');
?>

<html>
<head>
<title>Belajar PHP</title>
</head>

<body>
<h1>Data Customer</h1>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>

<a href="index.php">+ Tambah Data Customer</a>

<table border="1" cellpadding="5" cellspacing="0">
	<thead>
    	<tr>
        	<td>Kode Customer</td>
        	<td>NIK</td>
        	<td>Nama Customer</td>
			<td>Umur</td>
        	<td>Pekerjaan</td>
        	<td>Alamat</td>
			<td>Handpone</td>
        	<td>Telepon</td>
        	<td>kota</td>
			<td>Tanggal Daftar</td>
        	<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from tcustomer");
	
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $no; ?></td>
        	<td><?php echo $data['nik']; ?></td>
        	<td><?php echo $data['namacust']; ?></td>
			<td><?php echo $data['umur']; ?></td>
        	<td><?php echo $data['pekerjaan']; ?></td>
        	<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['telphp']; ?></td>
        	<td><?php echo $data['telprumah']; ?></td>
        	<td><?php echo $data['kota']; ?></td>
			<td><?php echo $data['tglentry']; ?></td>
        	<td>
            	<a href="edit.php?id=<?php echo $data['kodecust']; ?>">Edit</a> || 
                <a href="delete.php?id=<?php echo $data['kodecust']; ?>">Hapus</a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table>
</body>
</html>