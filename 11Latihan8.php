<html>
<body>
<form action=" " method="post">
NIM: <input type="text" name="nim" />
Nama: <input type="text" name="nama" />
Alamat: <input type="text" name="alamat" />
<input type="submit" />
</form>
</body>
</html>

<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"lat_dbase");
$sql="INSERT INTO tbl_mhs (NIM, Nama, Alamat)VALUES
('$_POST[nim]','$_POST[nama]','$_POST[alamat]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysql_error());
}
echo "1 record added";
mysqli_close($con)
?>
