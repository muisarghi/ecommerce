<?php
//session_start();
$sesid=session_id();
include('inc/inc.php');
include('layout/header.php');
$id=$_GET['id'];
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
	
	
	
	<?php
	$a1=mysqli_query($conn,"select merk.*, stock.* from stock left join merk on stock.merk=merk.kode where stock.kode='$id'");
	while($a=mysqli_fetch_array($a1))
		{
		$kode=$a['kode'];
		$nama=$a['nama'];
		$satuan=$a['satuan'];
		$hj=$a['hj'];
		$keterangan=$a['keterangan'];
		$merk=$a['merk'];
		}
	?>

	<div class="col-md-12 col-xs-12">
	<!-- top Products -->
		<div class="ads-gridx">
			<div class="container"> 
			<h2 align="center"></h2>
				<div class="col-md-5 single-right-left ">
					<div class="grid images_3_of_2">

					<img src="<?php echo"picture/$merk/$kode.JPG"; ?>" data-imagezoom="true" class="img-responsive" alt="">
					
					
					</div>
				</div>
				
				<div class="col-md-7 single-right-left simpleCart_shelfItem">
				
				<h2><?php echo"$nama"; 
				?></h2>
				<br>
				<form action="cartp.php" method="post">
				<br><br>
				<table border='0' width='100%'>
				<tr>
				<td width='15%'>Kode</td>
				<td>: <?php echo"$kode"; ?></td>
				</tr>

				<tr>
				<td>Nama</td>
				<td>: <?php echo"$nama"; ?></td>
				</tr>
				
				<tr>
				<td>Kategori</td>
				<td>: <?php echo"$keterangan"; ?></td>
				</tr>

				<tr>
				<td>Satuan</td>
				<td>: <?php echo"$satuan"; ?></td>
				</tr>
				
				<tr>
				<td>Harga</td>
				<td>: Rp. <?php echo number_format($hj,0,',',','); ?></td>
				</tr>

				<tr>
				<td>Jumlah</td>
				<td>: <input type='text' name='jml' value='1'></td>
				
				</tr>
				</table>
				
				
				
				<br><br><br>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						
							<fieldset>
								<?php
								echo"
								<input type='hidden' name='kode' value='$kode'>
								<input type='hidden' name='harga' value='$hj'>
								<input type='hidden' name='session' value='$sesid'>
								";
								?>
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>

			
			</div> <!--container -->
		</div>
			<!-- //product right -->
	
	
	

<?php
include ('layout/footer.php');
?>
<!-- FlexSlider -->
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->
<script src="js/imagezoom.js"></script>