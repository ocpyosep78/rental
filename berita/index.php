<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// memanggil conneksi ke database 
include("config.php"); 
   $tampil_data = mysql_query("SELECT * FROM berita ORDER BY beritaid DESC"); 
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
               echo "<b>Judul: "; 

               echo $tampil['judul']; 

               echo "</b><br>tgl: <i>"; 

               echo $tampil['waktu']; 

               echo "</i><hr align=left width=160>"; 

               echo $tampil['paragraf']; 

               // tampilkan pilihan read more(baca semua) dan pilihan delete 
                       echo "<br><br><hr>"; 
         echo "<br><a href=\"read_more.php?beritaid=$tampil[beritaid]\">Read More...</a>   <br><hr>";

          // || <a href=\"edit_berita.php?beritaid=$tampil[beritaid]\">Edit</a> 

         // || <a href=\"hapus_berita.php?beritaid=$tampil[beritaid]\">Delete</a><br><hr>"; 

             }//end of loop 
         
    } 
?> 

</body>
</html>