<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<style type="text/css"> 
.dropmenu {     background: #616161;     height: 30px;     list-style-type: none;     margin: 0;     padding: 0px; } .dropmenu li {     border-right: solid 1px white;     float: left;     height: 30px; } .dropmenu li a {     color: #fff;     display: block;     font: 12px arial, verdana, sans-serif;     font-weight: bold;     padding: 9px 20px;     text-decoration: none; } .dropmenu li:hover { background: #778899; position: relative; } .dropmenu li:hover a { text-decoration: underline; } .dropmenu li:hover ul {     background-color: #3f4a54;     border: 1px solid grey;     left: 0px;     padding: 3px;     top: 30px;     width: 160px; } .dropmenu li:hover ul li { border: none; height: 18px; } .dropmenu li:hover ul li a {     background-color: #778899;     border: 1px solid transparent;     color: #fff;     display: block;     font-size: 11px;     height: 18px;     line-height: 18px;     padding: 0px;     text-decoration: none;     text-indent: 5px;     width: 158px;     padding: 3px; } .dropmenu li:hover ul li a:hover {     background: silver;     border: solid 1px #444;     color: #000;     height: 18px;     padding: 3px; } .dropmenu ul {     left: -9999px;     list-style-type: none;     position: absolute;     top: -9999px; } .style5 {font-size: 9}
.style7 {font-size: x-small; font-family: Arial, Helvetica, sans-serif; }
.style9 {font-size: x-small}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
.style13 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
</style> 
<head>
<titleHome</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
    <table width="876" height="655" border="0" align="center" bordercolor="#FFFFFF">
  <tr>
    <td height="110" colspan="4" background="images/home/Top Header 02.jpg"></td>
    </tr>
  <tr>
    <td height="25" colspan="4">
	 <ul class="dropmenu">
	 <li><a href="index.php">Home</a>
	       <!--<ul><li><a href="#11">Sub Menu 1</a></li>     
		           <li><a href="#22">Sub Menu 2</a></li>
			   </ul>--> 
	</li> 
	<li><a href="about.php">About Us</a>     
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
	<li><a href="contact.php">Contact Us</a>     
	
	</li> </ul>
	</td>
    </tr>
  <tr bordercolor="#F0F0F0" bgcolor="#FFFFFF" >
    <td width="206" height="78" align="left" valign="top"><span class="style13">Select Product Category<br></span>	
	<li span class="style12"><span class="style11"><a href="#31">JCB</a></span></span></li>     
	<li class="style12"><a href="#32">KAWASAKI</a></li>     
	<li class="style12"><a href="#33">NEW HOLLAND</a></li>     
	<li span class="style12"><a href="user/login.php">RENTAL</a></span></li></td>
    <td width="660" colspan="3" rowspan="2"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="660" height="447" align="top">
    <param name="movie" value="wallpic.swf" />
    <param name="quality" value="high" />
    <param name="allowFullScreen" value="true" />
    <param name="wmode" value="transparent">
    <embed src="images/home/wallpic.swf"
         width="660"
         height="447" align="top"
         quality="high"
         type="application/x-shockwave-flash"
       WMODE="transparent"
         allowFullScreen="true"
         pluginspage="http://www.macromedia.com/go/getflashplayer" />
  </object></td>
    </tr>
  <tr bordercolor="#F0F0F0">
    <td height="323" valign="top" bgcolor="#FFFFFF"><span class="style13"><br>News</span><br>
    <?php 
// memanggil conneksi ke database 
include("berita/config.php"); 
   $tampil_data = mysql_query("SELECT * FROM berita ORDER BY beritaid DESC LIMIT 0,6"); 
   $jum=mysql_num_rows($tampil_data); 
   if (empty($jum))//periksa apakah ada berita di database 
   { 
   echo "Tidak ada data"; // kalo tidak ada berita tampilkan ini 
   } 
   else 
   { 
   // jika ada data 
   //membuat looping dan menampilkan semua berita dari database 
     while($tampil = mysql_fetch_assoc($tampil_data)) 

             {//memulai looping 
               //menampilkan data 
               echo "<b><font style=font-size:10px;>"; //judul
              
               echo $tampil['judul']; 

               echo "</b><br>"; //tanggl buat
                
                echo $tampil['waktu']; 
               // tampilkan pilihan read more(baca semua) dan pilihan delete 

               echo "<br><a href=\"read_more.php?beritaid=$tampil[beritaid]\">Read More...</a> <br><hr></font>"; 

             }//end of loop 
         
    } 
?></td>
  </tr>
  <tr bordercolor="#F0F0F0">
    <td height="74" colspan="4" align="center" valign="top" bgcolor="#FFFFFF">
<span class="style26 style5"></span><span class="style26"><hr noshade>
  <span class="style7">  JL. RC VETERAN NO 4 BINTARO JAKARTA SELATAN 12330 - INDONESIA</span></span><span class="style7"><br>
  Copyright © PT. Altrak 1978</span><span class="style9"></span><span class="style5"><br>
    </span></td>
    </tr>
</table>

</body>
</html>
