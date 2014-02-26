<?php
include "conn.php";
$koneksi=open_connection();
//untuk core PDF
require('fpdf.php');

class PDF extends FPDF
{
	function Header()
	{
		//Select Arial bold 15
		$this->SetFont('Arial','B',15);
		//Move to the right
		$this->Cell(80);
		//Framed title
		
		$judul='Laporan Order ';
		
		$this->Cell(50,10,$judul,0,0,'C');
		//Line break
		$this->Ln(20);
		
	}


	//Colored table
	function tabel_ri32_color()
	{
		//Queri untuk Menampilkan data
		$query ="SELECT * FROM  trorder order by kodeorder asc";
		$db_query = mysql_query($query) or die("Query gagal");

		//Column titles
		$header=array('Kode Order','Tgl Order','Kode Cust','Nama Cust','AlaT Berat','Tgl Sewa','Tgl Kembali','Lokasi Sewa');
		
		//Colors, line width and bold font
		$this->SetFillColor(255,0,0);
		$this->SetTextColor(255);
		$this->SetDrawColor(128,0,0);
		$this->SetLineWidth(.3);
		$this->SetFont('','B');
		
		//Title table
		//$this->Cell(20,30,'Title',1,0,'C');
		
		//Header
		$w=array(35,30,30,30,35,30,30,30);
		for($i=0;$i<count($header);$i++)
			$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
		$this->Ln();
		
		//Color and font restoration
		$this->SetFillColor(224,235,255);
		$this->SetTextColor(0);
		$this->SetFont('');
		
		//Data
		$fill=false;
		
		//$this->Cell(-10,-20,'Enjoy new fonts with FPDF!');
		
		while($data=mysql_fetch_array($db_query))
		{
			$this->Cell($w[0],7,$data['kodeorder'],'LR',0,'C',$fill);
			$this->Cell($w[1],7,$data['tglorder'],'LR',0,'L',$fill);
			$this->Cell($w[2],7,$data['kodecust'],'LR',0,'C',$fill);
			$this->Cell($w[3],7,$data['namacust'],'LR',0,'C',$fill);
			$this->Cell($w[4],7,$data['namaalat'],'LR',0,'C',$fill);
			$this->Cell($w[5],7,$data['tglsewa'],'LR',0,'C',$fill);
			$this->Cell($w[6],7,$data['tglkembali'],'LR',0,'C',$fill);
			$this->Cell($w[7],7,$data['ketlokasi'],'LR',0,'C',$fill);
			$this->Ln();
			$fill=!$fill;
		}
		
		$this->Cell(array_sum($w),10,'Copyright (c) 2013 PT Altrak 1978','T');
	}
}
//posisi kertas, ukuran kertas
$pdf = new PDF('L','mm','A4');
$title='Laporan Order';
$pdf->SetTitle($title);
$pdf->SetAuthor('Yosep');

$pdf->SetFont('Arial','',12);
$pdf->AddPage();
//memanggil fungsi table
$pdf->tabel_ri32_color();
$pdf->Output('docpdf/laporan_order.pdf','D');
?>

