<?php
//echo"AAAAOOOO<br>";
$id=$_POST['rowid'];
$a=explode('#',$id);
//echo"kode $a[0], session $a[1], harga $a[2], nama $a[3]";
echo"
<form method='post' action='".base_url()."index.php/mda/editgol'>
<table class='table table-bordered'>
<tr>
<td width='20%'>Kode</td>
<td>: $a[0]</td>
</tr>

<tr>
<td>Nama</td>
<td>: $a[3]</td>
</tr>

<tr>
<td>Harga</td>
<td>: $a[2]</td>
</tr>

</table>
";

?>