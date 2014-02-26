<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
?>
<html>
<style type="text/css"> 
.dropmenu {     background: #616161;     height: 30px;     list-style-type: none;     margin: 0;     padding: 0px; } .dropmenu li {     border-right: solid 1px white;     float: left;     height: 30px; } .dropmenu li a {     color: #fff;     display: block;     font: 12px arial, verdana, sans-serif;     font-weight: bold;     padding: 9px 20px;     text-decoration: none; } .dropmenu li:hover { background: #778899; position: relative; } .dropmenu li:hover a { text-decoration: underline; } .dropmenu li:hover ul {     background-color: #3f4a54;     border: 1px solid grey;     left: 0px;     padding: 3px;     top: 30px;     width: 160px; } .dropmenu li:hover ul li { border: none; height: 18px; } .dropmenu li:hover ul li a {     background-color: #778899;     border: 1px solid transparent;     color: #fff;     display: block;     font-size: 11px;     height: 18px;     line-height: 18px;     padding: 0px;     text-decoration: none;     text-indent: 5px;     width: 158px;     padding: 3px; } .dropmenu li:hover ul li a:hover {     background: silver;     border: solid 1px #444;     color: #000;     height: 18px;     padding: 3px; } .dropmenu ul {     left: -9999px;     list-style-type: none;     position: absolute;     top: -9999px; } .style5 {font-size: 9}
.style7 {font-size: x-small; font-family: Arial, Helvetica, sans-serif; }
.style9 {font-size: x-small}
.style11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style12 {font-family: Arial, Helvetica, sans-serif}
</style> 
<head>
<titleHome</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    <table width="876" height="637" border="0" align="center" bordercolor="#FFFFFF">
  <tr>
    <td height="110" colspan="4" background="../images/home/Top%20Header%2002.jpg"></td>
    </tr>
  <tr>
    <td height="25" colspan="4">
	 <ul class="dropmenu">
	 <li><a href="../index.php">Home</a>
	       <!--<ul><li><a href="#11">Sub Menu 1</a></li>     
		           <li><a href="#22">Sub Menu 2</a></li>
			   </ul>--> 
	</li> 
	<li><a href="../about.php">About Us</a>     
	<!--<ul>     
	<li><a href="#21">Sub Menu 1</a></li>     
	<li><a href="#22">Sub Menu 2</a></li>     
	<li><a href="#23">Sub Menu 3</a></li>     
	<li><a href="#24">Sub Menu 4</a></li>     
	</ul> -->
	</li> 
	<li><a href="#2">Product</a>     
	<ul>     
    <li><a href="#21">JCB</a></li>     
	<li><a href="#22">KAWASAKI</a></li>     
	<li><a href="#23">NEW HOLLAND</a></li>     
	<li><a href="admin/login.php">RENTAL</a></li>     
	</ul> 
	</li> 
	<li><a href="../contact.php">Contact Us</a>     
	<!--<ul>     
	<li><a href="#21">Sub Menu 1</a></li>     
	<li><a href="#22">Sub Menu 2</a></li>     
	<li><a href="#23">Sub Menu 3</a></li>     
	<li><a href="#24">Sub Menu 4</a></li>     
	</ul> -->
	</li> 
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
    <td width="181" height="245" align="left" valign="top"><img src="alatberat/images/home/download.jpg" width="181" height="93"></td>
    <td width="685" colspan="3" rowspan="2" valign="top">
	<?php 
		//kode php ini kita gunakan untuk menampilkan pesan eror
		if (!empty($_GET['error'])) {
			if ($_GET['error'] == 1) {
				echo '<h3>Username dan Password belum diisi!</h3>';
			} else if ($_GET['error'] == 2) {
				echo '<h3>Username belum diisi!</h3>';
			} else if ($_GET['error'] == 3) {
				echo '<h3>Password belum diisi!</h3>';
			} else if ($_GET['error'] == 4) {
				echo '<h3>Username dan Password tidak terdaftar!</h3>';
			}
		}
		?>
	<p align="justify" class="style57 style11"> 
	  <form name="login" action="otentikasi.php" method="post">
		<table border="0" align="center" cellpadding="5" cellspacing="0">
		<tr><th><h4 class="style12">LOGIN</h4>
		</th>
		
		<tr> 
			<td colspan="2"><span class="style12">Username</span></td>
			<td>:</td>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<td colspan="2"><span class="style12">Password</span></td>
			<td>:</td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr align="right">
			<td colspan="4"> <input type="submit" name="login" value="Login" /></td>
		</tr>
		</table>
	  </form><a href="daftar/index.php">Daftar User Login</a>
	</p>
	</td>
  </tr>
  <tr bordercolor="#F0F0F0">
    <td height="138" valign="top" bgcolor="#FFFFFF"></td>
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

