<?php
include('inc/inc.php');
include('layout/header.php');
?>
	
	
	<!-- banner -->
	<div class="col-md-12">

	<?php include ('layout/slider.php');?>
	


	<!--ICON ICON 
	MAKANAN
	BATIK
	HANDICRAFT
	PIA
	KAOS
	SPREI BEDCOVER
	-->
	
	<div class="agileinfo-ads-display col-md-12">
		<div class="menuround">
			<?php
			echo"<div class='col-md-6'><center>";
			$menua=mysqli_query($conn,"select * from merk where kode between '01' and '03'");
			while($menu=mysqli_fetch_array($menua))
				{	
				echo"
				<div class='col-md-4 col-xs-4'>
				<center><a href='index_kat.php?c=$menu[kode]'><img src='img/menu$menu[kode].png'><br>$menu[keterangan]</a></center>
				</div>
				";
				}
			echo"</div><center><div class='col-md-6 '>";
			$menub=mysqli_query($conn,"select * from merk where kode between '04' and '07'");
			while($men=mysqli_fetch_array($menub))
				{	//img/$men[kode].png
				echo"
				<div class='col-md-3 col-xs-4'>
				<center><a href='index_kat.php?c=$men[kode]'><img src='img/menu$men[kode].png'><br>$men[keterangan]</a></center>
				</div>
				";
				}
			echo"</div>";
			?>
			
		</div>
		<div class="clearfix"></div>
	</div>

	<!-- ICON ICON --- -->

	<div class="ads-gridx">&nbsp;
	</div>


	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			
			<!-- <h3 class="tittle-w3l">Produk Unggulan
				<span class="heading-style">
					<!--<i></i>
					<i></i>
					<i></i> 
				</span>
			</h3> -->
			<!-- //tittle heading -->
			<?php include('layout/leftside.php'); ?>
 			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle">Sprei</h3>
						
						<?php
						$prod01=mysqli_query($conn,"select * from stock where merk='01' order by oldtgl DESC limit 5");
						while($pro01=mysqli_fetch_array($prod01))
							{
								//SINGLE HTML -> DETAIL
							$file ='picture/'.$pro01['merk'].'/'.$pro01['kode'].'.JPG';
							if (is_file($file)) 
								{$pic="picture/$pro01[merk]/$pro01[kode].JPG";}
							else
								{$pic="img/produk0.png";}
							//col-md-3 col-xs-4
							//col-md-2 product-men
							echo"
							<div class='col-md-3 col-xs-4'>
							<div class='men-pro-item simpleCart_shelfItem'>
								<div class='men-thumb-item'>
									<img src='$pic' alt=''>
									<div class='men-cart-pro'>
										<div class='inner-men-cart-pro'>
											<a href='single.php?id=$pro01[kode]' class='link-product-add-cart'>Detail</a>
										</div>
									</div>
									<span class='product-new-top'>New</span>
								</div>
								<div class='item-info-product '>
									<h4>
										<a href='single.php?id=$pro01[kode]'>$pro01[nama]</a>
									</h4>
									<div class='info-product-price'>
										<span class='item_price'>Rp "; echo number_format($pro01['hj'],0,',',','); echo" </span>
										";
									echo"
									</div>
									<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out'>";
									/*
										<form action='#' method='post'>
											<fieldset>
												<input type='hidden' name='cmd' value='_cart' />
												<input type='hidden' name='add' value='1' />
												<input type='hidden' name='business' value=' ' />
												<input type='hidden' name='item_name' value='Almonds, 100g' />
												<input type='hidden' name='amount' value='149.00' />
												<input type='hidden' name='discount_amount' value='1.00' />
												<input type='hidden' name='currency_code' value='USD' />
												<input type='hidden' name='return' value=' ' />
												<input type='hidden' name='cancel_return' value=' ' />
												<input type='submit' name='submit' value='Beli' class='button' />
											</fieldset></form>
										*/
										echo"<a href='single.php?id=$pro01[kode]'><input type='button' name='submit' value='Beli' class='button' /></a>
										
										
										
									</div>

								</div>
							</div>
						</div>
							";
							}
						?>
						
						<div class="clearfix"></div>
					</div>
					

					<div class="product-sec1">
						<h3 class="heading-tittle">Kaos & Batik</h3>
						<?php
						$prod02=mysqli_query($conn,"select * from stock where merk='02' order by oldtgl DESC limit 3");
						while($pro02=mysqli_fetch_array($prod02))
							{
							$file2 = 'picture/'.$pro02['merk'].'/'.$pro02['kode'].'.JPG';
							if (file_exists($file2)) 
								{$pic2="picture/$pro02[merk]/$pro02[kode].JPG";}
							else
								{$pic2="img/produk0.png";}
							
							echo"
							<div class='col-md-4 product-men2'>
								<div class='men-pro-item simpleCart_shelfItem'>
									<div class='men-thumb-item2'>
									<img src='$pic2' alt=''>
										<div class='men-cart-pro'>
											<div class='inner-men-cart-pro'>
											<a href='single.php?id=$pro02[kode]' class='link-product-add-cart'>Detail</a>
											</div>
										</div>
										<span class='product-new-top'>New</span>
									</div>
									<div class='item-info-product '>
									<h4>
									<a href='single.php?id=$pro02[kode]'>$pro02[nama]</a>
									</h4>
										<div class='info-product-price'>
										<span class='item_price'>Rp. "; echo number_format($pro02['hj'],0,',',','); echo"</span>
										
										</div>
										
										<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out'>";
										/*
										<form action='#' method='post'>
										<fieldset>
										<input type='hidden' name='cmd' value='_cart' />
										<input type='hidden' name='add' value='1' />
										<input type='hidden' name='business' value=' ' />
										<input type='hidden' name='item_name' value='Freedom Sunflower Oil, 1L' />
										<input type='hidden' name='amount' value='78.00' />
										<input type='hidden' name='discount_amount' value='1.00' />
										<input type='hidden' name='currency_code' value='USD' />
										<input type='hidden' name='return' value=' ' />
										<input type='hidden' name='cancel_return' value=' ' />
										<input type='submit' name='submit' value='Beli' class='button' />
										</fieldset>
										</form>*/
										echo"<a href='single.php?id=$pro02[kode]'><input type='button' name='submit' value='Beli' class='button' /></a>
										</div>

									</div>
								</div>
							</div>
							";
							}
						?>
						

						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					
					<div class="product-sec1">
					<h3 class="heading-tittle">Camilan</h3>
						
						<?php
						$prod03=mysqli_query($conn,"select * from stock where merk='03' order by oldtgl DESC limit 3");
						while($pro03=mysqli_fetch_array($prod03))
							{
							$file3 = 'picture/'.$pro03['merk'].'/'.$pro03['kode'].'.JPG';
							if (file_exists($file3)) 
								{$pic3="picture/$pro03[merk]/$pro03[kode].JPG";}
							else
								{$pic3="img/produk0.png";}
							echo"
							<div class='col-md-4 product-men2'>
								<div class='men-pro-item simpleCart_shelfItem'>
									<div class='men-thumb-item2'>
									<img src='$pic3' alt=''>
										<div class='men-cart-pro'>
											<div class='inner-men-cart-pro'>
											<a href='single.php?id=$pro03[kode]' class='link-product-add-cart'>Detail</a>
											</div>
										</div>
									</div>
									
									<div class='item-info-product '>
									<h4>
									<a href='single.php?id=$pro03[kode]'>$pro03[nama]</a>
									</h4>
										<div class='info-product-price'>
										<span class='item_price'>Rp "; echo number_format($pro03['hj'],0,',',','); echo"</span>	
										</div>
										
										<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out'>";
										/*
										<form action='#' method='post'>
										<fieldset>
										<input type='hidden' name='cmd' value='_cart' />
										<input type='hidden' name='add' value='1' />
										<input type='hidden' name='business' value=' ' />
										<input type='hidden' name='item_name' value='YiPPee Noodles, 65g' />
										<input type='hidden' name='amount' value='15.00' />
										<input type='hidden' name='discount_amount' value='1.00' />
										<input type='hidden' name='currency_code' value='USD' />
										<input type='hidden' name='return' value=' ' />
										<input type='hidden' name='cancel_return' value=' ' />
										<input type='submit' name='submit' value='BELI' class='button' />
										</fieldset>
										</form>*/
										echo"<a href='single.php?id=$pro03[kode]' ><input type='button' name='submit' value='Beli' class='button' /></a>
										</div>
									</div>
								</div>
							</div>
							";
							}
						?>

						<div class="clearfix"></div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	
	<!-- newsletter 
	
	<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Get your Groceries delivered from local stores</h2>
				<p>Free Delivery on your first order!</p>
				<form action="#" method="post">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="images/tab3.png" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	
	</div>
	<!-- 
	
	//newsletter -->
	<!-- footer -->
	

<?php
include ('layout/footer.php');
?>
<script>
            $(window).load(function()
			{
				$('#myModal3').modal('show');
			});
            </script>