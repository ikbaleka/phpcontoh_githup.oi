<?php
include "koneksi.php";
$id=$_POST['id'];
mysqli_query($koneksi,"UPDATE tamu SET
 nama = '$_POST[nama]',
 email = '$_POST[email]',
 kota = '$_POST[kota]'
 WHERE id = '$id' ");
echo "<a href='tamu.php'>Data Sudah Update...!</a>";