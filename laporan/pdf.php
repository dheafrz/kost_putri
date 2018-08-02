<?php

include "fpdf.php";
// include "../inc/koneksi.php";

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Times New Roman','B',12);
$pdf->Cell(0,5,'Kost Putri Satria Cantik','0','1','C',false);
$pdf->SetFont('Times New Roman','i',9);
$pdf->Cell(0,5,'Jl. Akses Ui No.9, Tugu-Cimanggis','0','1','C',false);
$pdf->Cell(0,2,'Kota Depok, Jawa Barat 16451','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0,6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Times New Roman','B',12);
$pdf->Cell(50,5,'Laporan Data Tamu Kamar Kost','0','1','L',false);
$pdf->Ln(3);

$pdf->SetFont('Times New Roman','B',10);
$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(35,6,'Tanggal',1,0,'C');
$pdf->Cell(37,6,'Nama Tamu',1,0,'C');
$pdf->Cell(35,6,'Alamat',1,0,'C');
$pdf->Cell(35,6,'Keterangan',1,0,'C');
$pdf->Ln(2);
$no = 0;
$sql = mysql_query("select * from buku_tamu order by id_kmr asc")
while($data = mysql_fetch_array($sql)){
  $no++;
  $pdf->Ln(4);
  $pdf->SetFont('Times New Roman','',12);
  $pdf->Cell(8,4,$no.".",1,0,'C');
  $pdf->Cell(35,4,$data['tanggal'],1,0,'L');
  $pdf->Cell(37,4,$data['nama_tamu'],1,0,'L');
  $pdf->Cell(35,4,$data['alamat'],1,0,'L');
  $pdf->Cell(35,4,$data['keterangan'],1,0,'L');
}
$pdf->Output();

?>