<?php
$this->load->model('bukutamu_model');
$this->load->library('pdf');
    $pdf = new FPDF('l','cm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(29,2,'Kost Putri Satria Cantik',0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(29,-0.5,'Jl. Akses UI Kelapa Dua No. 48. (021) - 87904452',0,1,'C');
    $pdf->Cell(29,1,'_____________________________________________________________________________________________________________________',0,1,'L');
    $pdf->Cell(28,1,'Laporan Data Tamu',0,1,'C');
   
    $pdf->Cell(10,1,'',0,1);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(3,0,'No Kamar                     : ' . $nmr_kmr,0,1,'L');
    $pdf->Cell(3,1,'Nama Penghuni           : ' . $nama_penghuni,0,1,'L');
     
    //Membuat tabel
    $pdf->Cell(3,1,'Tanggal',1,0,'C');
    $pdf->Cell(8,1,'Nama Tamu',1,0,'C');
    $pdf->Cell(10.5,1,'Alamat',1,0,'C');
    $pdf->Cell(6,1,'Keperluan',1,1,'C');

    //Membuat Isi Tabel
    $pdf->SetFont('Arial','',12);
    foreach ($rekap_tamu as $b){
        $pdf->Cell(3,1,date('d M Y', strtotime($b->tanggal)) ,1,0,'C');
        $pdf->Cell(8,1,$b->nama_tamu,1,0);
        $pdf->Cell(10.5,1,$b->alamat,1,0); 
        $pdf->Cell(6,1,$b->keperluan,1,1); 
    }

    $pdf->Cell(1,1,'Periode     : ' . $periode,0,1,'L');
    $pdf->Cell(27,4,'Hormat Kami, ',0,1,'R');
    $pdf->Cell(27,1,'Kost Putri Satria Cantik ',0,1,'R');
    $pdf->Output();
    