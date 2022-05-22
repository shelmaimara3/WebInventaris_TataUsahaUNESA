<?php
include "barcode128.php"; // include php barcode 128 class
include "connect.php"; // koneksi ke database

$kolom = 5;  // jumlah kolom
$copy = $_GET['jumlah']; // jumlah copy barcode
$counter = 1;
// sql query ke database
$sql_barcode = "SELECT * FROM tb_data WHERE kode_barcode=$_GET['kode_barcode']";
$baca_barcode = mysql_query($sql_barcode) or die ("Gagal Query".mysql_error());
$data_barcode = mysql_fetch_array($baca_barcode);
//menampilkan hasil generate barcode
echo"
<table cellpadding='10'>";
for ($ucopy=1; $ucopy<=$copy; $ucopy++) {
if (($counter-1) % $kolom == '0') { echo "
<tr>"; }
echo"
<td class='merk'>".substr($data_barcode['nama_barang'],0,20)."";
echo bar128(stripslashes($_GET['kode_barcode']));
echo "</td>
";
if ($counter % $kolom == '0') { echo "</tr>
"; }
$counter++;
}
echo "</table>
";
?>
