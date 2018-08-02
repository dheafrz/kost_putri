<?

include "class.ezpdf.php";
include "../koneksi.php";
  
$pdf = new Cezpdf();
 
// Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('fonts/Courier.afm');

$all = $pdf->openObject();

// Tampilkan logo
$pdf->setStrokeColor(0, 0, 0, 1);

// Teks di tengah atas untuk judul header
$pdf->addText(220, 825, 16,'<b>Laporan Data </b>');
$pdf->addText(230, 810, 14,'<b>-----------------</b>');
$pdf->addText(50, 800, 9,'<b>jl. Gajah Mada, Cebongan, Tlogodadi, Mlati, Kec.Sleman, Daerah Istimewa Yogyakarta 55286 </b>');
// Garis atas untuk header
$pdf->line(10, 795, 578, 795);

// Garis bawah untuk footer
$pdf->line(10, 50, 578, 50);
// Teks kiri bawah
$pdf->addText(30,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

$pdf->closeObject();

// Tampilkan object di semua halaman
$pdf->addObject($all, 'all');


$sql=mysql_query("SELECT * from buku_tamu WHERE no_kmr='$_POST[no_kmr]' ") or die(mysql_error());
while($r = mysql_fetch_array($sql)){
$data=array('<b>Tanggal</b>'=>$r['tanggal'], 
                  '<b>Nama Tamu</b>'=>$r['nama_tamu'], 
                  '<b>Alamat</b>'=>$r['alamat'],
                  '<b>Keperluan</b>'=>$r['keperluan'] );


}
}

$pdf->ezTable($data, '', '', '');
 $pdf->ezText(" \t\t\t ");

// Penomoran halaman
$pdf->ezStartPageNumbers(320, 15, 8);
$pdf->ezStream();

