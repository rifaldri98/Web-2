<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"lat_dbase");
mysqli_query($con,"INSERT INTO tbl_mhs (NIM, Nama, Alamat)
VALUES ('171011533', 'Suwandi', 'Slipi')");
mysqli_query($con,"INSERT INTO tbl_mhs (NIM, Nama, Alamat)
VALUES ('171011321', 'Gandari', 'Pamulang')");
mysqli_close($con);
?>