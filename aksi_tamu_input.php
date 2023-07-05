<?php
include "koneksi.php";
mysqli_query($koneksi,"INSERT INTO tamu (nama,email,kota,pesan)
VALUES('$_POST[nama]','$_POST[email]','$_POST[kota]','$_POST[pesan]')");
echo "<a href='tamu.php'>Data Sudah Masuk...!</a>";