<?php
include "koneksi.php";
$keyword=$_POST['keyword'];
echo "
<h2>Hasil Pencarian Data Tamu</h2>
<table border='1' width='100%'>
 <tr>
 <th>No</th><th>Nama</th><th>Email</th><th>Kota</th><th>pesan</th>
 </tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM tamu where nama like '%$keyword%' or pesan like '%$keyword%'");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "
 <tr>
 <td>$no</td>
 <td>$r[nama]</td>
 <td>$r[email] </td>
 <td>$r[kota]</td>
 <td>$r[pesan]</td>
 </tr>";
 $no=$no+1;
 }
echo "</table>";