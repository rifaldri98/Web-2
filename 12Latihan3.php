<?php
$koneksi=mysqli_connect("localhost","root","","lat_dbase");

	if (! $koneksi) {
        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
    }
    echo "Koneksi Berhasil\n";
    $sql ="UPDATE tbl_mhs set Age ='28'  WHERE FirstName = 'Bunda' AND  LastName = 'nunug'";
    $updatetbl = mysqli_query( $koneksi,$sql );
    if(! $updatetbl )
    {
      die('Update Tabel Gagal ' . mysqli_error());
    }
    echo "Update Table Berhasil";
    mysqli_close($koneksi);
    ?>  