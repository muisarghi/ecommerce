<?php
//session_start();
$sesid=session_id();
include('inc/inc.php');
include('layout/header.php');
$s=$_GET['s'];
?>
	
	
	<!-- banner -->
	
	<!-- //banner -->
	
	


	<!--ICON ICON 
	MAKANAN
	BATIK
	HANDICRAFT
	PIA
	KAOS
	SPREI BEDCOVER
	-->
	
	

	<!-- ICON ICON --- -->
	
	
	<div class="col-md-12 col-xs-12">
	<!-- top Products -->
		<div class="ads-gridx">
			<div class="container"> 
			<h2 align="center">Keranjang Belanja</h2>
			<table class="table table-bordered">
			<thead class="thead-dark">
			<tr>
			<td scope="col" align="center"><b>Nama Barang</b></td>
			<td scope="col" align="center"><b>Jumlah</b></td>
			<td scope="col" align="center"><b>Harga Satuan</b></td>
			<td scope="col" align="center"><b>Sub Total</b></td>
			
			</tr>
			</thead>

			<?php
			echo"<form method='post' action='checkoutp.php'>";
			$a1=mysqli_query($conn,"select stock.nama, stock.kode, stock.merk, cartv.* from cartv left join stock on cartv.kode=stock.kode where cartv.session='$s'");
			while($a=mysqli_fetch_array($a1))
				{
				echo"
				<tr>
				<td align='center' valign='middle'>
				<img src='picture/$a[merk]/$a[kode].JPG' width='100'><br>
				$a[kode] <br> $a[nama]</td>
				<td align='center' valign='middle'><input type='text' name='jml[]' value='$a[jml]' size='3'>
				<input type='hidden' name='kode[]' value='$a[kode]'>
				<input type='hidden' name='harga[]' value='$a[harga]'>
				<br><br>
				<a href='deltroli.php?id=$a[id]&s=$s'><input type='button' name='deltroli' class='btn btn-danger btn-sm' value='HAPUS'></a>
				</td>
				<td align='right' valign='middle'>".number_format($a['harga'],0,',',',')."</td>
				<td align='right' valign='middle'>".number_format($a['total'],0,',',',')."</td>
				
				</tr>
				";
				}
			$b1=mysqli_query($conn,"select sum(total) as totalx from cartv where session='$s'");
			while($b=mysqli_fetch_array($b1))
				{$totalx=$b['totalx'];}
			echo"
			<tr>
			<td colspan='3' align='right'><b>TOTAL</b></td>
			<td align='right'><b>Rp. ".number_format($totalx,0,",",",")."</b></td>
			</tr>

			<tr>
			<td colspan='4' align='right'>Belum termasuk biaya kirim (jika ada) biaya kirim akan dikonfirmasikan via email/sms</td>
			</tr>
			";
			?>
			</table>		
			
			<?php
			echo"
			<table width='100%'>
			<tr>
			<td align='right'>
			<a href='index.php'><input type='button' value='Lanjutkan Belanja' class='btn btn-warning'>
			</a>&nbsp;&nbsp;&nbsp;
			<input type='hidden' name='session' value='$s'>
			<input type='submit' value='Checkout' class='btn btn-primary'></td>
			</tr>
			</table>
			</form>
			";
			?>
			</div> <!--container -->
		</div>
			<!-- //product right -->
	
	
	
	

<?php
include ('layout/footer.php');
?>
