<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php 
include('cek-login.php');
?>
<html>
<style type="text/css"> 
.dropmenu {     background: #616161;     height: 30px;     list-style-type: none;     margin: 0;     padding: 0px; } .dropmenu li {     border-right: solid 1px white;     float: left;     height: 30px; } .dropmenu li a {     color: #fff;     display: block;     font: 12px arial, verdana, sans-serif;     font-weight: bold;     padding: 9px 20px;     text-decoration: none; } .dropmenu li:hover { background: #778899; position: relative; } .dropmenu li:hover a { text-decoration: underline; } .dropmenu li:hover ul {     background-color: #3f4a54;     border: 1px solid grey;     left: 0px;     padding: 3px;     top: 30px;     width: 160px; } .dropmenu li:hover ul li { border: none; height: 18px; } .dropmenu li:hover ul li a {     background-color: #778899;     border: 1px solid transparent;     color: #fff;     display: block;     font-size: 11px;     height: 18px;     line-height: 18px;     padding: 0px;     text-decoration: none;     text-indent: 5px;     width: 158px;     padding: 3px; } .dropmenu li:hover ul li a:hover {     background: silver;     border: solid 1px #444;     color: #000;     height: 18px;     padding: 3px; } .dropmenu ul {     left: -9999px;     list-style-type: none;     position: absolute;     top: -9999px; } .style5 {font-size: 9}
.style7 {font-size: x-small; font-family: Arial, Helvetica, sans-serif; }
.style9 {font-size: x-small}
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
</style> 
<title>.::Home Menu::.</title><head>
<titleHome</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
//------------- Date -----------------------
window.setTimeout("show_date()",1000);
function show_date(){
var today = new Date();
var year = today.getFullYear();
var day = today.getDay();
var month = today.getMonth();
var date = today.getDate();
var time = today.toLocaleTimeString();
var hour = today.getHours();
var minute = today.getMinutes();
var sec = today.getSeconds();

var first2 = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
var second2 = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
if (date<10) date='0'+date;

document.getElementById("realtime").innerHTML= first2[day]+', '+date+' '+second2[month]+' '+year+', '+ time;
setTimeout("show_date()",1000);
}

/*
document.getElementById("realtime") <----- Nama ID Element yang di gunakan untuk tempat Menampilkan Jam
<p id="realtime"></p> <---- Letak hasil Load Jam (Java script menggunakan waktu PC client, bukan waktu PC webserver, karena kalau mau ambil waktu server harus load/ kirim permintaan tiap detik)
*/

</script>
</head>

<body>
    <table width="876" height="631" border="0" align="center" bordercolor="#FFFFFF">
  <tr>
    <td height="110" colspan="4" background="images/home/Top Header 02.jpg"></td>
    </tr>
  <tr>
    <td height="25" colspan="4">
	 <ul class="dropmenu">
	 <li><a href="../index.php">Home</a>
	       <!--<ul><li><a href="#11">Sub Menu 1</a></li>     
		           <li><a href="#22">Sub Menu 2</a></li>
			   </ul>--> 
	</li> 
	<li><a href="#">Data Customer</a>     
	<ul>     
	<li><a href="../customer/index.php">Input Customer</a></li>      
	   
	<li><a href="../customer/view.php">Inquiry Customer</a></li>     
	<!--<li><a href="#24">Sub Menu 4</a></li>-->
	</ul> 
	</li> 
	<li><a href="#">Data Alat Berat</a>     
	<ul>     
	<li><a href="../alatberat/index.php">Input Alat Berat</a></li>     
	   
	<li><a href="../alatberat/view.php">Inquiry Alat Berat</a></li>   
	</ul> 
	</li> 
	<li><a href="#">Transaksi</a>     
	<ul>     
	<li><a href="../trorder/index.php">Input Order</a></li> 
	<li><a href="../trpenawaran/index.php">Input Penawaran</a></li>     
	<li><a href="../trkontrak/index.php">Input Kontrak</a></li> 
	<li><a href="../trpembayaran/index.php">Input Pembayaran</a></li> 
	<li><a href="../trsuratjln/index.php">Input Surat Jalan</a></li>  
	</ul>
	</li> 
	<li><a href="#">Laporan</a>     
	<ul>     
	<li><a href="../laporan/laporder.php">Laporan Order</a></li>
	<li><a href="../laporan/lappenawaran.php">Laporan Penawaran</a></li>       
	<li><a href="../laporan/lappembayaran.php">Laporan Pembayaran</a></li>     
	<li><a href="../laporan/lapkontrak.php">Laporan Kontrak</a></li>        
	</ul>
	</li> 
	<li><a href="../logout.php">Logout</a> </li>
	<!--	<li><a href="about.php">Penyewa</a>     
	<ul>     
	<li><a href="#21">Input Penyewa</a></li>     
	<li><a href="#22">Modify Penyewa</a></li>     
	<li><a href="#23">Inquiry Penyewa</a></li>     
	</ul>
	</li> 
		<li><a href="about.php">Penyewa</a>     
	<ul>     
	<li><a href="#21">Input Penyewa</a></li>     
	<li><a href="#22">Modify Penyewa</a></li>     
	<li><a href="#23">Inquiry Penyewa</a></li>     
	</ul>
	</li> -->
	<!--<li><a href="#3">Menu 3</a>     
	<ul>     
	<li><a href="#31">Sub Menu 1</a></li>     
	<li><a href="#32">Sub Menu 2</a></li>     
	<li><a href="#33">Sub Menu 3</a></li>     
	<li><a href="#34">Sub Menu 4</a></li></ul> -->
	</li> </ul>
	</td>
    </tr>
  <tr bordercolor="#F0F0F0" bgcolor="#FFFFFF" >
    <td height="20" colspan="4" align="center" valign="top" bgcolor="#CCCCCC"><span class="style12"><?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

echo "Selamat Datang <strong>".$_SESSION['username']."</strong>";
?></span></td>
  </tr>
  <tr bordercolor="#F0F0F0" bgcolor="#FFFFFF" >
    <td height="334" colspan="4" align="center" valign="top" bgcolor="#CCCCCC"><h3>Form Input Penawaran Alat Berat </h3>

      <?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

echo "Selamat Datang <strong>".$_SESSION['username']."</strong>";
?>

<form name="input_data" action="insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Kode Penawaran </td>
        	<td>:</td>
        	<td><input type="text" name="kodetawar" maxlength="20" required="required" /></td>
        </tr>
		<tr>
        	<td>Tanggal Penawaran</td>
        	<td>:</td>
        	<td><input type="text" name="tgltawar" maxlength="50" required="required" /></td>
        </tr>
		<tr>
        	<td>Kode order</td>
        	<td>:</td>
        	<td><input type="text" name="kodeorder" maxlength="50" required="required" /></td>
        </tr>
		<tr>
        	<td>Kode Pelanggan</td>
        	<td>:</td>
        	<td><input type="text" name="kodecust" maxlength="50" required="required" /></td>
        </tr>
		<tr>
        	<td>Nama Pelanggan</td>
        	<td>:</td>
        	<td><input type="text" name="namacust" maxlength="50" required="required" /></td>
        </tr>
		<tr>
        	<td>Alamat Pelanggan</td>
        	<td>:</td>
        	<td><input type="text" name="alamat" maxlength="50" required="required" /></td>
        </tr>
		<tr>
        	<td>Nama Alat Berat</td>
        	<td>:</td>
        	<td><input type="text" name="namaalat" maxlength="50" required="required" /></td>
        </tr>
		<tr>
        	<td>Harga Sewa</td>
        	<td>:</td>
        	<td><input type="text" name="hargasewa" maxlength="50" required="required" /></td>
        </tr>
		<tr>
        	<td>Lama Sewa</td>
        	<td>:</td>
        	<td><input type="text" name="lamasewa" maxlength="50" required="required" /></td>
        </tr>
					
		<tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<!--<a href="view.php">Lihat Data</a>--></td>
  </tr>
  <tr bordercolor="#F0F0F0" bgcolor="#FFFFFF" >
    <td height="21" colspan="4" align="center" valign="top" bgcolor="#CCCCCC"><span class="style12"><div class="date" id="realtime"></div></span></td>
    </tr>
  <tr bordercolor="#F0F0F0">
    <td height="74" colspan="4" align="center" valign="top" bgcolor="#FFFFFF">
<span class="style26 style5"></span><span class="style26">
<hr noshade>
  <span class="style7">  JL. RC VETERAN NO 4 BINTARO JAKARTA SELATAN 12330 - INDONESIA</span></span><span class="style7"><br>
  Copyright © PT. Altrak 1978</span><span class="style9"></span><span class="style5"><br>
    </span></td>
    </tr>
</table>

</body>
</html>

