<?php
include "koneksi.php";
$tampil=mysqli_query($koneksi,"SELECT * FROM tamu where id='$_GET[id]' ");
$r=mysqli_fetch_array($tampil);
echo "
<h2>Edit Data Tamu</h2>
<table border='0' width='100%' cellspacing='5' cellpadding='5'>
 <form method='POST' action='aksi_tamu_edit.php' enctype='multipart/form-data'>
 <input type='hidden' name='id' value='$r[id]'>
 <tr><td>Nama Tamu</td><td><input type='text' name='nama' value='$r[nama]'></td></tr>
 <tr><td>Alamat Email</td><td><input type='text' name='email' value='$r[email]'></td></tr>
 <tr><td>Kota</td><td><input type='text' name='kota' value='$r[kota]'></td></tr>
 <tr><td>pesan</td><td><input type='text' name='pesan' value='$r[pesan]'></td></tr>
 <tr>
 <td colspan=2>
 <input type='submit' value='Update'>
 <input type='reset' value='Reset'>
 </td>
 </tr>
 </form>
</table>";