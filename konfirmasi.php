<?php
//session_start();
$sesid=session_id();
include('inc/inc.php');
include('layout/header.php');
$faktur=$_GET['faktur'];
?>
	
	
	<!-- banner -->
	


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
			<h2 align="center">Pesanan Anda Telah Kami Terima</h2>
			<br><br>
			Detail Pemesanan:
			<br>
				<div class="col-md-12">
				Konfirmasi Pengiriman
				<?php
				$a1=mysqli_query($conn,"select cart.*, customer.* from cart left join customer on cart.idcustomer=customer.idcus where cart.faktur='$faktur'");
				while($a=mysqli_fetch_array($a1))
					{
					$tgl=$a['tgl'];
					$nama=$a['nama'];
					$email=$a['email'];
					$nohp=$a['nohp'];
					$alamat=$a['alamat'];
					$kota=$a['kota'];
					$tgllhr=$a['tgllhr'];
					}
				echo"
				<table class='table'>
				<tr>
				<td width='15%'>Faktur</td>
				<td>: $faktur</td>
				</tr>
				
				<tr>
				<td>Nama</td>
				<td>: $nama</td>
				</tr>

				<tr>
				<td>Email</td>
				<td>: $email</td>
				</tr>

				<tr>
				<td>No HP</td>
				<td>: $nohp</td>
				</tr>

				<tr>
				<td>Alamat</td>
				<td>: $alamat</td>
				</tr>

				<tr>
				<td>Kota</td>
				<td>: $kota</td>
				</tr>

				</table>
				";
				
				?>
				</div>
				

				<div class="col-md-12">Detail Barang:<br>
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
				
				$b1=mysqli_query($conn,"select stock.nama, stock.kode, stock.merk, cartdetail.* from cartdetail left join stock on cartdetail.kode=stock.kode where cartdetail.faktur='$faktur'");
				while($b=mysqli_fetch_array($b1))
					{
					echo"
					<tr>
					<td align='center' valign='middle'>
					$b[nama]</td>
					<td align='center' valign='middle'>$b[jml]
					</td>
					<td align='right' valign='middle'>".number_format($b['harga'],0,',',',')."</td>
					<td align='right' valign='middle'>".number_format($b['total'],0,',',',')."</td>
					
					</tr>
					";
					}

				$c1=mysqli_query($conn,"select sum(total) as totalx from cartdetail where faktur='$faktur'");
				while($c=mysqli_fetch_array($c1))
					{$totalx=$c['totalx'];}
				echo"
				<tr>
				<td colspan='3' align='right'><b>TOTAL</b></td>
				<td align='right'><b>Rp. ".number_format($totalx,0,",",",")."</b></td>
				</tr>

				
				";
				?>
				</table>		
				
				<?php
				echo"
				<table width='100%'>
				<tr>
				
				<td align='right'>
				<a href='index.php'>
				<input type='button' value='Kembali Belanja' class='btn btn-primary'></a></td>
				</tr>
				</table>
				";
				?>
				</div>



			</div> <!--container -->
		</div>
			<!-- //product right -->
	
	
	
	

<?php
include ('layout/footer.php');


/*

cart: id, idfaktur, nama, email, nohp, alamat, kota, tgllhr
cartdetail: id, idfaktur, tgl, kode, harga, jml, total, session

*/
?>
