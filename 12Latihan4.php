<?php
$koneksi=mysqli_connect("localhost","root","","lat_dbase");

	if (! $koneksi) {
        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
    }
    echo "Koneksi Berhasil\n";
    $sql ="DELETE FROM tbl_mhs  WHERE FirstName = 'Bunda'";
    $updatetbl = mysqli_query( $koneksi,$sql );
    if(! $updatetbl )
    {
      die('Delete Tabel Gagal ' . mysqli_error());
    }
    echo "Delete Table Berhasil";
    mysqli_close($koneksi);
    ?>  