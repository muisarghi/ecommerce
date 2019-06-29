<?php
ob_start();


class go
{

function home()
	{
		echo"HALAMAN ADMINISTRATOR <br><br><br><br><br><br><br>";	
		//go::coba();
	}
	
function content()
	{
	require '../inc/inc.php';
	if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}
		echo"<h3 align='center'>Daftar Content</h3>
		<br>
		<p align='center'>
		<a href='index.php?load=newcontent&ket='><i class='fa fa-file-o'></i><br>New</a>
		<br>
		<table class='table table-striped'>
		<tr>
		<td align='center'>No</td>
		<td align='center'>Judul</td>
		<td align='center'>Tanggal</td>
		<td align='center'>Update</td>
		<td align='center' colspan='2'>Act</td>
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

		$a1=mysqli_query($conn,"select * from content where ket='' order by id DESC limit $from, $max_results");
		$no=1;
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<tr>
			<td align='center'>$no</td>
			<td align='center'>$a[judul]</td>
			<td align='center'>$a[tgl]</td>
			<td align='center'>$a[dupdate]</td>
			<td align='center'><a href='index.php?load=dcontent&id=$a[id]&ket=content'><i class='fa fa-edit'></a></td>
			<td align='center'>";
			?>
			<!--<a href="javascript:;" data-judul="<?php echo "$a[judul]"; ?>" data-id="<?php echo "$a[id]"; ?>" data-toggle="modal" data-target="#hps">
			<i class='fa fa-trash-o'></i>-->

			<?php
			echo"<a href='index.php?load=delcontent&id=$a[id]&ket=content' OnClick='return confirm(\"Hapus Content ?\");'><i class='fa fa-trash-o'></i></a>";
			echo"
			</td>
			</tr>
			";
			?>
			
			<?php
			$no++;
			}
		echo"
		</table>
		";
		//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from content where ket=''"),0);
		$totres=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from content where ket=''");
		while($totresu=mysqli_fetch_array($totres))
			{$total_results=$totresu['jmlresult'];}
		$total_pages = ceil($total_results / $max_results);
	
		//echo "<center>[Page]<br>";
		echo"<center>";
		echo"<ul class='pagination'>";
		if($page > 1)
			{
			$prev = ($page - 1);
			echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=content&page=$prev\">&lt;&lt;Prev</a> </li>";
			}

		for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				echo "<li class='active'><a href=\"".$_SERVER['PHP_SELF']."?load=content&page=$i\">$i</a> </li>";
				} 
			else 
				{
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=content&page=$i\">$i</a> </li>";
				}
			}
							
			if($page < $total_pages)
				{
				$next = ($page + 1);
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=content&page=$next\">Next>></a></li>";
				} 
			echo"</ul>
			<p>Terdapat $total_results Content</p></center> 
			";
		?>
		
		<div class="modal fade" id="hps" tabindex="-1" role="document">
			<div class="modal-dialog modal-sm" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Menghapus Content Berikut:
					</p>
					
					<form action="index.php?ket=c" method="post">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" class="form-control" id="judul_" name="judul" disabled>
						<input type="hidden" class="form-control" id="judul" name="data" >
						<input type="hidden" class="form-control" id="id" name="id" >
						<input type="hidden" class="form-control" name="link" value="content">
						<input type="hidden" class="form-control" name="tbl" value="content">
						</div>
						
						<!--<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" id="id" name="id" class="form-control">
						</div>
						
						<div class="styled-input">
						<input type="password" placeholder="Password" name="password" required="">
						</div>-->
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Hapus</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#hps').on('show.bs.modal', function (event) 
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
	}
	
function newcontent()
		{
		require '../inc/inc.php';
		$ket=$_GET['ket'];
		?>
		
		<?php
		echo"<h3 align='center'>CONTENT BARU</h3>
		<br>
		<form action='index.php?load=contentin' method='post'>
		<table width='100%'>
		<tr>
		<td width='10%'>Judul</td>
		<td><input type='text' name='judul' size='40'><br><br></td>
		</tr>

		<tr>
		<td>Isi</td>
		<td>";
		?>
		<textarea id="ckeditor1" name="isi"></textarea>
		<!--
		<script src="../js/jquery-2.1.4.min.js"></script>
		<script src="../ckeditor/ckeditor.js"></script>
		
		
		<script type="text/javascript">
			$(function () {
				CKEDITOR.replace('ckeditor1');
				
			});
			
		</script> -->
		
		<!--<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script> -->
		
		
		<script src="../js/jquery-2.1.4.min.js"></script>
		
		<script src="ckeditor.js"></script>
		<script type="text/javascript">
		
		CKEDITOR.replace( 'ckeditor1',{height: 300} );
		</script>

		

		<?php
		echo"</td>
		</tr>

		<tr>
		<td colspan='2'>
		<input type='hidden' name='ket' value='$ket'>
		<input type='submit' value='simpan' class='btn btn-primary'></td>
		</tr>
		</table>
		</form>
		";
		?>
		
		<?php
		}
	
function dcontent()
		{
		require '../inc/inc.php';
		$id=$_GET['id'];
		$ket=$_GET['ket'];
		$a1=mysqli_query($conn,"select * from content where id='$id'");
		while($a=mysqli_fetch_array($a1))
			{
			$judul=$a['judul'];
			$isi=$a['isi'];
			}
		echo"<h3 align='center'>EDIT CONTENT</h3>
		<br>
		<form action='index.php?load=contentup' method='post'>
		<table width='100%'>
		<tr>
		<td width='20%'>Judul</td>
		<td><input type='text' name='judul' size='40' value='$judul'><br><br></td>
		</tr>
		
		<tr>
		<td>Isi</td>
		<td>";
		?>
		<textarea id="ckeditor1" name="isi"><?php echo"$isi"; ?></textarea>
		<!--
		<script src="../js/jquery-2.1.4.min.js"></script>
		<script src="../ckeditor/ckeditor.js"></script>
		
		
		<script type="text/javascript">
			$(function () {
				CKEDITOR.replace('ckeditor1');
				
			});
			
		</script> -->
		
		<!--<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script> -->
		
		
		<script src="../js/jquery-2.1.4.min.js"></script>
		
		<script src="ckeditor.js"></script>
		<script type="text/javascript">
		
		CKEDITOR.replace( 'ckeditor1',{height: 300} );
		</script>

		

		<?php
		echo"</td>
		</tr>

		<tr>
		<td colspan='2'>
		<input type='hidden' name='ket' value='$ket'>
		<input type='hidden' name='id' value='$id'>
		<input type='submit' value='simpan' class='btn btn-primary'></td>
		</tr>
		</table>
		</form>
		";
		?>
		
		<?php
		}

function contentin()
		{require '../inc/inc.php';
		$ket=$_POST['ket'];
		if($ket=='')
			{$ket2='content';}
		else
			{$ket2=$ket;}
		$judul=$_POST['judul'];
		$isi=$_POST['isi'];
		$date=date('Y-m-d');
		$up=date('Y-m-d h:i:s');
		//echo"$judul, $isi, $date, $up";
		$a=mysqli_query($conn,"insert into content values('', '$date', '$up', '$judul', '$isi', '$ket')");
		//echo"$judul <br><br>$isi";
		
		if($a)
			{header('location: index.php?load='.$ket2.'&msg=Data_Telah_Tersimpan&w=success');}
		else
			{header('location: index.php?load='.$ket2.'&msg=FAILED&w=success');}
		}
	
function contentup()
		{require '../inc/inc.php';
		$ket=$_POST['ket'];
		$isi=$_POST['isi'];
		$judul=$_POST['judul'];
		$id=$_POST['id'];
		$date=date('Y-m-d h:i:s');
		
		$a=mysqli_query($conn,"update content set dupdate='$date', judul='$judul', isi='$isi' where id='$id'");
		if($a)
			{header("location: index.php?load=".$ket."&msg=Data Telah Diganti&w=warning");}
		else
			{header("location: index.php?load=".$ket."&msg=FAILED&w=warning");}
		
		echo"$judul - $date - $id <hr>$isi";
		}

function merk()
		{require '../inc/inc.php';
		echo"
		<h3 align='center'>Data Departemen</h3>
		<br>
		<table class='table table-striped'>
		<thead>
		<tr>
		<th scope='col'>Kode</th>
		<th scope='col'>Keterangan</th>
		<th scope='col'>Gambar</th>
		<th scope='col' colspan='2' align='center'> </th>
		</tr>
		</thead>
		
		<form method='post' action='index.php?load=merkin' enctype='multipart/form-data'> 
		<tr>
		<td><input type='text' name='kode' class='form-control'></td>
		<td><input type='text' name='keterangan' class='form-control'></td>
		<td><input type='file' name='file' class='form-control-file'></td>
		<td colspan='2'><input type='submit' value='simpan' class='form-control'></td>
		</tr>
		</form>
		<tbody>

		";
		/*
		<tr>
		<th scope='row'>1</th>
		<td>Mark</td>
		<td>Otto</td>
		<td>@mdo</td>
		</tr>
		*/
		$a1=mysqli_query($conn,"select * from merk order by kode ASC");
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<tr>
			<th scope='row'>$a[kode]</th>
			<td>$a[keterangan]</td>
			<td><img src='../img/menu$a[kode].png' width='60px' height='60px'></td>
			<td align='center'><a href='index.php?load=merkdetail&id=$a[kode]'><i class='fa fa-edit'></td>
			<td align='center'>";
			?>
			<a href="javascript:;" data-kode="<?php echo "$a[kode]"; ?>" data-keterangan="<?php echo "$a[keterangan]"; ?>" data-toggle="modal" data-target="#hps">
			<i class='fa fa-trash-o'></i>
			<?php
			echo"
			</td>
			</tr>
			";
			}
		echo"
		</tbody>
		</table>
		";
		go::merkhps();
		}
	
function merkdetail()
		{require '../inc/inc.php';
		$id=$_GET['id'];
		$a1=mysqli_query($conn,"select * from merk where kode='$id'");
		while($a=mysqli_fetch_array($a1))
			{
			$kode=$a['kode'];
			$keterangan=$a['keterangan'];
			}
		echo"<h2 align='center'>Detail Departemen</h2>
		<br>
		<center>
		<img src='../img/menu$kode.png'>
		</center>
		<br>
		<form method='post' action='index.php?load=merkup' enctype='multipart/form-data'>
		<table width='100%' class='table'>
		<tr>
		<td width='20%'>Kode</td>
		<td><input type='text' class='form-control' name='kodes' value='$kode' disabled>
		<input type='hidden' class='form-control' name='kode' value='$kode'>
		</td>
		</tr>

		<tr>
		<td>Keterangan</td>
		<td><input type='text' class='form-control' name='keterangan' value='$keterangan'></td>
		</tr>

		<tr>
		<td>Gambar</td>
		<td><input type='file' class='form-control' name='file'></td>
		</tr>

		<tr>
		<td></td>
		<td><input type='submit' value='Ganti' class='btn btn-primary'></td>
		</tr>
		</table>
		</form>
		";
		}

function merkhps()
		{require '../inc/inc.php';
		?>
		<div class="modal fade" id="hps" tabindex="-1" role="document">
			<div class="modal-dialog modal-sm" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Menghapus Departemen/ Kategori:
					</p>
					
					<form action="index.php?load=dele" method="post">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" class="form-control" id="keterangan_" name="keterangan" disabled>
						<input type="hidden" class="form-control" id="keterangan" name="data" >
						<input type="hidden" class="form-control" id="kode" name="id" >
						<input type="hidden" class="form-control" name="link" value="merk">
						<input type="hidden" class="form-control" name="tbl" value="merk">
						</div>
						
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Hapus</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#hps').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#kode_').attr("value",div.data('kode'));
					modal.find('#kode').attr("value",div.data('kode'));
					modal.find('#keterangan').attr("value",div.data('keterangan'));
					modal.find('#keterangan_').attr("value",div.data('keterangan'));
				}
				);
			}
		);
		</script>

		<?php
		}
	
function merkdet()
		{
		?>
		<div class="modal fade" id="hps" tabindex="-1" role="document">
			<div class="modal-dialog modal-sm" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Menghapus Departemen/ Kategori:
					</p>
					
					<form action="index.php?load=dele" method="post">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" class="form-control" id="keterangan_" name="keterangan" disabled>
						<input type="hidden" class="form-control" id="keterangan" name="data" >
						<input type="hidden" class="form-control" id="kode" name="id" >
						<input type="hidden" class="form-control" name="link" value="merk">
						<input type="hidden" class="form-control" name="tbl" value="merk">
						</div>
						
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Hapus</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#hps').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#kode_').attr("value",div.data('kode'));
					modal.find('#kode').attr("value",div.data('kode'));
					modal.find('#keterangan').attr("value",div.data('keterangan'));
					modal.find('#keterangan_').attr("value",div.data('keterangan'));
				}
				);
			}
		);
		</script>

		<?php
		}


function merkin()
		{
		$kode=$_POST['kode'];
		$keterangan=$_POST['keterangan'];
		$filename=$_FILES['file']['name'];
		$filesz=$_FILES['file']['size'];
		$file=$_FILES['file']['tmp_name'];
		//$filenames="".$codeuker."_".$filename."";
		//$copia= copy($_FILES['foto']['tmp_name'],'../foto/'.$idnya.'.jpg');
		//$copia= copy($_FILES['file']['tmp_name'],'xls/'.$filenames.'');
		
		if($filename=='')
			{echo"&nbsp";
			}
		else
			{
			$filenames="menu".$kode.".png";
			$copia= copy($_FILES['file']['tmp_name'],'../img/'.$filenames.'');
			}
		//$file ='picture/'.$pro01['merk'].'/'.$pro01['kode'].'.JPG';
		//if (is_file($file)) 
		
		$a=mysqli_query($conn,"insert into merk values ('$kode', '$keterangan', '', '', '')");
		if($a)
			{header('location: index.php?load=merk&msg=Data Telah Tersimpan');}
		else
			{header('location: index.php?load=merk&msg=FAILED');}
		}
	
function merkup()
		{
		$kode=$_POST['kode'];
		$keterangan=$_POST['keterangan'];
		$filename=$_FILES['file']['name'];
		$filesz=$_FILES['file']['size'];
		$file=$_FILES['file']['tmp_name'];
		//$filenames="".$codeuker."_".$filename."";
		//$copia= copy($_FILES['foto']['tmp_name'],'../foto/'.$idnya.'.jpg');
		//$copia= copy($_FILES['file']['tmp_name'],'xls/'.$filenames.'');
		
		if($filename=='')
			{echo"&nbsp";
			}
		else
			{
			$filenames="menu".$kode.".png";
			$copia= copy($_FILES['file']['tmp_name'],'../img/'.$filenames.'');
			}
		
		$a=mysqli_query($conn,"update merk set keterangan='$keterangan' where kode='$kode'");
		if($a)
			{header('location: index.php?load=merk&msg=Data Telah Terganti');}
		else
			{header('location: index.php?load=merk&msg=FAILED');}
		}

function slider()
		{
		echo"<h2 align='center'>Atur Image Slide</h2>
		<br><br>
		<table class='table'>
		<tr>
		<td width='10%'>Nama</td>
		<td>File Resolusi 1000 x 300</td>
		<td width='5%'>Ganti</td>
		</tr>
		";
		for($i=1;$i<5;$i++)
			{
			echo"
			<tr>
			<td width='20%'>Image $i</td>
			<td><img src='../img/slide".$i.".png' width='80%'></td>
			<td><a href='javascript:;' data-id='slide".$i.".png' data-toggle='modal' data-target='#edit'>
			<i class='fa fa-edit'></i></a></td>
			</tr>
			";
			}
		
		
		echo"
		</table>
		";
		?>
		
		<div class="modal fade" id="edit" tabindex="-1" role="document">
			<div class="modal-dialog modal-md" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Mengganti File:
					</p>
					
					<form action="index.php?load=sliderup" method="post" enctype="multipart/form-data">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="hidden" class="form-control" id="id_" name="id">
						<input type="file" name="file" class="form-control">
						
						</div>
						<br><br>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#edit').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id_').attr("value",div.data('id'));
					modal.find('#id').attr("value",div.data('id'));
					
				}
				);
			}
		);
		</script>

		<?php
		}

function sliderup()
		{
		$id=$_POST['id'];
		$filename=$_FILES['file']['name'];
		$filesz=$_FILES['file']['size'];
		$file=$_FILES['file']['tmp_name'];
		$copia= copy($_FILES['file']['tmp_name'],'../img/'.$id.'');
		header('location: index.php?load=slider&msg=Image Telah Diupload');
		}
	
function advs()
		{
		echo"<h2 align='center'>Image Iklan Atas</h2>
		<br><br>
		<table class='table'>
		<tr>
		<td width='10%'>Nama</td>
		<td>File Resolusi 300 x 150</td>
		<td width='5%'>Ganti</td>
		</tr>
		";
		for($i=1;$i<3;$i++)
			{
			echo"
			<tr>
			<td width='20%'>Image $i</td>
			<td><img src='../img/iklan".$i.".png' width='300px'></td>
			<td><a href='javascript:;' data-id='iklan".$i.".png' data-toggle='modal' data-target='#edit'>
			<i class='fa fa-edit'></i></a></td>
			</tr>
			";
			}
		echo"
		</table>
		";
		////////////////////

		echo"<h2 align='center'>Image Iklan Bawah</h2>
		<br><br>
		<table class='table'>
		<tr>
		<td width='10%'>Nama</td>
		<td>File Resolusi 300 x 150</td>
		<td width='5%'>Ganti</td>
		</tr>
		";
		for($i=3;$i<5;$i++)
			{
			echo"
			<tr>
			<td width='20%'>Image $i</td>
			<td><img src='../img/iklan".$i.".png' width='300px'></td>
			<td><a href='javascript:;' data-id='iklan".$i.".png' data-toggle='modal' data-target='#edit'>
			<i class='fa fa-edit'></i></a></td>
			</tr>
			";
			}
		echo"
		</table>
		";

		?>
		
		<div class="modal fade" id="edit" tabindex="-1" role="document">
			<div class="modal-dialog modal-md" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Mengganti File:
					</p>
					
					<form action="index.php?load=advsup" method="post" enctype="multipart/form-data">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="hidden" class="form-control" id="id_" name="id">
						<input type="file" name="file" class="form-control">
						
						</div>
						<br><br>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#edit').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id_').attr("value",div.data('id'));
					modal.find('#id').attr("value",div.data('id'));
					
				}
				);
			}
		);
		</script>

		<?php
		}

function advstop()
	{
		include ('../inc/inc.php');
		if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}

		echo"<h2 align='center'>Image Iklan Atas</h2>
		<br><br>
		<table class='table table-striped' >
		<tr>
		<td align='center'>No</td>
		<td width='20%' align='center'>Nama</td>
		<td width='10%' align='center'>Urut</td>
		<td align='center'>File Resolusi 300 x 150</td>
		<td width='10%' colspan='2' align='center'>Act</td>
		</tr>
		
		<form method='post' action='index.php?load=inputslider' enctype='multipart/form-data'>
		<tr>
		<td>#</td>
		<td><input type='text' name='nama' required='' class='form-control'></td>
		<td><input type='text' name='urut' required='' class='form-control'></td>
		<td><input type='file' name='file' required='' class='form-control'></td>
		<td colspan='2'>
		<input type='hidden' name='jns' value='advstop'>
		<input type='submit' value='Simpan' class='btn btn-primary'></td>
		</tr>
		</form>
		";
		//for($i=1;$i<3;$i++)
		$img1=mysqli_query($conn,"select * from slider where ket='advstop' order by urut ASC");
		$no=1;
		while($img=mysqli_fetch_array($img1))
			{
			echo"
			<tr>
			<td align='center'>$no</td>
			<td >$img[nama]</td>
			<td align='center'>$img[urut]</td>
			<td><img src='../img/slider/$img[file]' width='300px'></td>
			<td><a href='javascript:;' data-id='$img[id]' data-nama='$img[nama]' data-file='$img[file]' data-urut='$img[urut]' data-ket='$img[ket]' data-toggle='modal' data-target='#edit'>
			<i class='fa fa-edit'></i></a></td>
			<td><a href='javascript:;' data-id='$img[id]' data-nama='$img[nama]' data-file='$img[file]' data-urut='$img[urut]' data-ket='$img[ket]' data-toggle='modal' data-target='#hps'>
			<i class='fa fa-trash'></i></a></td>
			</tr>
			";
			$no++;
			}
		
		
		echo"
		</table>
		";
		?>
		<!------->
		<div class="modal fade" id="edit" tabindex="-1" role="document">
			<div class="modal-dialog modal-md" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<div class="modal-body modal-body-sub_agile" role="document">	
						<div class="modal_body_left modal_body_left1" role="document">
						<p>
						Apakah Ingin Mengganti File:
						</p>
					
						<form action="index.php?load=upslider" method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top" role="document">
							<input type="hidden" class="form-control" id="id" name="id">
							<input type="hidden" class="form-control" id="file" name="filelama">
							<input type="hidden" class="form-control" id="ket" name="ket">
							Nama
							<input type="text" class="form-control" id="nama" name="nama">
							Urut
							<input type="text" class="form-control" id="urut" name="urut">
							Ganti File
							<input type="file" name="file" class="form-control">
						
							</div>
							
							<br><br>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		

		<!------->
		<div class="modal fade" id="hps" tabindex="-1" role="document">
			<div class="modal-dialog modal-md" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<div class="modal-body modal-body-sub_agile" role="document">	
						<div class="modal_body_left modal_body_left1" role="document">
						<p>
						Apakah Ingin <b>Menghapus</b> File:
						</p>
					
						<form action="index.php?load=delslider" method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top" role="document">
							<input type="hidden" class="form-control" id="id" name="id">
							<input type="hidden" class="form-control" id="file" name="filelama">
							<input type="hidden" class="form-control" id="ket" name="ket">
							Nama
							<input type="text" class="form-control" id="nama" name="nama">
							Urut
							<input type="text" class="form-control" id="urut" name="urut">
						
							</div>
							
							<br><br>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-danger">HAPUS</button>
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
			

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#edit').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id').attr("value",div.data('id'));
					modal.find('#nama').attr("value",div.data('nama'));
					modal.find('#file').attr("value",div.data('file'));
					modal.find('#urut').attr("value",div.data('urut'));
					modal.find('#ket').attr("value",div.data('ket'));
					
				}
				);
			}
		);
		</script>

		<script>
			$(document).ready(function()
			{
				$('#hps').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id').attr("value",div.data('id'));
					modal.find('#nama').attr("value",div.data('nama'));
					modal.find('#file').attr("value",div.data('file'));
					modal.find('#urut').attr("value",div.data('urut'));
					modal.find('#ket').attr("value",div.data('ket'));
					
				}
				);
			}
		);
		</script>
		<?php
		}

function advsbot()
	{
		include ('../inc/inc.php');
		if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}

		echo"<h2 align='center'>Image Iklan Bawah</h2>
		<br><br>
		<table class='table table-striped' >
		<tr>
		<td align='center'>No</td>
		<td width='20%' align='center'>Nama</td>
		<td width='10%' align='center'>Urut</td>
		<td align='center'>File Resolusi 300 x 150</td>
		<td width='10%' colspan='2' align='center'>Act</td>
		</tr>
		
		<form method='post' action='index.php?load=inputslider' enctype='multipart/form-data'>
		<tr>
		<td>#</td>
		<td><input type='text' name='nama' required='' class='form-control'></td>
		<td><input type='text' name='urut' required='' class='form-control'></td>
		<td><input type='file' name='file' required='' class='form-control'></td>
		<td colspan='2'>
		<input type='hidden' name='jns' value='advsbot'>
		<input type='submit' value='Simpan' class='btn btn-primary'></td>
		</tr>
		</form>
		";
		//for($i=1;$i<3;$i++)
		$img1=mysqli_query($conn,"select * from slider where ket='advsbot' order by urut ASC");
		$no=1;
		while($img=mysqli_fetch_array($img1))
			{
			echo"
			<tr>
			<td align='center'>$no</td>
			<td >$img[nama]</td>
			<td align='center'>$img[urut]</td>
			<td><img src='../img/slider/$img[file]' width='300px'></td>
			<td><a href='javascript:;' data-id='$img[id]' data-nama='$img[nama]' data-file='$img[file]' data-urut='$img[urut]' data-ket='$img[ket]' data-toggle='modal' data-target='#edit'>
			<i class='fa fa-edit'></i></a></td>
			<td><a href='javascript:;' data-id='$img[id]' data-nama='$img[nama]' data-file='$img[file]' data-urut='$img[urut]' data-ket='$img[ket]' data-toggle='modal' data-target='#hps'>
			<i class='fa fa-trash'></i></a></td>
			</tr>
			";
			$no++;
			}
		
		
		echo"
		</table>
		";
		?>
		<!------->
		<div class="modal fade" id="edit" tabindex="-1" role="document">
			<div class="modal-dialog modal-md" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<div class="modal-body modal-body-sub_agile" role="document">	
						<div class="modal_body_left modal_body_left1" role="document">
						<p>
						Apakah Ingin Mengganti File:
						</p>
					
						<form action="index.php?load=upslider" method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top" role="document">
							<input type="hidden" class="form-control" id="id" name="id">
							<input type="hidden" class="form-control" id="file" name="filelama">
							<input type="hidden" class="form-control" id="ket" name="ket">
							Nama
							<input type="text" class="form-control" id="nama" name="nama">
							Urut
							<input type="text" class="form-control" id="urut" name="urut">
							Ganti File
							<input type="file" name="file" class="form-control">
						
							</div>
							
							<br><br>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		

		<!------->
		<div class="modal fade" id="hps" tabindex="-1" role="document">
			<div class="modal-dialog modal-md" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<div class="modal-body modal-body-sub_agile" role="document">	
						<div class="modal_body_left modal_body_left1" role="document">
						<p>
						Apakah Ingin <b>Menghapus</b> File:
						</p>
					
						<form action="index.php?load=delslider" method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top" role="document">
							<input type="hidden" class="form-control" id="id" name="id">
							<input type="hidden" class="form-control" id="file" name="filelama">
							<input type="hidden" class="form-control" id="ket" name="ket">
							Nama
							<input type="text" class="form-control" id="nama" name="nama">
							Urut
							<input type="text" class="form-control" id="urut" name="urut">
						
							</div>
							
							<br><br>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-danger">HAPUS</button>
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
			

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#edit').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id').attr("value",div.data('id'));
					modal.find('#nama').attr("value",div.data('nama'));
					modal.find('#file').attr("value",div.data('file'));
					modal.find('#urut').attr("value",div.data('urut'));
					modal.find('#ket').attr("value",div.data('ket'));
					
				}
				);
			}
		);
		</script>

		<script>
			$(document).ready(function()
			{
				$('#hps').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id').attr("value",div.data('id'));
					modal.find('#nama').attr("value",div.data('nama'));
					modal.find('#file').attr("value",div.data('file'));
					modal.find('#urut').attr("value",div.data('urut'));
					modal.find('#ket').attr("value",div.data('ket'));
					
				}
				);
			}
		);
		</script>
		<?php
		}

function advsmain()
	{
		include ('../inc/inc.php');
		if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}

		echo"<h2 align='center'>Image Slide</h2>
		<br><br>
		<table class='table table-striped' >
		<tr>
		<td align='center'>No</td>
		<td width='20%' align='center'>Nama</td>
		<td width='10%' align='center'>Urut</td>
		<td align='center'>File Resolusi 1000 x 300</td>
		<td width='10%' colspan='2' align='center'>Act</td>
		</tr>
		
		<form method='post' action='index.php?load=inputslider' enctype='multipart/form-data'>
		<tr>
		<td>#</td>
		<td><input type='text' name='nama' required='' class='form-control'></td>
		<td><input type='text' name='urut' required='' class='form-control'></td>
		<td><input type='file' name='file' required='' class='form-control'></td>
		<td colspan='2'>
		<input type='hidden' name='jns' value='advsmain'>
		<input type='submit' value='Simpan' class='btn btn-primary'></td>
		</tr>
		</form>
		";
		//for($i=1;$i<3;$i++)
		$img1=mysqli_query($conn,"select * from slider where ket='advsmain' order by urut ASC");
		$no=1;
		while($img=mysqli_fetch_array($img1))
			{
			echo"
			<tr>
			<td align='center'>$no</td>
			<td >$img[nama]</td>
			<td align='center' >$img[urut]</td>
			<td><img src='../img/slider/$img[file]' width='300px'></td>
			<td><a href='javascript:;' data-id='$img[id]' data-nama='$img[nama]' data-file='$img[file]' data-urut='$img[urut]' data-ket='$img[ket]' data-toggle='modal' data-target='#edit'>
			<i class='fa fa-edit'></i></a></td>
			<td><a href='javascript:;' data-id='$img[id]' data-nama='$img[nama]' data-file='$img[file]' data-urut='$img[urut]' data-ket='$img[ket]' data-toggle='modal' data-target='#hps'>
			<i class='fa fa-trash'></i></a></td>
			</tr>
			";
			$no++;
			}
		
		
		echo"
		</table>
		";
		?>
		<!------->
		<div class="modal fade" id="edit" tabindex="-1" role="document">
			<div class="modal-dialog modal-md" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<div class="modal-body modal-body-sub_agile" role="document">	
						<div class="modal_body_left modal_body_left1" role="document">
						<p>
						Apakah Ingin Mengganti File:
						</p>
					
						<form action="index.php?load=upslider" method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top" role="document">
							<input type="hidden" class="form-control" id="id" name="id">
							<input type="hidden" class="form-control" id="file" name="filelama">
							<input type="hidden" class="form-control" id="ket" name="ket">
							Nama
							<input type="text" class="form-control" id="nama" name="nama">
							Urut
							<input type="text" class="form-control" id="urut" name="urut">
							Ganti File
							<input type="file" name="file" class="form-control">
						
							</div>
							
							<br><br>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		

		<!------->
		<div class="modal fade" id="hps" tabindex="-1" role="document">
			<div class="modal-dialog modal-md" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<div class="modal-body modal-body-sub_agile" role="document">	
						<div class="modal_body_left modal_body_left1" role="document">
						<p>
						Apakah Ingin <b>Menghapus</b> File:
						</p>
					
						<form action="index.php?load=delslider" method="post" enctype="multipart/form-data">
							<div class="styled-input agile-styled-input-top" role="document">
							<input type="hidden" class="form-control" id="id" name="id">
							<input type="hidden" class="form-control" id="file" name="filelama">
							<input type="hidden" class="form-control" id="ket" name="ket">
							Nama
							<input type="text" class="form-control" id="nama" name="nama">
							Urut
							<input type="text" class="form-control" id="urut" name="urut">
						
							</div>
							
							<br><br>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-danger">HAPUS</button>
							</form>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
			

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#edit').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id').attr("value",div.data('id'));
					modal.find('#nama').attr("value",div.data('nama'));
					modal.find('#file').attr("value",div.data('file'));
					modal.find('#urut').attr("value",div.data('urut'));
					modal.find('#ket').attr("value",div.data('ket'));
					
				}
				);
			}
		);
		</script>

		<script>
			$(document).ready(function()
			{
				$('#hps').on('show.bs.modal', function (event) 
				{
					var div = $(event.relatedTarget)
					var modal = $(this)
					modal.find('#id').attr("value",div.data('id'));
					modal.find('#nama').attr("value",div.data('nama'));
					modal.find('#file').attr("value",div.data('file'));
					modal.find('#urut').attr("value",div.data('urut'));
					modal.find('#ket').attr("value",div.data('ket'));
					
				}
				);
			}
		);
		</script>
		<?php
		}




function inputslider()
	{
	include('../inc/inc.php');
	$jns=$_POST['jns'];
	$nama=$_POST['nama'];
	$urut=$_POST['urut'];
	$filename=$_FILES['file']['name'];
	$filesz=$_FILES['file']['size'];
	$file=$_FILES['file']['tmp_name'];
	$time=date('Ymdhis');
	$id="".$jns."_".$time.".png";
	$copia= copy($_FILES['file']['tmp_name'],'../img/slider/'.$id.'');
	$a=mysqli_query($conn,"insert into slider values ('', '$nama', '$id', '$urut', '$jns')");
	if($a)
		{header('location: index.php?load='.$jns.'&msg=Gambar Telah Disimpan&w=success');}
	else
		{header('location: index.php?load='.$jns.'&msg=FAILED&w=danger');}
	}

function upslider()
	{
	include('../inc/inc.php');
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$urut=$_POST['urut'];
	$filename=$_FILES['file']['name'];
	$filesz=$_FILES['file']['size'];
	$file=$_FILES['file']['tmp_name'];
	$ket=$_POST['ket'];
	$filelama=$_POST['filelama'];;
	if($filesz>0)
		{
		$copia= copy($_FILES['file']['tmp_name'],'../img/slider/'.$filelama.'');
		}
	else
		{}
	$a=mysqli_query($conn,"update slider set nama='$nama', urut='$urut' where id='$id' ");
	if($a)
		{header('location: index.php?load='.$ket.'&msg=Gambar Telah Diganti&w=danger');}
	else
		{header('location: index.php?load='.$jns.'&msg=FAILED&w=danger');}
	}

function delslider()
	{
	include('../inc/inc.php');
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$urut=$_POST['urut'];
	
	$ket=$_POST['ket'];
	$filelama=$_POST['filelama'];;
	$file="../img/slider/".$filelama."";
	if(file_exists($file))
		{
		$copia= unlink($file);
		}
	else
		{}
	$a=mysqli_query($conn,"delete from slider where id='$id' ");
	if($a)
		{header('location: index.php?load='.$ket.'&msg=Gambar Telah Dihapus&w=danger');}
	else
		{header('location: index.php?load='.$jns.'&msg=FAILED&w=danger');}
	}


function article()
	{require '../inc/inc.php';
	if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}
		echo"<h3 align='center'>Daftar Artikel</h3>
		<br>
		<p align='center'>
		<a href='index.php?load=newcontent&ket=article'><i class='fa fa-file-o'></i><br>New</a>
		<br>
		<table class='table table-striped'>
		<tr>
		<td align='center'>No</td>
		<td align='center'>Judul</td>
		<td align='center'>Tanggal</td>
		<td align='center'>Update</td>
		<td align='center' colspan='2'>Act</td>
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

		$a1=mysqli_query($conn,"select * from content where ket='article' order by id DESC limit $from, $max_results");
		$no=1;
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<tr>
			<td align='center'>$no</td>
			<td align='center'>$a[judul]</td>
			<td align='center'>$a[tgl]</td>
			<td align='center'>$a[dupdate]</td>
			<td align='center'><a href='index.php?load=dcontent&id=$a[id]&ket=article'><i class='fa fa-edit'></a></td>
			<td align='center'>";
			?>
			<!--<a href="javascript:;" data-judul="<?php echo "$a[judul]"; ?>" data-id="<?php echo "$a[id]"; ?>" data-toggle="modal" data-target="#hps">
			<i class='fa fa-trash-o'></i>-->

			<?php
			echo"<a href='index.php?load=delcontent&id=$a[id]&ket=article' OnClick='return confirm(\"Hapus Content ?\");'><i class='fa fa-trash-o'></i></a>";
			echo"
			</td>
			</tr>
			";
			?>
			
			<?php
			$no++;
			}
		echo"
		</table>
		";
		//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from content where ket='article'"),0);
		$totres=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from content where ket='article'");
		while($totresu=mysqli_fetch_array($totres))
			{$total_results=$totresu['jmlresult'];}			
		$total_pages = ceil($total_results / $max_results);
	
		//echo "<center>[Page]<br>";
		echo"<center>";
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
			<p>Terdapat $total_results Artikel</p></center> 
			";
		?>
		
		<div class="modal fade" id="hps" tabindex="-1" role="document">
			<div class="modal-dialog modal-sm" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Menghapus Content Berikut:
					</p>
					
					<form action="index.php?ket=c" method="post">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" class="form-control" id="judul_" name="judul" disabled>
						<input type="hidden" class="form-control" id="judul" name="data" >
						<input type="hidden" class="form-control" id="id" name="id" >
						<input type="hidden" class="form-control" name="link" value="content">
						<input type="hidden" class="form-control" name="tbl" value="content">
						</div>
						
						<!--<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" id="id" name="id" class="form-control">
						</div>
						
						<div class="styled-input">
						<input type="password" placeholder="Password" name="password" required="">
						</div>-->
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Hapus</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#hps').on('show.bs.modal', function (event) 
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
	}
		
function news()
	{require '../inc/inc.php';
	if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}
		echo"<h3 align='center'>Daftar News</h3>
		<br>
		<p align='center'>
		<a href='index.php?load=newcontent&ket=news'><i class='fa fa-file-o'></i><br>New</a>
		<br>
		<table class='table table-striped'>
		<tr>
		<td align='center'>No</td>
		<td align='center'>Judul</td>
		<td align='center'>Tanggal</td>
		<td align='center'>Update</td>
		<td align='center' colspan='2'>Act</td>
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

		$a1=mysqli_query($conn,"select * from content where ket='news' order by id DESC limit $from, $max_results");
		$no=1;
		while($a=mysqli_fetch_array($a1))
			{
			echo"
			<tr>
			<td align='center'>$no</td>
			<td align='center'>$a[judul]</td>
			<td align='center'>$a[tgl]</td>
			<td align='center'>$a[dupdate]</td>
			<td align='center'><a href='index.php?load=dcontent&id=$a[id]&ket=news'><i class='fa fa-edit'></a></td>
			<td align='center'>";
			?>
			<!--<a href="javascript:;" data-judul="<?php echo "$a[judul]"; ?>" data-id="<?php echo "$a[id]"; ?>" data-toggle="modal" data-target="#hps">
			<i class='fa fa-trash-o'></i>-->

			<?php
			echo"<a href='index.php?load=delcontent&id=$a[id]&ket=news' OnClick='return confirm(\"Hapus Content ?\");'><i class='fa fa-trash-o'></i></a>";
			echo"
			</td>
			</tr>
			";
			?>
			
			<?php
			$no++;
			}
		echo"
		</table>
		";
		//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from content where ket='news'"),0);
		$totres=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from content where ket='news'");
		while($totresu=mysqli_fetch_array($totres))
			{$total_results=$totresu['jmlresult'];}			
		$total_pages = ceil($total_results / $max_results);
	
		//echo "<center>[Page]<br>";
		echo"<center>";
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
			<p>Terdapat $total_results News</p></center> 
			";
		?>
		
		<div class="modal fade" id="hps" tabindex="-1" role="document">
			<div class="modal-dialog modal-sm" role="document">
			<!-- Modal content-->
				<div class="modal-content" role="document">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Menghapus Content Berikut:
					</p>
					
					<form action="index.php?ket=c" method="post">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" class="form-control" id="judul_" name="judul" disabled>
						<input type="hidden" class="form-control" id="judul" name="data" >
						<input type="hidden" class="form-control" id="id" name="id" >
						<input type="hidden" class="form-control" name="link" value="content">
						<input type="hidden" class="form-control" name="tbl" value="content">
						</div>
						
						<!--<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" id="id" name="id" class="form-control">
						</div>
						
						<div class="styled-input">
						<input type="password" placeholder="Password" name="password" required="">
						</div>-->
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Hapus</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>

			<script src="../js/jquery-2.1.4.min.js"></script>
			<script>
			$(document).ready(function()
			{
				$('#hps').on('show.bs.modal', function (event) 
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
	}
		


function advsup()
		{require '../inc/inc.php';
		$id=$_POST['id'];
		$filename=$_FILES['file']['name'];
		$filesz=$_FILES['file']['size'];
		$file=$_FILES['file']['tmp_name'];
		$copia= copy($_FILES['file']['tmp_name'],'../img/'.$id.'');
		header('location: index.php?load=advs&msg=Image Telah Diupload');
		}
	

function delcontent()
	{require '../inc/inc.php';
	$id=$_GET['id'];
	$ket=$_GET['ket'];
	$a=mysqli_query($conn,"delete from content where id='$id'");
	if($a)
		{header("location: index.php?load=".$ket."&msg=Data Telah Dihapus&w=danger");}
	else
		{header("location: index.php?load=".$ket."&msg=FAILED&w=danger");}
	}

function del()
		{require '../inc/inc.php';
		$id=$_POST['id'];
		$data=$_POST['data'];
		$link=$_POST['link'];
		$tbl=$_POST['tbl'];
		$a=mysqli_query($conn,"delete from ".$tbl." where id='$id'");
		if($a)
			{header('location: index.php?load='.$link.'&msg=Data Telah Dihapus');}
		else
			{header('location: index.php?load='.$link.'&msg=FAILED');}
		}
	
function dele()
		{require '../inc/inc.php';
		$id=$_POST['id'];
		$data=$_POST['data'];
		$link=$_POST['link'];
		$tbl=$_POST['tbl'];
		$a=mysqli_query($conn,"delete from ".$tbl." where kode='$id'");
		if($a)
			{header('location: index.php?load='.$link.'&msg=Data Telah Dihapus');}
		else
			{header('location: index.php?load='.$link.'&msg=FAILED');}
		}


function coba()
		{
		echo"AOOOOO";
		}


function contact()
	{require '../inc/inc.php';
	if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}
	echo"<h3 align='center'>Contact Us</h3><br>
	<table class='table table-striped'>
	<tr>
	<td align='center'>No</td>
	<td align='center'>Tanggal</td>
	<td align='center'>Nama</td>
	<td align='center'>Email</td>
	<td align='center'>Permasalahan</td>
	<td align='center'>Pertanyaan</td>
	<td align='center'>Tanggapan</td>
	<td align='center'>Hapus</td>
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

	$a1=mysqli_query($conn,"select * from contact order by idcontact DESC limit $from, $max_results");
	$no=1;
	while($a=mysqli_fetch_array($a1))
		{
		echo"
		<tr>
		<td align='center'>$no</td>
		<td align='center'>$a[tglcontact]</td>
		<td align='center'>$a[nama]</td>
		<td align='center'>$a[email]</td>
		<td align='center'>$a[masalah]</td>
		<td align='center'>$a[tanya]</td>
		<td align='center'>";
		if($a['status']==0)
			{
			echo"
			<a href='index.php?load=contactup&id=$a[idcontact]' OnClick='return confirm(\"Apakah Permasalahan Ini Sudah Ada Tanggapan?\");'><i class='fa fa-times-circle'></i></a>";
			}
		else
			{
			echo"<a><i class='fa fa-check-circle' ></i></a>";
			}
		echo"
		</td>
		<td align='center'>
		<a href='index.php?load=dcontact&id=$a[idcontact]' OnClick='return confirm(\"Hapus Data Permasalahan?\");'><i class='fa fa-trash-o'></i></a>
		";
		//fa-check-circle
		//fa-times-circle
		?>
		<!--
		<a href="javascript:;" data-judul="<?php echo "$a[judul]"; ?>" data-id="<?php echo "$a[id]"; ?>" data-toggle="modal" data-target="#hps">
		<i class='fa fa-trash-o'></i>-->
		<?php
		echo"
		</td>
		</tr>
		";
		$no++;
		}
	echo"
	</table>
	";

	//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from contact "),0);
					$totres=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from contact");
		while($totresu=mysqli_fetch_array($totres))
			{$total_results=$totresu['jmlresult'];}
	$total_pages = ceil($total_results / $max_results);
	
		//echo "<center>[Page]<br>";
		echo"<center>";
		echo"<ul class='pagination'>";
		if($page > 1)
			{
			$prev = ($page - 1);
			echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=contact&page=$prev\">&lt;&lt;Prev</a> </li>";
			}

		for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				echo "<li class='active'><a href=\"".$_SERVER['PHP_SELF']."?load=contact&page=$i\">$i</a> </li>";
				} 
			else 
				{
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=contact&page=$i\">$i</a> </li>";
				}
			}
							
			if($page < $total_pages)
				{
				$next = ($page + 1);
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=contact&page=$next\">Next>></a></li>";
				} 
			echo"</ul>
			<p>Terdapat $total_results Contact Us</p></center> 
			";

	?>
		
	<div class="modal fade" id="hps" tabindex="-1" role="document">
		<div class="modal-dialog modal-sm" role="document">
		<!-- Modal content-->
			<div class="modal-content" role="document">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Menghapus Content Berikut:
					</p>
					
					<form action="index.php" method="post">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" class="form-control" id="judul_" name="judul" disabled>
						<input type="hidden" class="form-control" id="judul" name="data" >
						<input type="hidden" class="form-control" id="id" name="id" >
						<input type="hidden" class="form-control" name="link" value="content">
						<input type="hidden" class="form-control" name="tbl" value="content">
						</div>
						
						<!--<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" id="id" name="id" class="form-control">
						</div>
						
						<div class="styled-input">
						<input type="password" placeholder="Password" name="password" required="">
						</div>-->
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Hapus</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<script src="../js/jquery-2.1.4.min.js"></script>
		<script>
		$(document).ready(function()
			{
			$('#hps').on('show.bs.modal', function (event) 
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
	}

function contactup()
	{require '../inc/inc.php';
	$id=$_GET['id'];
	//echo"$id";
	$a=mysqli_query($conn,"update contact set status='1' where idcontact='$id'");
	if($a)
		{
		header('location: index.php?load=contact&msg=Data Permasalahan Telah Ditanggapi&w=success');}
	else
		{header('location: index.php?load=contact&msg=FAILED');}
	
	}

function dcontact()
	{require '../inc/inc.php';
	$id=$_GET['id'];
	//echo"$id";
	$a=mysqli_query($conn,"delete from contact where idcontact='$id'");
	if($a)
		{
		header('location: index.php?load=contact&msg=Data Permasalahan Telah Dihapus&w=danger');}
	else
		{header('location: index.php?load=contact&msg=FAILED');}
	
	}


function testi()
	{require '../inc/inc.php';
	if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}
	echo"<h3 align='center'>Testimonial</h3><br>
	<table class='table table-striped'>
	<tr>
	<td align='center'>No</td>
	<td align='center'>Foto</td>
	<td align='center'>Tanggal</td>
	<td align='center'>Nama</td>
	<td align='center'>Email</td>
	<td align='center'>Testimonial</td>
	<td align='center'>Tampilkan</td>
	<td align='center'>Hapus</td>
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

	$a1=mysqli_query($conn,"select * from testi order by idtesti DESC limit $from, $max_results");
	$no=1;
	while($a=mysqli_fetch_array($a1))
		{
		echo"
		<tr>
		<td align='center'>$no</td>
		<td align='center'>";
		$file ='../img/testi/'.$a['idtesti'].'.jpg';
		if (is_file($file))
			{echo"<img src='../img/testi/".$a['idtesti'].".jpg' width='80px' height='80px'>";}
		else
			{echo"<img src='../img/testi/user.png' width='80px' height='80px'>";}
		
		echo"</td>
		<td align='center'>$a[tgl]</td>
		<td align='center'>$a[nama]</td>
		<td align='center'>$a[email]</td>
		<td align='center'>$a[testi]</td>
		<td align='center'>";
		if($a['status']==0)
			{
			echo"
			<a href='index.php?load=testiup&id=$a[idtesti]' OnClick='return confirm(\"Apakah Testimonial Ini Akan Ditampilkan?\");'><i class='fa fa-times-circle'></i></a>";
			}
		else
			{
			echo"<a><i class='fa fa-check-circle' ></i></a>";
			}
		echo"
		</td>
		<td align='center'>
		<a href='index.php?load=dtesti&id=$a[idtesti]' OnClick='return confirm(\"Hapus Data Testimonial?\");'><i class='fa fa-trash-o'></i></a>
		";
		//fa-check-circle
		//fa-times-circle
		?>
		<!--
		<a href="javascript:;" data-judul="<?php echo "$a[judul]"; ?>" data-id="<?php echo "$a[id]"; ?>" data-toggle="modal" data-target="#hps">
		<i class='fa fa-trash-o'></i>-->
		<?php
		echo"
		</td>
		</tr>
		";
		$no++;
		}
	echo"
	</table>
	";
	//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from testi "),0);
	$totres=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from testi");
		while($totresu=mysqli_fetch_array($totres))
			{$total_results=$totresu['jmlresult'];}			
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
			<p>Terdapat $total_results Testimonial</p></center> 
			";
	?>
	
	<div class="modal fade" id="hps" tabindex="-1" role="document">
		<div class="modal-dialog modal-sm" role="document">
		<!-- Modal content-->
			<div class="modal-content" role="document">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body modal-body-sub_agile" role="document">	
					<div class="modal_body_left modal_body_left1" role="document">
					<p>
					Apakah Ingin Menghapus Content Berikut:
					</p>
					
					<form action="index.php" method="post">
						<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" class="form-control" id="judul_" name="judul" disabled>
						<input type="hidden" class="form-control" id="judul" name="data" >
						<input type="hidden" class="form-control" id="id" name="id" >
						<input type="hidden" class="form-control" name="link" value="content">
						<input type="hidden" class="form-control" name="tbl" value="content">
						</div>
						
						<!--<div class="styled-input agile-styled-input-top" role="document">
						<input type="text" id="id" name="id" class="form-control">
						</div>
						
						<div class="styled-input">
						<input type="password" placeholder="Password" name="password" required="">
						</div>-->
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Hapus</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
		<script src="../js/jquery-2.1.4.min.js"></script>
		<script>
		$(document).ready(function()
			{
			$('#hps').on('show.bs.modal', function (event) 
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
	}

function testiup()
	{require '../inc/inc.php';
	$id=$_GET['id'];
	//echo"$id";
	$a=mysqli_query($conn,"update testi set status='1' where idtesti='$id'");
	if($a)
		{
		header('location: index.php?load=testi&msg=Testimonial Telah Ditampilkan&w=success');
		}
	else
		{header('location: index.php?load=testi&msg=FAILED');}
	
	}

function dtesti()
	{require '../inc/inc.php';
	$id=$_GET['id'];
	//echo"$id";
	$a=mysqli_query($conn,"delete from testi where idtesti='$id'");
	if($a)
		{
		header('location: index.php?load=testi&msg=Data Testimonial Telah Dihapus&w=danger');
		}
	else
		{header('location: index.php?load=testi&msg=FAILED');}
	
	}

function shop()
	{require '../inc/inc.php';
	//blm dibayar 0, terbayar 1, pengiriman 2, selesai 3
	if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}
	echo"<h3 align='center'>Daftar Pesanan</h3><br>
	<table class='table table-striped'>
	<tr>
	<td align='center'>No</td>
	<td align='center'>Faktur</td>
	<td align='center'>Tanggal</td>
	<td align='center'>Pemesan</td>
	<td align='center'>Kota</td>
	<td align='center'>Jumlah</td>
	<td align='center'>Status</td>
	<td align='center'>Hapus</td>
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
	left join customer c on a.idcustomer=c.idcus group by a.faktur desc
	limit $from, $max_results
	");
	$no=1;
	while($a=mysqli_fetch_array($a1))
		{
		echo"
		<tr>
		<td align='center'>$no</td>
		<td align='center'><a href='index.php?load=dshop&id=$a[faktur]'>$a[faktur]</a></td>
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
		<td align='center'>
		<a href='index.php?load=delshop&faktur=$a[faktur]&cus=$a[idcustomer]&' OnClick='return confirm(\"Hapus Data Pesanan?\");'><i class='fa fa-trash-o'></i></a>
		";
		
		echo"
		</td>
		</tr>
		";
		$no++;
		}
	echo"
	</table>
	";
	//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from cart "),0);
	$totres=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from cart");
		while($totresu=mysqli_fetch_array($totres))
			{$total_results=$totresu['jmlresult'];}		
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
			<p>Terdapat $total_results Data Pemesanan</p></center> 
			";
	}

function delshop()
	{require '../inc/inc.php';
	$faktur=$_GET['faktur'];
	$cus=$_GET['cus'];
	$a=mysqli_query($conn,"delete from cart where faktur='$faktur'");
	$b=mysqli_query($conn,"delete from cartdetail where faktur='$faktur'");
	$c=mysqli_query($conn,"delete from customer where idcus='$cus' and member='n'");
	if($c)
		{header('location: index.php?load=shop&msg=Data Pesanan Telah Dihapus&w=warning');}
	else
		{header('location: index.php?load=shop&msg=Errors&w=warning');}
	}

function dshop()
	{require '../inc/inc.php';
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
	<form method='post' action='index.php?load=statusup'>
	<td rowspan='2' width='20%'>Status:
	<br>
	<select name='status' class='form-control'>
	<option value='0' $sta0 $sele0>Belum Bayar</option>
	<option value='1' $sta1 $sele1>Terbayar</option>
	<option value='2' $sta2 $sele2>Pengiriman</option>
	<option value='3' $sta3 $sele3>Selesai</option>
	</select>
	<br><p align='right'>
	<input type='hidden' name='statushid' value='$status'>
	<input type='hidden' name='ket' value='$ket'>
	<input type='hidden' name='faktur' value='$id'>
	<input type='submit' value='Ganti' class='btn btn-danger'></p>
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
	$cxx=mysqli_query($conn,"SELECT sum(total) as ctotal from cartdetail where faktur='$id'");
		while($cx=mysqli_fetch_array($cxx))
			{$c=$cx['ctotal'];}	
	 echo"
	<tr>
	<td colspan='5' align='right'><b>TOTAL</b></td>
	<td align='right'>".number_format($c,0,',',',')."</td>
	</tr>
	
	<form method='post' action='index.php?load=bkirimup'>
	<tr>
	<td colspan='3' align='right'>Biaya Kirim</td>
	<td><input type='text' name='bkirim' value='$bkirim' class='form-control'></td>
	<td align='center'>
	<input type='hidden' name='faktur' value='$id'>
	<input type='submit' value='Ganti' class='btn btn-primary'></td>
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
	<td width='80%'><b>Konfirmasi Pembayaran</b></td>
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
		<td>- $detstatu[0]</td>
		<td>$detstatu[1]</td>
		</tr>";
		}
	
	echo"
	</table>
	";
	echo"
	</td>

	<td>
	<form method='get' action='index.php'>
	<select name='invb' class='form-control'>
	<option value='faktur' "; if($invb=='faktur'){echo"selected";} else{echo"";}echo">No Faktur</option>
	<option value='nama' "; if($invb=='nama'){echo"selected";} else {echo"";} echo">Nama Customer</option>
	</select>
	<input type='hidden' name='load' value='dshop'>
	<input type='text' name='inv' value='$inv' class='form-control'>
	<input type='hidden' name='id' value='$id'>
	
	<input type='submit' value='cari' class='btn btn-primary'>
	";
	echo"<table width='100%'>
	<tr>
	<td>Faktur</td>
	<td>Tanggal</td>
	<td>Nama</td>
	<td>Rekening</td>
	<td>Jumlah</td>
	</tr>
	";
	$crconfirm=mysqli_query($conn,"select * from confirm where $invb like '%$inv%'");
	while($cconfirm=mysqli_fetch_array($crconfirm))
		{
		echo"
		<tr>
		<td>$cconfirm[invoice]</td>
		<td>$cconfirm[tglbyr]</td>
		<td>$cconfirm[nama]</td>
		<td>$cconfirm[namacus]<br>$cconfirm[bankcus]</td>
		<td>".number_format($cconfirm['jmlrp'],0,',',',')."</td>
		</tr>
		";
		}
	echo"</table>";
	echo"
	</td>
	</tr>
	</table>
	";
	}

function bkirimup()
	{require '../inc/inc.php';
	$bkirim=$_POST['bkirim'];
	$faktur=$_POST['faktur'];
	$a=mysqli_query($conn,"update cart set bkirim='$bkirim' where faktur='$faktur'");
	if($a)
		{header("Location: index.php?load=dshop&id=".$faktur."");}
	else
		{header("Location: index.php?load=dshop&id=".$faktur."");}
	}

function statusup()
	{require '../inc/inc.php';
	$status=$_POST['status'];
	if($status==0){$status2="Belum Dibayar";}
	elseif($status==1){$status2="Terbayar";}
	elseif($status==2){$status2="Pengiriman";}
	elseif($status==3){$status2="Selesai";}
	else{$status2="Belum Dibayar";}
	$ket=$_POST['ket'];
	$faktur=$_POST['faktur'];
	$date2=date('Y-m-d h:i');
	$statushid=$_POST['statushid'];
	if($statushid==$status)
		{$ket2=$ket;}
	else
		{$ket2="".$ket."#".$status2."*".$date2."";}
	$a=mysqli_query($conn,"update cart set status='$status', ket='$ket2' where faktur='$faktur'");
	if($a)
		{header("Location: index.php?load=dshop&id=".$faktur."");}
	else
		{header("Location: index.php?load=dshop&id=".$faktur."");}
	}

function confirm()
	{require '../inc/inc.php';
	if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}
	echo"<h3 align='center'>Konfirmasi Pembayaran</h3><br>
	<table class='table table-striped'>
	<tr>
	<td align='center'>No</td>
	<td align='center'>Tanggal</td>
	<td align='center'>Invoice</td>
	<td align='center'>Nama</td>
	<td align='center'>Email</td>
	<td align='center'>Jumlah</td>
	<td align='center'>Rek Tujuan</td>
	<td align='center'>Rek Pemesan</td>
	<td align='center'>Hapus</td>
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

	$a1=mysqli_query($conn,"select * from confirm order by idconfirm DESC limit $from, $max_results");
	$no=1;
	while($a=mysqli_fetch_array($a1))
		{
		echo"
		<tr>
		<td align='center'>$no</td>
		<td align='center'>$a[tglbyr]</td>
		<td align='left'>$a[invoice]</td>
		<td align='left'>$a[nama]</td>
		<td align='left'>$a[email]</td>
		<td align='right'>".number_format($a['jmlrp'],0,',',',')."</td>
		<td align='left'>$a[norektuj]</td>
		<td align='left'>$a[namacus]<br>$a[bankcus]</td>
		<td align='center'>
		<a href='index.php?load=delconfirm&id=$a[idconfirm]' OnClick='return confirm(\"Hapus Data Konfirmasi Pembayaran?\");'><i class='fa fa-trash-o'></i></a>
		";
		echo"
		</td>
		</tr>
		";
		$no++;
		}
	echo"
	</table>
	";
	//$total_results = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) as Num from confirm "),0);
	$totres=mysqli_query($conn,"SELECT COUNT(*) as jmlresult from confirm");
	while($totresu=mysqli_fetch_array($totres))
		{$total_results=$totresu['jmlresult'];}					
				
	$total_pages = ceil($total_results / $max_results);
	
		//echo "<center>[Page]<br>";
		echo"<center>";
		echo"<ul class='pagination'>";
		if($page > 1)
			{
			$prev = ($page - 1);
			echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=confirm&page=$prev\">&lt;&lt;Prev</a> </li>";
			}

		for($i = 1; $i <= $total_pages; $i++)
			{
			if(($page) == $i)
				{
				echo "<li class='active'><a href=\"".$_SERVER['PHP_SELF']."?load=confirm&page=$i\">$i</a> </li>";
				} 
			else 
				{
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=confirm&page=$i\">$i</a> </li>";
				}
			}
							
			if($page < $total_pages)
				{
				$next = ($page + 1);
				echo "<li><a href=\"".$_SERVER['PHP_SELF']."?load=confirm&page=$next\">Next>></a></li>";
				} 
			echo"</ul>
			<p>Terdapat $total_results Konfirmasi Pembayaran</p></center> 
			";
	
	}

function account()
	{require '../inc/inc.php';
	if(isset($_GET['msg']))
		{
		$msg=$_GET['msg'];
		$w=$_GET['w'];
		echo"
		<div class='alert alert-$w' role='alert'>
		<span class='badge badge-pill badge-$w'>Success</span>
		$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<i class='fa fa-times'></i>
		</button>
		</div>
		";
		}
	else
		{
		echo"";
		}
	$a1=mysqli_query($conn,"select * from useradmin where ket='admin' order by id DESC limit 1");
	while($a=mysqli_fetch_array($a1))
		{
		$id=$a['id'];
		$user=$a['user'];
		$password=$a['password'];
		}
	echo"<h3 align='center'>Ganti Password</h3><br>
	<form method='post' action='index.php?load=saccount'>
	<table class='table table-striped'>
	<tr>
	<td width='20%'>Username</td>
	<td><input type='text' name='username' class='form-control' required='' value='$user'></td>
	</tr>

	<tr>
	<td>Password Lama</td>
	<td><input type='password' name='passlama' class='form-control' required=''></td>
	</tr>

	<tr>
	<td>Password Baru</td>
	<td><input type='password' name='passbaru' class='form-control' required=''></td>
	</tr>

	<tr>
	<td></td>
	<td>
	<input type='hidden' name='pass' value='$password'>
	<input type='hidden' name='id' value='$id'>
	<input type='submit' value='GANTI PASSWORD' class='btn btn-danger'>
	</td>
	</tr>
	</table>
	</form>
	";
	
	
	}

function saccount()
	{require '../inc/inc.php';
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$passlama=md5($_POST['passlama']);
	$passbaru=md5($_POST['passbaru']);
	//echo"a $pass<br>b $passlama";
	
	if($pass==$passlama)
		{
		$a=mysqli_query($conn,"update useradmin set password='$passbaru' where id='$id'");
		if($a)
			{header('location: index.php?load=account&msg=Password Telah Diganti&w=danger');}
		else
			{header('location: index.php?load=account&msg=f&w=danger');}
		}
	else
		{header('location: index.php?load=account&msg=Masukkan Password Lama Dengan Benar&w=danger');}
	}

function delconfirm()
	{require '../inc/inc.php';
	$id=$_GET['id'];
	$a=mysqli_query($conn,"delete from confirm where idconfirm='$id'");
	if($a)
		{header('location: index.php?load=confirm&msg=Konfirmasi Pemesanan Telah Dihapus&w=warning');}
	else
		{header('location: index.php?load=confirm&msg=Errors&w=warning');}
	}

}
// checkout ubah utk no faktur. wkt bersamaan beda cust sama autoincre
// insert no faktur saat insert terakhir
// no faktur ditampilkan saat  konfirmasi terakhir, tampilkan lbh jls
?>