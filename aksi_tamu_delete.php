<?php
include "koneksi.php";
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tamu WHERE id = $id");
echo "<a href='tamu.php'>Data Sudah Update...!</a>";