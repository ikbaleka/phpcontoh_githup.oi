<?php
include "koneksi.php";
echo "
<h2>Data Tamu</h2>
<a href='tamu_input.php'>Tambah Tamu</a>
<br><br>
<table border='1' width='100%'>
<tr>
<th>No</th><th>Nama</th><th>Email</th><th>Kota</th><th>pesan</th><th>Aksi</th>
</tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM tamu");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "
<tr>
<td>$no</td>
<td>$r[nama]</td>
<td>$r[email] </td>
<td>$r[kota]</td>
<td>$r[pesan]</td>
<td align='center'>
<a href='tamu_edit.php?id=$r[id]'>Edit</a> &nbsp;
<a href='aksi_tamu_delete.php?id=$r[id]'>Delete</a>
</td>
</tr>";
$no=$no+1;
}
echo "
</table><br>
<form method='POST' action='tamu_cari.php'>
Kata pencarian: <input type='text' name='keyword'>
<input type='submit' value='Cari'>
</form>";