
<ul class="nav navbar-nav">
	<?php
	$_ld=$_GET['load'];
	if($_ld=='home'){echo"<li class='activi'>";} else {echo"<li class=''>";}
	echo"<a href='index.php?load=home'><i class='fa fa-laptop'></i> Home </a>
	";?>
	</li>
	
	
	<?php
	if($_ld=='content' or $_ld=='slider' or $_ld=='contact' or $_ld=='testi' or $_ld=='advs' or $_ld=='article'){echo"<li class='menu-item-has-children dropdown'>";} else {echo"<li class='menu-item-has-children dropdown'>";}
	//echo"<a href='index.php?load=content'><span class='span'>Content</span></a>";
	//echo"<a href='index.php?load=content'><i class='fa fa-file-text-o'></i> Content</a>";
	?>
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text-o"></i> Content</a>
		<ul class="sub-menu childreen dropdown-menu">
		
		<?php if($_ld=='content'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=content"> <i class="fa fa-file-text-o"></i> Data Content</a></li>

		<?php if($_ld=='article'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=article"> <i class="fa fa-archive"></i> Artikel</a></li>

		<?php if($_ld=='news'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=news"> <i class="fa fa-columns"></i> News</a></li>

		<?php if($_ld=='contact'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=contact"> <i class="fa fa-volume-control-phone"></i> Contact Us</a></li>

		<?php if($_ld=='testi'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=testi"> <i class="fa fa-comment"></i> Testimonial</a></li>

		<!--<?php if($_ld=='slider'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=slider"> <i class="fa fa-picture-o"></i> Image Slide</a></li> -->

		<?php if($_ld=='advsmain'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=advsmain"> <i class="fa fa-picture-o"></i> Slide Utama</a></li>

		<!--
		<?php if($_ld=='advs'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=advs"> <i class="fa fa-apple"></i> Iklan </a></li> -->

		<?php if($_ld=='advstop'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=advstop"> <i class="fa fa-apple"></i> Iklan Atas</a></li>

		<?php if($_ld=='advsbot'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=advsbot"> <i class="fa fa-apple"></i> Iklan Bawah</a></li>

		</ul>


	</li>
	
	
	<?php
	if($_ld=='merk'){echo"<li class='activi'>";} else {echo"<li class=''>";}
	echo"<a href='index.php?load=merk'><i class='fa fa-building-o'></i> Departemen</a>
	";?>
	</li>
	
	
	<?php
	//if($_ld=='shop' or $_ld=='confirm'){echo"<li class='menu-item-has-children activi'>";} else {echo"<li class='menu-item-has-children'>";}
if($_ld=='shop' or $_ld=='confirm'){echo"<li class='activi'>";} else {echo"<li class=''>";}
	//echo"<a href='index.php?load=content'><span class='span'>Content</span></a>";
	//echo"<a href='index.php?load=content'><i class='fa fa-file-text-o'></i> Content</a>";
	?>

	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i> Shopping Cart</a>
		<ul class="sub-menu childreen dropdown-menu">
		
		<?php if($_ld=='shop'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=shop"> <i class="fa fa-tags"></i> Data Pemesanan</a></li>

		<?php if($_ld=='confirm'){echo"<li class='activi'>";} else {echo"<li class=''>";} ?>	
		<a href="index.php?load=confirm"> <i class="fa fa-id-card-o"></i> Konfirmasi Pembayaran</a></li>

		

		</ul>


	</li>

	
	<?php
	if($_ld=='account'){echo"<li class='activi'>";} else {echo"<li class=''>";}
	echo"<a href='index.php?load=account'><i class='fa fa-user'></i> Account</a>
	";?>
	</li>


	<li>
	<?php
	echo"<a href='logout.php'><i class='fa fa-power-off'></i> Logout</a>
	";?>
	</li>
	
	
	<!--s
	<li class="menu-item-has-children dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<span class="span">Content</span>
	</a>
	<ul class="sub-menu children dropdown-menu">
	<li><a href="ui-buttons.html">Buttons</a></li>
	-->
</ul>

