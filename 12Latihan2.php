<?php
$koneksi = mysqli_connect("localhost", "root", "", "artikel_db");
if ($koneksi) {
	if (!$koneksi) {
        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
    }
    
    $table_name = 'articles';
    
    $sql = 'CREATE TABLE IF NOT EXISTS `' . $table_name . '` (
              `id` int(10) NOT NULL AUTO_INCREMENT,
              `judul` varchar(100) NOT NULL,
              `penulis` varchar(100) NOT NULL,
              `lead` varchar(255) NOT NULL,
              `content` text NOT NULL,
              `waktu` date NOT NULL,
              PRIMARY KEY (`id`),
              KEY `id` (`id`)
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
            
    $query = mysqli_query($koneksi, $sql);
    
    if (!$query) {
        die ('ERROR: tabel gagal dibuat ' . $table_name . ': ' . mysqli_error($koneksi));
    }
    echo 'Tabel '. $table_name .' Berhasi dibuat';
}
?>