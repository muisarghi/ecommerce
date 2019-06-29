<?php
session_start();

//echo"aa $sessioncus";
@ini_set('display_errors', 'off');
ob_start();
//if($_SESSION['id'])
if(isset($_SESSION['id']))
{$sessioncus=$_SESSION['id'];

	if($_SESSION['sesket']=='cust')
	{echo"&nbsp;";}
	else
	{header('location: admin/index.php');}
//require 'inc/inc.php';
// $nuny=$mysqli_query($conn,"select * from customer where idcus='$sessioncus'");
//while($nun=mysqli_fetch_array($nuny))
//	{$namacus=$nun['nama'];}
}
else
{$sessioncus=0;}

//require '../inc/inc.php';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>GoedangOlehOleh | Pusat Belanja Oleh Oleh Khas Malang </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="Goedang Oleh Oleh, Malang" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/themify-icons.css" rel="stylesheet">
	
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range  -->
	
	<link rel="stylesheet" type="text/css" href="datepicker/css/bootstrap-datepicker.min.css">

		<script src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="datepicker/js/bootstrap-datepicker.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<script src="js/rupiah.js"></script>
	
	

</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>Pusat Belanja Oleh Oleh Khas Malang </p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<!-- <h1> -->
					<a href="index.php ">
						<!--<span>G</span>rocery 
						<span>S</span>hoppy-->
						<img src="img/logoGO.png" alt=" " width="50%">
					</a>
				<!-- </h1> -->
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<!--<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">-->
							<a href="content.php?load=lokasi">
							<span class="fa fa-map-marker" aria-hidden="true"></span> Lokasi</a>
					</li>
					<li>
						<!--<a href="#" data-toggle="modal" data-target="#myModalConfirm">-->
							<a href="content.php?load=confirm">
							<span class="fa fa-credit-card" aria-hidden="true"></span>Konfirmasi</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 081335060700
					</li>

					<?php
					if($sessioncus>0)
						{
						include '../inc/inc.php';
						//$cona=mysqli_connect("localhost","root","","pos");

						$nuny=mysqli_query($conn,"select * from customer where idcus='$sessioncus'");
						while($nun=mysqli_fetch_array($nuny))
						{$namacus=$nun['nama'];}
						//echo"aaa $server";
						
						?>
						<li>
						<!--<a href="#" data-toggle="modal" data-target="#myModalConfirm">-->
							<a href="content.php?load=akun&sesm=<?php echo $sessioncus; ?>">
							<span class="fa fa-user" aria-hidden="true"></span><?php echo $namacus; ?></a>
						</li>

						<li>
						<!--<a href="#" data-toggle="modal" data-target="#myModalConfirm">-->
							<a href="logout.php">
							<span class="fa fa-power-off" aria-hidden="true"></span>Logout</a>
						</li>
						<?php
						}
					else
					{ ?>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Login </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Daftar
							</a>
					</li>
						<?php } ?>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="index_cr.php" method="get">
						<input name="search" type="search" placeholder="Pencarian Produk..." required="" value="<?php echo $search; ?>">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
					<?php
					//session_start();
					$sesid=session_id();
					$myblj=mysqli_query($conn,"select count(*) as jblj from cartv where session='$sesid'");
					while($mybl=mysqli_fetch_array($myblj))
						{$jblj=$mybl['jblj'];}
					echo"<a href='troli.php?s=$sesid'>";
					//class="w3view-cart"
					?>
					<button class="btn btn-danger" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true">
					</i> &nbsp;&nbsp; <span class="badge badge-primary"><?php echo $jblj; ?></span>
					</button>
					</a>
						<!--
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>
						-->
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	
	
	<!-- MODAL CONFIRM -->
	<div class="modal fade" id="myModalConfirm" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<!--<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>-->
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Konfirmasi Pembayaran</h3>
						<p>
							Silahkan melakukan konfirmasi pembayaran dengan mengisi secara lengkap form dibawah ini :
							<!--<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>-->
						</p>
						<form action="content.php?load=login" method="post">
							
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>

							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- END MODAL COFIRM -->


	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Login</h3>
						
						<form action="content.php?load=login" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="username" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Daftar</h3>
						<p>
							Pendaftaran Akun
						</p>
						<form action="content.php?load=signup" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Nama" name="nama" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="email" required="">
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Username" name="username" required="">
							</div>
							
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							</div>
							<input type="submit" value="Sign Up">
						</form>
						
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	
	<!-- MODAL 3 WELCOME-->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					
					<div class="modal_body_left modal_body_left1">
						<!-- <h3 class="agileinfo_sign">Sign In </h3> -->
						<center>
						<img src="img/logoGO.png" width="250">
						</center>
						<p align="center">
							Selamat Datang di Gudang Oleh Oleh
							<br>
							Tersedia berbagai macam oleh-oleh khas Indonesia terutama Malang
						</p>
						<br>
						<center>
						<input  type="submit" class="blj" data-dismiss="modal" value="BELANJA SEKARANG"></button>
						</center>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	
	<div class="ban-top">
		<div class="container">
			
				<!--<div class="agileits-navi_search">AA<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" required="">
						<option value="">All Categories</option>
						<option value="Kitchen">Kitchen</option>
						<option value="Household">Household</option>
						<option value="Snacks &amp; Beverages">Snacks & Beverages</option>
						<option value="Personal Care">Personal Care</option>
						<option value="Gift Hampers">Gift Hampers</option>
						<option value="Fruits &amp; Vegetables">Fruits & Vegetables</option>
						<option value="Baby Care">Baby Care</option>
						<option value="Soft Drinks &amp; Juices">Soft Drinks & Juices</option>
						<option value="Frozen Food">Frozen Food</option>
						<option value="Bread &amp; Bakery">Bread & Bakery</option>
						<option value="Sweets">Sweets</option>
					</select>
				</form></div>-->
			
			<div class="top_nav_left">
				<nav class="navbar navbar-defaults">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<?php
													$menupro1=mysqli_query($conn,"select * from merk order by kode ASC");
													while($menupro=mysqli_fetch_array($menupro1))
													{
													echo"
													<li><a href='index_kat.php?c=$menupro[kode]'>$menupro[keterangan]</a></a></li>
													";
													}
													?>
												</ul>
											</div>
											
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>


								<li class="">
									<a class="nav-stylehead" href="content.php?load=aboutus">About Us</a>
								</li>
								
								<li class="">
									<a class="nav-stylehead" href="content.php?load=contactus">Contact Us</a>
								</li>

								<li class="">
									<a class="nav-stylehead" href="content.php?load=lokasi">Peta Lokasi</a>
								</li>

								<li class="">
									<a class="nav-stylehead" href="content.php?load=faqs">FAQs</a>
								</li>

								<li class="">
									<a class="nav-stylehead" href="content.php?load=howtoshop">How To Shop</a>
								</li>

								<li class="">
									<a class="nav-stylehead" href="content.php?load=virtual">Virtual Tour 3D</a>
								</li>
								
								
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	
	</div>
	
	
	<!-- //navigation -->
	
	