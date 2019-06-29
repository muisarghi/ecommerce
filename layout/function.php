<?php
ob_start();

include('inc/inc.php');


class go
{
function aboutus()
		{
		require 'inc/inc.php';
		?><!-- page -->
		
		
		</div></div></div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					<?php 
					$mycontents=mysqli_query($conn,"select judul, isi from content where judul like '%About Us%'");
					while($mycontent=mysqli_fetch_array($mycontents))
						{
						$judul=$mycontent['judul'];
						$isi=$mycontent['isi'];
						}
					?>
					<h3 class="tittle-w3l" align='center'><?php echo"$judul";?>
					</h3>
					<?php echo"$isi"; ?>
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}

function virtualtour()
		{
		require 'inc/inc.php';
		?><!-- page -->
		
		
		</div></div></div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					<?php 
					$mycontents=mysqli_query($conn,"select judul, isi from content where judul like '%Virtual %'");
					while($mycontent=mysqli_fetch_array($mycontents))
						{
						$judul=$mycontent['judul'];
						$isi=$mycontent['isi'];
						}
					?>
					<h3 class="tittle-w3l" align='center'><?php echo"$judul";?>
					</h3>
					<?php echo"$isi"; ?>
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}
	

function faqs()
		{
		require 'inc/inc.php';
		?><!-- page -->
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					<?php
					$mycontents=mysqli_query($conn,"select * from content where judul like '%FAQS%'");
					while($mycontent=mysqli_fetch_array($mycontents))
						{
						$judul=$mycontent['judul'];
						$isi=$mycontent['isi'];
						}
					?>
					<h3 class="tittle-w3l" align='center'><?php echo"$judul";?>
					</h3>
					<?php echo"$isi"; ?>
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}

function howtoshop()
		{
		require 'inc/inc.php';
		?><!-- page -->
		
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					<?php
					$mycontents=mysqli_query($conn,"select * from content where judul like '%How To Shop%'");
					while($mycontent=mysqli_fetch_array($mycontents))
						{
						$judul=$mycontent['judul'];
						$isi=$mycontent['isi'];
						}
					?>
					<h3 class="tittle-w3l" align='center'><?php echo"$judul";?>
					</h3>
					<?php echo"$isi"; ?>
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}
	
function lokasi()
		{
		require 'inc/inc.php';
		?><!-- page -->
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					<?php
					$mycontents=mysqli_query($conn,"select * from content where judul like '%Peta Lokasi%'");
					while($mycontent=mysqli_fetch_array($mycontents))
						{
						$judul=$mycontent['judul'];
						$isi=$mycontent['isi'];
						}
					?>
					<h3 class="tittle-w3l" align='center'><?php echo"$judul";?>
					</h3>
					<?php echo"$isi"; ?>
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}
	
function accountbank()
		{
		require 'inc/inc.php';
		?><!-- page -->
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					<?php
					$mycontents=mysqli_query($conn,"select * from content where judul like '%Bank Account%'");
					while($mycontent=mysqli_fetch_array($mycontents))
						{
						$judul=$mycontent['judul'];
						$isi=$mycontent['isi'];
						}
					?>
					<h3 class="tittle-w3l" align='center'><?php echo"$judul";?>
					</h3>
					<?php echo"$isi"; ?>
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}
	
function confirm()
		{
		require 'inc/inc.php';
		//include 'captcha.php';
		//session_start();
		$sesm=$_SESSION['id'];
		//echo"$sessioncus aa $sesm ";
		$a1=mysqli_query($conn,"select * from customer where idcus='$sesm'");
		while($a=mysqli_fetch_array($a1))
			{
			$nama=$a['nama'];
			$email=$a['email'];
			$nohp=$a['nohp'];
			}
		if($sesm>0)
			{
			echo"
			<a href='content.php?load=akun&sesm=$sesm'>Belanja</a>
			<i>|</i>
			</li>
			<li><a href='content.php?load=confirm'>KONFIRMASI</a><i>|</i></li>
			<li><a href='content.php?load=account&sesm=$sesm'>AKUN</a><i>|</i></li>
			<li><a href='logout.php'>LOGOUT</a></li>
			</ul>
			";
			}
		else
			{echo"";}
		?>
		
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					<h3 class="tittle-w3l" align='center'>Konfirmasi Pembayaran
					</h3><br>
					
					<form action="content.php?load=confirmp" method="post">
					
					<table width='100%' border='0' class='table'>
					<?php 
					if($sesm>0)
					{?>
					<tr>
					<td width='15%'>Nama</td>
					<td width='50%'><input type="text" name="nama" placeholder=""  class="form-control" value="<?php echo"$nama"; ?>" readonly></td>
					<td></td>
					</tr>

					<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder=""  class='form-control' value="<?php echo"$email"; ?>" readonly></td>
					<td></td>
					</tr>

					<tr>
					<td>Telepon/ HP</td>
					<td><input type="text" name="hp" placeholder=""  class='form-control' value="<?php echo"$nohp"; ?>" readonly></td>
					<td></td>
					</tr>
					<?php
					}
					else
					{?>
					<tr>
					<td width='15%'>Nama</td>
					<td width='50%'><input type="text" name="nama" placeholder=""  class="form-control" value="<?php echo"$nama"; ?>" ></td>
					<td></td>
					</tr>

					<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder=""  class='form-control' value="<?php echo"$email"; ?>" ></td>
					<td></td>
					</tr>

					<tr>
					<td>Telepon/ HP</td>
					<td><input type="text" name="hp" placeholder=""  class='form-control' value="<?php echo"$nohp"; ?>" ></td>
					<td></td>
					</tr>
					<?php }
					?>
					<tr>
					<td>No Tagihan/ Invoice</td>
					<td><input type="text" name="invoice" placeholder="" required="" class='form-control'></td>
					<td></td>
					</tr>

					<tr>
					<td>Jumlah Pembayaran</td>
					<td><input type="text" name="jmlrp" placeholder="" required="" class='form-control'></td>
					<td></td>
					</tr>

					<tr>
					<td>Tanggal Pembayaran</td>
					<td>
					<div class="input-group date" data-provide="datepicker">
						<input type="text" data-date-format="yyyy-mm-dd" class="form-control" name='tglbyr' required="">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-th"></span>
						</div>
					</div>
					</td>
					<td></td>
					</tr>

					<tr>
					<td>Pembayaran ke</td>
					<td><input type="text" name="norektuj" placeholder="" required="" class='form-control'></td>
					<td></td>
					</tr>
					
					<tr>
					<td>Bank Pengirim</td>
					<td><input type="text" name="bankcus" placeholder="" required="" class='form-control'></td>
					<td></td>
					</tr>

					<tr>
					<td>Nama Rekening</td>
					<td><input type="text" name="namacus" placeholder="" required="" class='form-control'></td>
					<td></td>
					</tr>

					<tr>
					<td>Catatan</td>
					<td><input type="text" name="note" placeholder="" required="" class='form-control'></td>
					<td></td>
					</tr>
					
					<tr>
					<td>Captcha</td>
					<td><img src='layout/captcha.php'></td>
					<td></td>
					</tr>
					
					<tr>
					<td>Isikan Captcha</td>
					<td><input type='text' name="isicaptcha" required="" class='form-control'></td>
					<td></td>
					</tr>
					
					
					<!--<script src='https://www.google.com/recaptcha/api.js'></script>
					<tr>
					<td></td>
					<td><div class="g-recaptcha" data-sitekey="6LcnmKUUAAAAAKemKf8SrAXSmmVytGcJEQGHhaId"></div></td>
					<td></td>
					</tr>-->

					<tr>
					<td></td>
					<td><input type="submit" value="Kirim" class='btn btn-primary'></td>
					<td></td>
					</tr>


					</table>

								 
									
							
							
						</form>
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->
		
		<?php
		}

function confirmp()
		{
		require 'inc/inc.php';
		?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$hp=$_POST['hp'];
		$invoice=$_POST['invoice'];
		$jmlrp=$_POST['jmlrp'];
		$tglbyr=$_POST['tglbyr'];
		$norektuj=$_POST['norektuj'];
		$bankcus=$_POST['bankcus'];
		$namacus=$_POST['namacus'];
		$note=$_POST['note'];
		
		/*$captcha= $_POST['g-recaptcha-response'];
		$secretKey= "6LcnmKUUAAAAAKmxmUnjTBEVlIIkE76H7DbhWgfR";
		$ip= $_SERVER['REMOTE_ADDR'];
		$response= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
		$responseKeys	= json_decode($response,true);*/
	 
		//if(intval($responseKeys["success"]) !== 1) 
		if($_SESSION["Captcha"]!=$_POST["isicaptcha"])
			{
			header("Location: content.php?load=confirm");
			}
		else
			{
			$inconfirm=mysqli_query($conn,"insert into confirm values ('', '$nama', '$email', '$hp', '$invoice', '$jmlrp', '$tglbyr', '$norektuj', '$bankcus', '$namacus', '$note')");
			if($inconfirm)
				{header("location: content.php?load=confirma");}
			else
				{header("location: content.php?load=confirm&msg=FAILED");}
			}
		}
	
function confirma()
		{
		require 'inc/inc.php';
		//echo"<h2 align='center'>Terima Kasih <br><br> Konfirmasi Pembayaran Anda Telah Kami Terima</h2>";
		?>
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					
					<h3 class="tittle-w3l" align='center'>Terima Kasih <br><br> Konfirmasi Pembayaran Anda Telah Kami Terima
					</h3>
					
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}

function contactus()
		{
		require 'inc/inc.php';
		$sesm=$_SESSION['id'];
		//echo"$sessioncus aa $sesm ";
		$a1=mysqli_query($conn,"select * from customer where idcus='$sesm'");
		while($a=mysqli_fetch_array($a1))
			{
			$nama=$a['nama'];
			$email=$a['email'];
			$nohp=$a['nohp'];
			}
		?>
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					<h3 class="tittle-w3l" align='center'>Contact Us
					</h3><br>
					<h4>Anda dapat menghubungi kami dengan mengisi form kontak dibawah ini :</h4><br>
					

					<form action="content.php?load=contactusp" method="post">
					
					<table width='100%' border='0' class='table'>
					<?php
					if($sesm>0)
					{ ?>
					<tr>
					<td width='15%'>Nama</td>
					<td width='50%'><input type="text" name="nama" placeholder=""  class="form-control" value="<?php echo $nama; ?>" readonly></td>
					<td></td>
					</tr>

					<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder=""  class='form-control' value="<?php echo $email; ?>" readonly></td>
					<td></td>
					</tr>
					<?php }
					else
					{ ?>
					<tr>
					<td width='15%'>Nama</td>
					<td width='50%'><input type="text" name="nama" placeholder=""  class="form-control" value="<?php echo $nama; ?>" ></td>
					<td></td>
					</tr>

					<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder=""  class='form-control' value="<?php echo $email; ?>" ></td>
					<td></td>
					</tr>
					<?php } ?>
					<tr>
					<td>Pokok Permasalahan</td>
					<td><input type="text" name="masalah" placeholder="" required="" class='form-control'></td>
					<td></td>
					</tr>
					
					<tr>
					<td>Pertanyaan</td>
					<td><textarea name="tanya" required="" class='form-control'></textarea></td>
					<td></td>
					</tr>
					
					<tr>
					<td>Captcha</td>
					<td><img src='layout/captcha.php'></td>
					<td></td>
					</tr>
					
					<tr>
					<td>Isikan Captcha</td>
					<td><input type='text' name="isicaptcha" required="" class='form-control'></td>
					<td></td>
					</tr>

					<!--<tr>
					<td></td>
					<td><div class="g-recaptcha" data-sitekey="6LcnmKUUAAAAAKemKf8SrAXSmmVytGcJEQGHhaId"></div></td>
					<td></td>
					</tr>-->

					<tr>
					<td></td>
					<td><input type="submit" value="Kirim" class='btn btn-primary'></td>
					<td></td>
					</tr>


					</table>

								 
									
							
							
						</form>
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->
		
		<?php
		}

function contactusp()
		{
		require 'inc/inc.php';
		?>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$masalah=$_POST['masalah'];
		$tanya=$_POST['tanya'];
		$date=date('Y-m-d');
		
		/*$captcha= $_POST['g-recaptcha-response'];
		$secretKey= "6LcnmKUUAAAAAKmxmUnjTBEVlIIkE76H7DbhWgfR";
		$ip= $_SERVER['REMOTE_ADDR'];
		$response= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
		$responseKeys	= json_decode($response,true);*/
	 
		//if(intval($responseKeys["success"]) !== 1) 
		if($_SESSION["Captcha"]!=$_POST["isicaptcha"])
			{
			header("Location: content.php?load=contactus");
			}
		else
			{
			$inconfirm=mysqli_query($conn,"insert into contact values ('', '$date', '$nama', '$email', '$masalah', '$tanya','0')");
			if($inconfirm)
				{header("location: content.php?load=contactusa");}
			else
				{header("location: content.php?load=contact&msg=FAILED");}
			}
		}
	
function contactusa()
		{
		require 'inc/inc.php';
		//echo"<h2 align='center'>Terima Kasih <br><br> Konfirmasi Pembayaran Anda Telah Kami Terima</h2>";
		?>
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					
					<h3 class="tittle-w3l" align='center'>Terima Kasih <br><br> Pertanyaan/ Permasalahan Anda Telah Kami Terima
					</h3>
					
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}

function testi()
		{
		require 'inc/inc.php';
		$sesm=$_SESSION['id'];
		//echo"$sessioncus aa $sesm ";
		$a1=mysqli_query($conn,"select * from customer where idcus='$sesm'");
		while($a=mysqli_fetch_array($a1))
			{
			$nama=$a['nama'];
			$email=$a['email'];
			$nohp=$a['nohp'];
			}
		?>
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading <script src='https://www.google.com/recaptcha/api.js'></script>-->
					<h3 class="tittle-w3l" align='center'>Testimonial
					</h3><br>
					
					<div class='col-md-12'>
					<div class='col-md-6'>
					<form action="content.php?load=testip" method="post" enctype="multipart/form-data">
					
					<table width='100%' border='0' class='table'>
					<?php
					if($sesm>0)
					{ ?>	
					<tr>
					<td width='15%'>Nama</td>
					<td width='50%'><input type="text" name="nama" placeholder="" value="<?php echo $nama; ?>" readonly class="form-control"></td>
					<td></td>
					</tr>

					<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder="" value="<?php echo $email; ?>" readonly class='form-control'></td>
					<td></td>
					</tr>
					<?php
					}
					else
					{ ?>
					<tr>
					<td width='15%'>Nama</td>
					<td width='50%'><input type="text" name="nama" placeholder="" value="<?php echo $nama; ?>"  class="form-control"></td>
					<td></td>
					</tr>

					<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder="" value="<?php echo $email; ?>"  class='form-control'></td>
					<td></td>
					</tr>
					<?php }
					?>
					<tr>
					<td>Foto</td>
					<td><input type="file" name="file" placeholder="" class='form-control'></td>
					<td></td>
					</tr>

					<tr>
					<td>Testimonial</td>
					<td><textarea name="testi" required="" class='form-control'></textarea></td>
					<td></td>
					</tr>
					
					<!--
					<tr>
					<td></td>
					<td><div class="g-recaptcha" data-sitekey="6LcnmKUUAAAAAKemKf8SrAXSmmVytGcJEQGHhaId"></div></td>
					<td></td>
					</tr>
					-->

					<tr>
					<td>Captcha</td>
					<td><img src='layout/captcha.php'></td>
					<td></td>
					</tr>
					
					<tr>
					<td>Isikan Captcha</td>
					<td><input type='text' name="isicaptcha" required="" class='form-control'></td>
					<td></td>
					</tr>

					<tr>
					<td></td>
					<td><input type="submit" value="Kirim" class='btn btn-primary'></td>
					<td></td>
					</tr>


					</table>
					</form>
					</div>


					<div class='col-md-6'>
					<?php //where status='1'
					if(!isset($_GET['page']))
						{
						$page = 1;
						} 
					else 
						{
						$page = $_GET['page'];
						}
											
					$max_results =5;
					$from=(($page*$max_results)-$max_results);

					$mytest=mysqli_query($conn,"select * from testi where status='1' order by idtesti DESC limit $from, $max_results");
					while($mytes=mysqli_fetch_array($mytest))
						{
						echo"
                        <div class='card bg-info'>
                            <div class='card-body'>";
							//<img src='img/testi/user.png' width='100px' height='100px' align='left'>
							$file ='img/testi/'.$mytes['idtesti'].'.jpg';
							if (is_file($file))
								{echo"<img src='img/testi/".$mytes['idtesti'].".jpg' width='100px' height='100px' align='left' class='imgtesti'>";}
							else
								{echo"<img src='img/testi/user.png' width='100px' height='100px' align='left' class='imgtesti'>";}
							echo"
							<blockquote class='blockquote mb-0 text-light'>
							<p class='text-light'><b>$mytes[nama]</b></p>
							<font size='2'>$mytes[tgl]</font>
							<br>
							<a><i class='fa fa-hand-o-down'></i></a>
							<br>
							<p class='text-light'>&nbsp;&nbsp;
							&nbsp;&nbsp; $mytes[testi]</p>                                    
							</blockquote>
                            </div>
                        </div>
						";
						}
					//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from testi where status='1'"),0);
					$jmlresult=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from testi where status='1'  ");
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
						echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=testi&page=$prev\">&lt;&lt;Prev</a> </li>";
						}

					for($i = 1; $i <= $total_pages; $i++)
						{
						if(($page) == $i)
							{
							echo "<li class='active'><a href=\"".$_SERVER['PHP_SELF']."?load=testi&page=$i\">$i</a> </li>";
							} 
						else 
							{
							echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=testi&page=$i\">$i</a> </li>";
							}
						}
					
					
					if($page < $total_pages)
						{
						$next = ($page + 1);
						echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=testi&page=$next\">Next>></a></li>";
						} 
						echo"</ul>
						<p> $total_results Testimonial</p></center> 
					";
					?>
					</div>
					</div>
					


					
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->
		
		<?php
		}

function testip()
		{
		require 'inc/inc.php';
		//<script src='https://www.google.com/recaptcha/api.js'></script>
		$nama=$_POST['nama'];
		$isicaptcha=$_POST['isicaptcha'];
		$email=$_POST['email'];
		$testi=$_POST['testi'];
		$date=date('Y-m-d');
		
		$filename=$_FILES['file']['name'];
		$filesz=$_FILES['file']['size'];
		$file=$_FILES['file']['tmp_name'];
		
		
		/*$captcha= $_POST['g-recaptcha-response'];
		$secretKey= "6LcnmKUUAAAAAKmxmUnjTBEVlIIkE76H7DbhWgfR";
		$ip= $_SERVER['REMOTE_ADDR'];
		$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
		$responseKeys=json_decode($response,true);*/
	 
		//if(intval($responseKeys["success"]) !== 1) 
		if($_SESSION["Captcha"]!=$_POST["isicaptcha"])
			{
			header("Location: content.php?load=testi&msg=failed");
			//echo"failed";
			}
		else
			{
			$inconfirm=mysqli_query($conn,"insert into testi values ('', '$date', '$nama', '$email', '$testi', '0')");
			$idnya=mysqli_insert_id($conn);
			$copia= copy($_FILES['file']['tmp_name'],'img/testi/'.$idnya.'.jpg');

			if($inconfirm)
				{header("location: content.php?load=testia");}
			else
				{header("location: content.php?load=testia&msg=FAILED");}
			}
		}
	
	
function testia()
		{
		require 'inc/inc.php';
		//echo"<h2 align='center'>Terima Kasih <br><br> Konfirmasi Pembayaran Anda Telah Kami Terima</h2>";
		?>
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					
					<h3 class="tittle-w3l" align='center'>Terima Kasih <br><br> Atas Testimonial Anda Kepada Kami
					</h3>
					
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}


function signup()
	{
	require 'inc/inc.php';
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	//echo"$password <br> ".$_POST['password']."";
	
	$a=mysqli_query($conn,"insert into customer values ('', '$nama', '$email', '', '', '', '', 'y')");
	$b=mysqli_insert_id($conn);
	$c=mysqli_query($conn,"insert into usercus values ('', '$b', '$username', '$password')");
	if($c)
		{header('location: content.php?load=signupa');}
	else
		{header('location: content.php?load=signupa');}
		
	}

function signupa()
		{
		require 'inc/inc.php';
		//echo"<h2 align='center'>Terima Kasih <br><br> Konfirmasi Pembayaran Anda Telah Kami Terima</h2>";
		?>
		
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
					<!-- tittle heading -->
					
					<h3 class="tittle-w3l" align='center'>Terima Kasih <br><br> Anda Telah Menjadi Member Kami
					<br>Silahkan Login Terlebih Dahulu
					</h3>
					
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}

function login()
	{
	require 'inc/inc.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (!isset($username) || !isset($password)) 
		{
		header( "Location: index.php?msg=Masukkan Username, Password Dengan Benar." );
		}

	elseif (empty($username) || empty($password)) 
		{
		header( "Location: index.php?msg=Masukkan Username, Password Dengan Benar." );
		}

	else
		{

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		include ('inc/inc.php');
		$pes2=MD5($password);
		$cari="SELECT *FROM usercus where user='$username' and pass='$pes2'";
		$hasil=mysqli_query($conn,$cari);
		if($hasil)
		while($data=mysqli_fetch_array($hasil))
		{
		$id=$data['idcus'];
		}

		$a1=mysqli_query($conn,"select *from usercus where user='$username' and pass='$pes2'");
		while($a=mysqli_fetch_array($a1))
		{
		$id=$a['idcus'];
		//$ket=$a['ket'];
		}

		//////////// USER LOG
		$tglskr=date('Y-m-d');
		$tglwkt=date('Y-m-d H:i');
		$ipc=$_SERVER["REMOTE_ADDR"];
		
		session_start();
		$_SESSION['id']=$id;
		$_SESSION['sesket']='cust';
		/*
		if($ket=='admin')
			{$loc='../admin/index.php';}
		else
			{
			$loc='index.php';
			}
		*/
		$loc="index.php?ow";
		header("Location: $loc");
		}
	}

function akun()
	{
	require 'inc/inc.php';
	$sesm=$_GET['sesm'];
	echo"
	<a href='content.php?load=akun&sesm=$sesm'>Belanja</a>
	<i>|</i>
	</li>
	<li><a href='content.php?load=confirm'>KONFIRMASI</a><i>|</i></li>
	<li><a href='content.php?load=account&sesm=$sesm'>AKUN</a><i>|</i></li>
	<li><a href='logout.php'>LOGOUT</a></li>
	</ul>
	</div>
	</div>
	</div>
		
	<section class='terms-of-use'>
		<div class='terms'>
			<div class='container'>
			<h3 align='left'>Daftar Belanja
			</h3>
			<table class='table table-striped'>
			<tr>
			<td align='center'>No</td>
			<td align='center'>Faktur</td>
			<td align='center'>Tanggal</td>
			<td align='center'>Pemesan</td>
			<td align='center'>Kota</td>
			<td align='center'>Jumlah</td>
			<td align='center'>Status</td>
			</tr>";
			if(!isset($_GET['page']))
					{
					$page = 1;
					} 
				else 
					{
					$page = $_GET['page'];
					}
								
			$max_results =10;
			$from=(($page*$max_results)-$max_results);

				$a1=mysqli_query($conn,"select 
				a.idcustomer, a.faktur, date_format(a.tgl, '%d-%m-%Y') as tanggal, a.status,
				b.faktur, sum(b.total) as totalx,
				c.nama, c.kota
				from cart a left join cartdetail b on a.faktur=b.faktur
				left join customer c on a.idcustomer=c.idcus where a.idcustomer='$sesm' group by a.faktur desc
				limit $from, $max_results
				");
			$no=1;
			while($a=mysqli_fetch_array($a1))
				{
			echo"
			<tr>
			<td align='center'>$no</td>
			<td align='center'><a href='content.php?load=dakun&id=$a[faktur]&sesm=$sesm'>$a[faktur]</a></td>
			<td align='center'>$a[tanggal]</td>
			<td align='center'>$a[nama]</td>
			<td align='center'>$a[kota]</td>
			<td align='right'>".number_format($a['totalx'],0,',',',')."</td>
			<td align='center'>";
			if($a['status']==0){echo"Belum Terbayar";}
			elseif($a['status']==1){echo"Terbayar";}
			elseif($a['status']==2){echo"Pengiriman";}
			elseif($a['status']==3){echo"Selesai";}
			else{echo"Belum Terbayar";}
			echo"</td>
			</tr>
			";
			$no++;
			}
		echo"
		</table>
		";
		//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from cart "),0);
		$totresu=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from cart");
		while($totres=mysqli_fetch_array($totresu))
			{$total_results=$totres['jmlresult'];}
		$total_pages = ceil($total_results / $max_results);
	
		//echo "<center>[Page]<br>";
		echo"<center>";
		echo"<ul class='pagination'>";
		if($page > 1)
			{
			$prev = ($page - 1);
			echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=shop&page=$prev\">&lt;&lt;Prev</a> </li>";
			}

		for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				echo "<li class='active'><a href=\"".$_SERVER['PHP_SELF']."?load=shop&page=$i\">$i</a> </li>";
				} 
			else 
				{
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=shop&page=$i\">$i</a> </li>";
				}
			}
							
			if($page < $total_pages)
				{
				$next = ($page + 1);
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=shop&page=$next\">Next>></a></li>";
				} 
			echo"</ul>
			<p>Terdapat $total_results Data Belanja Anda</p></center> 
			";


			echo"
			</div>
		</div>
	</section>";
	}


function dakun()
	{
	require 'inc/inc.php';
	$sesm=$_GET['sesm'];
	echo"
	<a href='content.php?load=akun&sesm=$sesm'>Belanja</a>
	<i>|</i>
	</li>
	<li><a href='content.php?load=confirm'>KONFIRMASI</a><i>|</i></li>
	<li><a href='content.php?load=account&sesm=$sesm'>AKUN</a><i>|</i></li>
	<li><a href='logout.php'>LOGOUT</a></li>
	</ul>
	</div>
	</div>
	</div>
		
	<section class='terms-of-use'>
		<div class='terms'>
			<div class='container'>";
			
	$id=$_GET['id'];
	if(isset($_GET['inv']))
		{$inv=$_GET['inv'];}
	else
		{$inv=$id;}
	if(isset($_GET['invb']))
		{$invb=$_GET['invb'];}
	else
		{$invb='invoice';}
	echo"<h3 align='center'>Detail Pesanan $id</h3><br>";
	echo"Data Pemesan";
	$a1=mysqli_query($conn,"select customer.*, cart.* from customer left join cart on cart.faktur='$id' where cart.idcustomer=customer.idcus");
	while($a=mysqli_fetch_array($a1))
		{
		$nama=$a['nama'];
		$email=$a['email'];
		$nohp=$a['nohp'];
		$alamat=$a['alamat'];
		$kota=$a['kota'];
		$bkirim=$a['bkirim'];
		$status=$a['status'];
		$ket=$a['ket'];
		}
	//STATUS==0/BELUM TERBAYAR
	if($status==0)
		{
		$sta0=''; $sele0='selected'; $sta2=''; $sele2='';
		$sta1=''; $sele1=''; $sta3=''; $sele3='';
		}
	elseif($status==1)
		{
		$sta0='disabled'; $sele0=''; $sta2=''; $sele2='';
		$sta1=''; $sele1='selected'; $sta3=''; $sele3='';
		}
	elseif($status==2)
		{
		$sta0='disabled'; $sele0=''; $sta2=''; $sele2='selected';
		$sta1='disabled'; $sele1=''; $sta3=''; $sele3='';
		}
	elseif($status==3)
		{
		$sta0='disabled'; $sele0=''; $sta2='disabled'; $sele2='';
		$sta1='disabled'; $sele1=''; $sta3=''; $sele3='selected';
		}
	else
		{
		$sta0=''; $sele0='selected'; $sta2=''; $sele2='';
		$sta1=''; $sele1=''; $sta3=''; $sele3='';
		}
	echo"
	
	<table class='table'>
	<tr>
	<td width='10%'>Nama</td>
	<td width='30%'>: $nama</td>
	<td width='10%'>HP</td>
	<td>: $nohp</td>
	
	<td rowspan='2' width='20%'>
	
	</td>
	</form>
	</tr>

	<tr>
	<td>Alamat</td>
	<td>: $alamat <br>&nbsp;&nbsp;$kota</td>
	<td>Email</td>
	<td>: $email</td>
	</tr>

	</table>
	
	
	Data Produk
	<table class='table table-bordered'>
	<tr>
	<td align='center'>No</td>
	<td align='center'>Kode</td>
	<td align='center'>Produk</td>
	<td align='center'>Jumlah</td>
	<td align='center'>@ Harga</td>
	<td align='center'>Sub Total</td>
	</tr>
	";
	$b1=mysqli_query($conn,"select a.*, b.kode, b.nama as nmproduk from cartdetail a left join stock b on a.kode=b.kode where a.faktur='$id'");
	$no=1;
	while($b=mysqli_fetch_array($b1))
		{
		echo"
		<tr>
		<td>$no</td>
		<td>$b[kode]</td>
		<td>$b[nmproduk]</td>
		<td align='center'>$b[jml]</td>
		<td align='right'>".number_format($b['harga'],0,',',',')."</td>
		<td align='right'>".number_format($b['total'],0,',',',')."</td>
		</tr>
		";
		$no++;
		}
	//$c=mysqli_result(mysqli_query($conn,"select sum(total) from cartdetail where faktur='$id'"),0);
	$cxx=mysqli_query($conn,"select sum(total) as cc from cartdetail where faktur='$id'");
	while($cx=mysqli_fetch_array($cxx))
	{$c=$cx['cc'];}
	echo"
	<tr>
	<td colspan='5' align='right'><b>TOTAL</b></td>
	<td align='right'>".number_format($c,0,',',',')."</td>
	</tr>
	
	<tr>
	<td colspan='5' align='right'>Biaya Kirim</td>
	<td align='right'>".number_format($bkirim,0,',',',')."</td>
	</tr>
	</form>
	
	<tr>
	<td colspan='5' align='right'><b>TOTAL PEMBAYARAN</b></td>
	<td align='right'>".number_format($bkirim+$c,0,',',',')."</td>
	</tr>
	
	";
	echo"</table>
	<br>
	<table class='table table-bordered'>
	<tr>
	<td width='30%'><b>Detail Status</b></td>
	</tr>

	<tr>
	<td>";
	echo"
	<table width='100%'>";
	$detstatus=explode('#',$ket);
	for($ix=0;$ix<count($detstatus);$ix++)
		{
		$detstatu=explode('*',$detstatus[$ix]);
		echo"
		<tr>
		<td width='10%'>- $detstatu[0]</td>
		<td>$detstatu[1]</td>
		</tr>";
		}
	
	echo"
	</table>
	";
	echo"
	</td>

	
	</tr>
	</table>
	";


	echo"
			</div>
		</div>
	</section>";
	}

function account()
	{
	require 'inc/inc.php';
	$sesm=$_GET['sesm'];
	$a1=mysqli_query($conn,"select customer.*, usercus.* from customer left join usercus on customer.idcus=usercus.idcus where customer.idcus='$sesm'");
	while($a=mysqli_fetch_array($a1))
		{
		$nama=$a['nama'];
		$email=$a['email'];
		$nohp=$a['nohp'];
		$alamat=$a['alamat'];
		$kota=$a['kota'];
		$tgllhr=$a['tgllhr'];
		$user=$a['user'];
		$pass=$a['pass'];
		}
	echo"
	<a href='content.php?load=akun&sesm=$sesm'>Belanja</a>
	<i>|</i>
	</li>
	<li><a href='content.php?load=confirm'>KONFIRMASI</a><i>|</i></li>
	<li><a href='content.php?load=account&sesm=$sesm'>AKUN</a><i>|</i></li>
	<li><a href='logout.php'>LOGOUT</a></li>
	</ul>
	</div>
	</div>
	</div>
		
	<section class='terms-of-use'>
		<div class='terms'>
			<div class='container'>
			<h3 align='left'>Account
			</h3>
			<table width='60%' border='0'>
			<tr>
			<td>
			<table class='table table-striped'>
			<form method='post' action='content.php?load=saccount'>
			<tr>
			<td width='20%'>Nama</td>
			<td><input type='text' name='nama' value='$nama' required='' class='form-control'></td>
			</tr>

			<tr>
			<td>Email</td>
			<td><input type='email' name='email' value='$email' required='email' class='form-control'></td>
			</tr>
			
			<tr>
			<td>Tgl Lahir</td>
			<td>
			<div class='input-group date' data-provide='datepicker'>
			<input type='text' data-date-format='yyyy-mm-dd' class='form-control' name='tgllhr' required='' value='$tgllhr'>
				<div class='input-group-addon'>
				<span class='glyphicon glyphicon-th'></span>
				</div>
			</div>
			</td>
			</tr>

			<tr>
			<td>HP</td>
			<td><input type='text' name='nohp' value='$nohp' required='' class='form-control'></td>
			</tr>
			
			<tr>
			<td>Alamat</td>
			<td><input type='text' name='alamat' value='$alamat' required='' class='form-control'></td>
			</tr>
			
			<tr>
			<td>Kota</td>
			<td><input type='text' name='kota' value='$kota' required='' class='form-control'></td>
			</tr>
			
			<tr>
			<td></td>
			<td>
			<input type='hidden' name='idcus' value='$sesm'>
			<input type='submit' value='SIMPAN' class='btn btn-primary'></td>
			</tr>
			</form>

			<tr>
			<td></td>
			<td><i>".$_GET['msg']."</i></td>
			</tr>

			<tr>
			<td><b>Ganti Password</b></td>
			<td>&nbsp;</td>
			</tr>
			
			<form method='post' action='content.php?load=spass'>
			<tr>
			<td>Username</td>
			<td><input type='text' name='kota' value='$user' required='' class='form-control' readonly></td>
			</tr>

			<tr>
			<td>Password Lama</td>
			<td><input type='password' name='passlama' required='' class='form-control'></td>
			</tr>
			
			<tr>
			<td>Password Baru</td>
			<td><input type='password' name='passbaru' required='' class='form-control'></td>
			</tr>
			
			<tr>
			<td></td>
			<td>
			<input type='hidden' name='pass' value='$pass'>
			<input type='hidden' name='idcus' value='$sesm'>
			<input type='submit' value='GANTI PASSWORD' class='btn btn-danger'></td>
			</tr>
			</form>
			</table>
			</td>
			</tr>
			</table>
			</div>
		</div>
	</section>";
	}

function saccount()
	{
	require 'inc/inc.php';
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$tgllhr=$_POST['tgllhr'];
	$nohp=$_POST['nohp'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$idcus=$_POST['idcus'];
	$a=mysqli_query($conn,"update customer set nama='$nama', email='$email', nohp='$nohp', alamat='$alamat', kota='$kota', tgllhr='$tgllhr' where idcus='$idcus'");
	if($a)
		{header('location: content.php?load=account&sesm='.$idcus.'&msg=succes');}
	else
		{header('location: content.php?load=account&sesm='.$idcus.'&msg=f');}
	}

function spass()
	{	
	require 'inc/inc.php';
	$idcus=$_POST['idcus'];
	$pass=$_POST['pass'];
	$passlama=md5($_POST['passlama']);
	$passbaru=md5($_POST['passbaru']);
	echo"a $pass<br>b $passlama";
	
	if($pass==$passlama)
		{
		$a=mysqli_query($conn,"update usercus set pass='$passbaru' where idcus='$idcus'");
		if($a)
			{header('location: content.php?load=account&sesm='.$idcus.'&msg=Password Telah Diganti');}
		else
			{header('location: content.php?load=account&sesm='.$idcus.'&msg=f');}
		}
	else
		{header('location: content.php?load=account&sesm='.$idcus.'&msg=Masukkan Password Lama Dengan Benar');}
		
	}

function article()
		{
		require 'inc/inc.php';
		?><!-- page -->
		
		<h2>Artikel</h2>
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
				<?php
				if(!isset($_GET['page']))
					{
					$page = 1;
					} 
				else 
					{
					$page = $_GET['page'];
					}
								
				$max_results =5;
				$from=(($page*$max_results)-$max_results);

				$a1=mysqli_query($conn,"select * from content where ket='article' limit $from, $max_results");
				while($a=mysqli_fetch_array($a1))
				{
				echo"<h2><a href='content.php?load=denews&id=$a[id]&ld=article'>$a[judul]</a><h2>";
				echo"<font size='2'>$a[tgl]</font>";
				echo"<br>".substr($a['isi'],0,1000)." ...";
				echo"<hr><br>";
				}
				
				//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from content where ket='article'"),0);
				$jmlresult=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from content where ket='article'");
						while($jmresult=mysqli_fetch_array($jmlresult))
						{
						$total_results=$jmresult['jmlresult'];
						}
				$total_pages = ceil($total_results / $max_results);
	
		//echo "<center>[Page]<br>";
		echo"</div>
			</div><center>";
		echo"<ul class='pagination'>";
		if($page > 1)
			{
			$prev = ($page - 1);
			echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=article&page=$prev\">&lt;&lt;Prev</a> </li>";
			}

		for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				echo "<li class='active'><a href=\"".$_SERVER['PHP_SELF']."?load=article&page=$i\">$i</a> </li>";
				} 
			else 
				{
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=article&page=$i\">$i</a> </li>";
				}
			}
							
			if($page < $total_pages)
				{
				$next = ($page + 1);
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=article&page=$next\">Next>></a></li>";
				} 
			echo"</ul>
			</font>
			<p>Terdapat $total_results Artikel</p></center> 
			";
				?>
					
				
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}

function news()
		{
		require 'inc/inc.php';
		?><!-- page -->
		
		<h2>News</h2>
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
				<?php
				if(!isset($_GET['page']))
					{
					$page = 1;
					} 
				else 
					{
					$page = $_GET['page'];
					}
								
				$max_results =5;
				$from=(($page*$max_results)-$max_results);
				
				$a1=mysqli_query($conn,"select * from content where ket='news' limit $from, $max_results");
				while($a=mysqli_fetch_array($a1))
				{
				echo"<h2><a href='content.php?load=denews&id=$a[id]&ld=news'>$a[judul]</a><h2>";
				echo"<font size='2'>$a[tgl]</font>";
				echo"<br>".substr($a['isi'],0,1000)." ...";
				echo"<hr><br>";
				}
				
				//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from content where ket='news'"),0);
				$jmlresult=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from content where ket='news'  ");
						while($jmresult=mysqli_fetch_array($jmlresult))
						{
						$total_results=$jmresult['jmlresult'];
						}
				$total_pages = ceil($total_results / $max_results);
	
		//echo "<center>[Page]<br>";
		echo"</div>
			</div><center>";
		echo"<ul class='pagination'>";
		if($page > 1)
			{
			$prev = ($page - 1);
			echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=news&page=$prev\">&lt;&lt;Prev</a> </li>";
			}

		for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				echo "<li class='active'><a href=\"".$_SERVER['PHP_SELF']."?load=news&page=$i\">$i</a> </li>";
				} 
			else 
				{
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=news&page=$i\">$i</a> </li>";
				}
			}
							
			if($page < $total_pages)
				{
				$next = ($page + 1);
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=news&page=$next\">Next>></a></li>";
				} 
			echo"</ul>
			</font>
			<p>Terdapat $total_results News</p></center> 
			";
				?>
					
				
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
		}

function denews()
	{
	require 'inc/inc.php';
	$id=$_GET['id'];
	$ld=$_GET['ld'];
	echo"
	<h2>".strtoupper($ld)."</h2> "; ?>
		</div>
		</div>
		</div>
		<!-- //page -->
		<!-- Terms of use-section -->
		
		<section class="terms-of-use">
			<!-- terms -->
			<div class="terms">
				<div class="container">
				<?php

				$a1=mysqli_query($conn,"select * from content where id='$id'");
				while($a=mysqli_fetch_array($a1))
				{
				$judul=$a['judul'];
				$isi=$a['isi'];
				$tgl=$a['tgl'];
				$dupdate=$a['dupdate'];
				
				}
				echo"<h2 align='center'>$judul<h2>";
				echo"<font size='2'>$tgl</font>";
				echo"<br>$isi";
				echo"<right><i><font size='2'>Update pada $dupdate</font></i></right>";
				echo"<br><br>
				<center><a href='content.php?load=$ld'><i class='fa fa-arrow-circle-left'></i></a></center>
				<hr><br>";
				?>
					
				</div>
			</div>
			<!-- /terms -->
		</section>
		<!-- //Terms of use-section -->

		<?php
	}


}

?>