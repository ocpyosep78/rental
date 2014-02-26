
<?php 
//menambahkan berita ke dalam database  
include("config.php"); 
if(isset($_POST['submit'])) 
  { 
    // mysql_escape_string 
    // untuk mencegah sql injection. 
      $judul = mysql_escape_string($_POST['judul']); 
      $paragraf = mysql_escape_string($_POST['paragraf']); 
      $fullparagraf = mysql_escape_string($_POST['fullparagraf']); 
	  $nama_file = $_FILES['gambar']['name']; 
	  $lokasi_file=$_FILES['gambar']['tmp_name'];
              //cek apakah judul sudah di isi? kalo belom tampilkan erronya. 
          if(!$judul) 
          {  
		        echo "Judul Harus di isi."; 
                exit(); //memastikan bahwa setelah perintah di atas tidak ada perintah yang di eksekusi lagi. 
          }// end of if 
          move_uploaded_file($lokasi_file,"gambar/$nama_file");
         //menjalankan query, memasukan data ke dalam database 
		 $insertdata= mysql_query("INSERT INTO berita (judul, waktu, paragraf, fullparagraf, gambar) 
                       VALUES ('$judul',NOW(),'$paragraf','$fullparagraf','$nama_file')"); 
          
          //tampilkan pesan sukses. 
          echo "<b>terimakasih, datasudah dikirim, <br>silahkan tunggu .....!"; 
          echo "<meta http-equiv=Refresh content=4;url=index.php>"; 
  }//end of if($submit). 


  // tampilkan form, jiga tidak disubmit! 
else 
  { 
   ?> 
      <br> 
      <h3>Tambah Berita</h3> 
       
      <form method="post" enctype='multipart/form-data' action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
	  
      Judul:  
        <input name="judul" size="40" maxlength="255"> 

      <br> 

      paragraf:  
      <textarea name="paragraf"  rows="7" cols="30"></textarea> 

      <br> 

      Fullparagraf:  
      <textarea name="fullparagraf" rows="7" cols="30"></textarea> 
      <br>   
      Picture: <input type="file" name="gambar" /> 
      <br> 

      <input type="submit" name="submit" value="Add News"> 

      </form> 

      <? 

  }//end of else 


?> 
