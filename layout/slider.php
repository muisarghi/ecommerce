<div class="col-md-8">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active">
			</li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>

		
		<div class="carousel-inner" role="listbox">
			<?php
			$iklanmain1=mysqli_query($conn,"select * from slider where ket='advsmain' order by urut ASC");	
			$iklanmainno=0;
			while($iklanmain=mysqli_fetch_array($iklanmain1))
				{	
				if($iklanmainno==0)
					{
					echo"
					<div class='item item active'><img src='img/slider/$iklanmain[file]'>
						<div class='container'>
							<div class='carousel-caption'>
							</div>
						</div>
					</div>	
					";
					}
				else
					{
					echo"
					<div class='item item'><img src='img/slider/$iklanmain[file]'>
						<div class='container'>
							<div class='carousel-caption'>
							</div>
						</div>
					</div>	
					";
					}
				$iklanmainno++;
				}
			?>

			<!--
			<div class="item active"><img src='img/slide1.png'>
				<div class="container">
					<div class="carousel-caption">
						<!--
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="product.html">Shop Now </a>
						
					</div>
				</div>
			</div>
			
			<div class="item item2"><img src='img/slide2.png'>
				<div class="container">
					<div class="carousel-caption">
						<!--
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="product.html">Shop Now </a>
						
					</div>
				</div>
			</div>
			<div class="item item3"><img src='img/slide3.png'>
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
						
					</div>
				</div>
			</div>
			<div class="item item4"><img src='img/slide4.png'>
				<div class="container">
					<div class="carousel-caption">
						<!--<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="product.html">Shop Now </a>
						
					</div>
				</div>
			</div> 
			-->
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
	
	<!-- IKLAN ATAS -->
	<div class="col-md-4 col-xs-12">
		<div class="col-md-12 col-xs-6">
		<div class="adv1"><center>
		
		<!--<img src="img/iklan1.png" align='middle'>-->
		<div id="myCarousel" class="carousel slide vertical" data-ride="carousel">
		<!-- Indicator-->

		<div class="carousel-inner" role="listbox">
			<!--
			<div class="item item6 active"><img src='img/iklan1.png'>
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>
			
			<div class="item item6"><img src='img/iklan2.png'>
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>
			-->
			<?php 
			//@ini_set('display_errors', 'on');
			$iklanatas1=mysqli_query($conn,"select * from slider where ket='advstop' order by urut ASC");	
			$iklanatasno=0;
			while($iklanatas=mysqli_fetch_array($iklanatas1))
				{
				if($iklanatasno==0)
					{
					echo"
					<div class='item item6 active'><img src='img/slider/$iklanatas[file]'>
						<div class='container'>
							<div class='carousel-caption'>
							</div>
						</div>
					</div>	
					";
					}
				else
					{
					echo"
					<div class='item item6'><img src='img/slider/$iklanatas[file]'>
						<div class='container'>
							<div class='carousel-caption'>
							</div>
						</div>
					</div>	
					";
					}
				$iklanatasno++;
				}
			?>
			
			
			
			
		</div>
		</div>
		<!------------------------------------------>
		</center>
		</div>
		</div>

		<div class="col-md-12 col-xs-6">
		<div class="adv2"><center>
		<!--<img src="img/iklan2.png" align='middle'></center>-->
		
		<div id="myCarousel" class="carousel slide vertical" data-ride="carousel">
		<!-- Indicator-->
		

		<div class="carousel-inner" role="listbox">
		<?php
			$iklanbawah1=mysqli_query($conn,"select * from slider where ket='advsbot' order by urut ASC");
			
			$iklanbawahno=0;
			while($iklanbawah=mysqli_fetch_array($iklanbawah1))
				{
				if($iklanbawahno==0)
					{
					echo"
					<div class='item item6 active'><img src='img/slider/$iklanbawah[file]'>
						<div class='container'>
							<div class='carousel-caption'>
							</div>
						</div>
					</div>	
					";
					}
				else
					{
					echo"
					<div class='item item6'><img src='img/slider/$iklanbawah[file]'>
						<div class='container'>
							<div class='carousel-caption'>
							</div>
						</div>
					</div>	
					";
					}
				$iklanbawahno++;
				}
			?>
			<!--
			<div class="item item6 active"><img src='img/iklan3.png'>
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>
			
			<div class="item item6"><img src='img/iklan4.png'>
				<div class="container">
					<div class="carousel-caption">
						
					</div>
				</div>
			</div>
			-->
			
			
		</div>
		</div>
		<!------------------------------------------>
		</center>

		</div>
		</div>
		<div class="clearfix"></div>
	</div>
<div class="clearfix"></div>
	</div>
	
<div class="clearfix"></div>

