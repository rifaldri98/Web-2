<?php
$koneksi = mysqli_connect("localhost", "root", "", "");
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
echo "Koneksi Berhasil\n";
$sql = 'CREATE Database artikel_db';
$buatdb = mysqli_query( $koneksi,$sql );
if(! $buatdb )
{
  die('Database Gagal di Buat ' . mysqli_error());
}
echo "Database artikel_db berhasil dibuat\n";
mysqli_close($koneksi);
?>