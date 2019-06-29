<?php
@ini_set('display_errors', 'off');
//session_start();
$sesid=session_id();
$search=$_GET['search'];
require('inc/inc.php');
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
			
			?>
 			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						<h3 class="heading-tittle"><?php echo"Pencarian Produk: $search"; ?></h3>
						<br>
						<?php
						if(!isset($_GET['page']))
							{
							$page = 1;
							} 
						else 
							{
							$page = $_GET['page'];
							}
						
						$max_results =50;
						$from=(($page*$max_results)-$max_results);

						$prod01=mysqli_query($conn,"select * from stock where kode like '%$search%' or  nama like '%$search%' order by nama ASC limit $from, $max_results");
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
											</fieldset>
										</form>
										*/
										?>
										
										
										<!--<a href='#mycart' data-toggle='modal' data-id='<?php echo"$pro01[kode]#$sesid#$pro01[hj]#$pro01[nama]"; ?>'>-->
										<a href="single.php?id=<?php echo"$pro01[kode]";?>">
										<input type='button' name='submit' value='Beli' class='button' /></a>
										
										<!--
										<a href="javascript:;" 
										data-kode="<?php echo "$pro01[kode]"; ?>" 
										data-nama="<?php echo "$pro01[nama]"; ?>"
										data-harga="<?php echo "$pro01[hj]"; ?>"
										data-sesid="<?php echo "$pro01[kode]+$sesid"; ?>"
										data-id="<?php echo "$sesid"; ?>"
										data-toggle="modal" data-target="#mycart"><input type='button' name='submit' value='Beli' class='button' />
										</a>-->
										
									<?php
									echo"
									</div>

								</div>
							</div>
						</div>
							";
							}
						?>
						
						<div class="clearfix"></div>

						<?php
					//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from stock where kode like '%$search%' or  nama like '%$search%'"),0);
					$jmlresult=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from stock where kode like '%$search%' or  nama like '%$search%'  ");
						while($jmresult=mysqli_fetch_array($jmlresult))
						{
						$total_results=$jmresult['jmlresult'];
						}
					$total_pages = ceil($total_results / $max_results);
	
					//echo "<center>[Page]<br>";
					echo"<center>";
					echo"<ul class='pagination'>";
					if($page > 1)
						{
						$prev = ($page - 1);
						echo "<li><a href=\"".$_SERVER['PHP_SELF']."?search=$search&page=$prev\">&lt;&lt;Prev</a> </li>";
						}

					for($i = 1; $i <= $total_pages; $i++)
						{
						if(($page) == $i)
							{
							echo "<li class='active'><a href=\"".$_SERVER['PHP_SELF']."?search=$search&page=$i\">$i</a> </li>";
							} 
						else 
							{
							echo "<li><a href=\"".$_SERVER['PHP_SELF']."?search=$search&page=$i\">$i</a> </li>";
							}
						}
					
					
					if($page < $total_pages)
						{
						$next = ($page + 1);
						echo "<li><a href=\"".$_SERVER['PHP_SELF']."?search=$search&page=$next\">Next>></a></li>";
						} 
						echo"</ul>
						<p>Terdapat $total_results Produk Hasil Pencarian</p></center> 
					";

							
					?>

					</div>
					

					
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					
					
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

	<div class="modal fade" id="mycart" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Cart  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                           <div id="fetched-data">
						   <?php 
						   ?>
						   </div>
						   
						
							</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                                <input type="submit" class="btn btn-primary" value='SIMPAN'></button>
                            </div>
                        </div>
                    </div>
                </div>
				</form>

<?php 
//include 'url.php'; echo"".$f."cart.php";
?>
<script src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#mycart').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : "post",
				url : "cart.php",
				data :  "rowid="+ rowid,
                success : function(data){
                $("#fetched-data").html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#mycart').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id_').attr("value",div.data('id'));
					modal.find('#id').attr("value",div.data('id'));
					modal.find('#judul').attr("value",div.data('judul'));
					modal.find('#judul_').attr("value",div.data('judul'));
				}
				);
			}
		);
		</script>

<?php
include ('layout/footer.php');
?>
