<?php

session_start();
//$sesid=session_id();
$sessioncus=$_SESSION['id'];
require('inc/inc.php');
include('layout/header.php');
$s=$_GET['s'];
@ini_set('display_errors', 'off');
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
			<h2 align="center">Konfirmasi</h2>
			<br><br>
				
				<div class="col-md-6">
				Konfirmasi Pengiriman
				<?php
				//$pak=mysqli_result(mysqli_query($conn,"SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'pos' AND TABLE_NAME = 'cart'"),0);
				
				//$date=date('YmdHi');
				//$faktur="".$date."/".$pak."";
				/*
				<tr>
				<td width='15%'>Faktur</td>
				<td><input type='hidden' name='faktur' class='form-control' value='$faktur'>$faktur</td>
				</tr>
				*/
				$pakus=mysqli_query($conn,"select * from customer where idcus='$sessioncus'");
				while($paku=mysqli_fetch_array($pakus))
					{
					$nama=$paku['nama'];
					$email=$paku['email'];
					$nohp=$paku['nohp'];
					$alamat=$paku['alamat'];
					$kota=$paku['kota'];
					$tgllhr=$paku['tgllhr'];
					}
				echo"<form method='post' action='konfirmasip.php'>";
				echo"
				<table class='table'>
				
				
				<tr>
				<td width='15%'>Nama</td>
				<td><input type='text' name='nama' class='form-control' required='' value='$nama'></td>
				</tr>

				<tr>
				<td>Email</td>
				<td><input type='email' name='email' class='form-control' required='' value='$email'></td>
				</tr>

				<tr>
				<td>Tgl Lahir</td>
				<td>";?>
				<div class="input-group date" data-provide="datepicker">
						<input type="text" data-date-format="yyyy-mm-dd" class="form-control" name='tgllhr' required="" value="<?php echo"$tgllhr"; ?>">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
				
				<!--<input type='text' name='tgllhr' class='form-control' required=''>-->
				<?php echo"
				</td>
				</tr>

				<tr>
				<td>No HP</td>
				<td><input type='text' name='nohp' class='form-control' required='' value='$nohp'></td>
				</tr>

				<tr>
				<td>Alamat</td>
				<td><input type='text' name='alamat' class='form-control' required='' value='$alamat'></td>
				</tr>

				<tr>
				<td>Kota</td>
				<td>
				<input type='hidden' name='msessioncus' value='$sessioncus'>

				<input type='text' name='kota' class='form-control' required='' value='$kota'></td>
				</tr>

				</table>
				";
				
				?>
				</div>


				<div class="col-md-6">Detail Barang:<br>
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
				
				$a1=mysqli_query($conn,"select stock.nama, stock.kode, stock.merk, cartv.* from cartv left join stock on cartv.kode=stock.kode where cartv.session='$s'");
				while($a=mysqli_fetch_array($a1))
					{
					echo"
					<tr>
					<td align='center' valign='middle'>
					$a[kode] <br> $a[nama]</td>
					<td align='center' valign='middle'>$a[jml]
					<input type='hidden' name='jml[]' value='$a[jml]'>
					<input type='hidden' name='kode[]' value='$a[kode]'>
					<input type='hidden' name='harga[]' value='$a[harga]'>
					<br>
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
				<input type='hidden' name='session' value='$s'>
				<td align='right'>
				<a href='index.php'><input type='button' value='Lanjutkan Belanja' class='btn btn-warning'>
				</a> &nbsp;&nbsp;&nbsp;
				<input type='submit' value='Konfirmasi' class='btn btn-primary'></td>
				</tr>
				</table>
				</form>
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
