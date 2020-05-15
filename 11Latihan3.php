<?php
$konek = mysqli_connect("localhost","root",""); //Koneksi
mysqli_select_db($konek,"lat_dbase"); // Mengaktifkan database
//membuat tabel
$sql = "CREATE TABLE tbl_mhs
(
mhsID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(mhsID),
NIM int(15),
Nama varchar(15),
Alamat text(100)
)";
mysqli_query($konek,$sql);
// input data
$input=mysqli_query($konek,"insert into mhs1(NIM,Nama,Alamat)
values('1710114011','Andi','Palmerah')");
if($input){
echo "Tabel dan input data berhasil dibuat";
}
?>