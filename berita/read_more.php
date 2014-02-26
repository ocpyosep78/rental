<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include("config.php"); 
        $beritaid = $_GET['beritaid']; 
        $tampil_semua = mysql_query("SELECT * FROM berita WHERE beritaid='$beritaid' "); 
        while($tampil = mysql_fetch_assoc($tampil_semua)) 

             { 

                     echo "<b>"; 

                     echo $tampil['judul']; 

                     echo "</b><br>tgl: <i>"; 

                     echo $tampil['waktu']; 

                     echo "</i><hr>"; 

                     echo $tampil['paragraf']; 

                     echo " "; 

                     echo "<img src=gambar/$tampil[gambar]>";
                     
					 echo $tampil['fullparagraf']; 

                     echo "<br><br><a href=\"javascript:self.history.back();\"><-- Kembali</a>"; 

             } 

?> 

</body>
</html>