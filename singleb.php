<?php
include('inc/inc.php');
include('layout/header.php');
$c=$_GET['c'];
?>
	
	
	<!-- banner -->
	<div class="col-md-12">

	<div class="col-md-8">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>

		
		<div class="carousel-inner" role="listbox">
			
			
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<!--
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="product.html">Shop Now </a>
						-->
					</div>
				</div>
			</div>
			
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<!--
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="product.html">Shop Now </a>
						-->
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<!--
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						<a class="button2" href="product.html">Shop Now </a>
						-->
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<!--<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="product.html">Shop Now </a>
						-->
					</div>
				</div>
			</div> 
			
		</div>
		
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	</div>
	<!-- //banner -->
	
	<div class="col-md-4">
		<div class="adv"></div>
		<div class="adv"></div>
	</div>
	</div>


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
			echo"
			<div class='col-md-6'><center>";
			$menua=mysqli_query($conn,"select * from merk where kode between '01' and '03'");
			while($menu=mysqli_fetch_array($menua))
				{
				if($c==$menu['kode'])
					{
					echo"
					<div class='col-md-4 col-xs-4'>
					<center><img src='img/$menu[kode].png'><br>$menu[keterangan]</center>
					</div>
					";
					}
				else
					{
					echo"
					<div class='col-md-4 col-xs-4'>
					<center><a href='index_kat.php?c=$menu[kode]'><img src='img/$menu[kode].png'><br>$menu[keterangan]</a></center>
					</div>
					";
					}
				}
			echo"
			</div><center>
			
			<div class='col-md-6 '>";
			$menub=mysqli_query($conn,"select * from merk where kode between '04' and '07'");
			while($men=mysqli_fetch_array($menub))
				{	
				if($c==$men['kode'])
					{
					echo"
					<div class='col-md-3 col-xs-4'>
					<center><img src='img/$men[kode].png'><br>$men[keterangan]</center>
					</div>
					";
					}
				else
					{
					echo"
					<div class='col-md-3 col-xs-4'>
					<center><a href='index_kat.php?c=$men[kode]'><img src='img/$men[kode].png'><br>$men[keterangan]</a></center>
					</div>
					";
					}
				}
			echo"
			</div>";
			?>
			
		</div>
	</div>

	<!-- ICON ICON --- -->
	<div class="col-md-12 col-xs-12">
		<div class="ads-gridx">
		</div>
	</div>
	
	<div class="col-md-12 col-xs-12">
	<!-- top Products -->
		<div class="ads-grid">
		<div class="container"> 
			<?php include('layout/leftside.php'); 
			$mykat=mysqli_query($conn,"select * from merk where kode='$c'");
			while($mykate=mysqli_fetch_array($mykat))
				{
				$nmmerk=$mykate['keterangan'];
				}
			?>
 			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle"><?php echo"$nmmerk"; ?></h3>
						
						<?php
						$prod01=mysqli_query($conn,"select * from stock where merk='$c' order by oldtgl DESC limit 50");
						while($pro01=mysqli_fetch_array($prod01))
							{
								//SINGLE HTML -> DETAIL
							$file ='picture/'.$pro01['merk'].'/'.$pro01['kode'].'.JPG';
							if (is_file($file)) 
								{$pic="picture/$pro01[merk]/$pro01[kode].JPG";}
							else
								{$pic="img/produk0.png";}
							echo"
							<div class='col-md-3 col-xs-4 '>
							<div class='men-pro-item simpleCart_shelfItem'>
								<div class='men-thumb-item'>
									<img src='$pic' alt=''>
									<div class='men-cart-pro'>
										<div class='inner-men-cart-pro'>
											<a href='single.php?id=$pro01[kode]' class='link-product-add-cart'>Detail</a>
										</div>
									</div>";
									//<span class='product-new-top'>New</span>
								echo"
								</div>
								<div class='item-info-product '>
									<h4>
										<a href='single.php?id=$pro01[kode]'>".substr($pro01['nama'],0, 10)."</a>
									</h4>
									<div class='info-product-price'>
										<span class='item_price'>Rp "; echo number_format($pro01['hj'],0,',',','); echo" </span>
										";
									echo"
									</div>
									<div class='snipcart-details top_brand_home_details item_add single-item hvr-outline-out'>
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
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
							";
							}
						?>
						
						<div class="clearfix"></div>
					</div>
				
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	
	

<?php
include ('layout/footer.php');
?>
