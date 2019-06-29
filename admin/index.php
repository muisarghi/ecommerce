<?php
session_start();
ob_start();
include('../inc/inc.php');
//include('../inc/se.php');

if($_SESSION['sesket']!='admin')
	{header('location: ../login/index.php?msg=no');}
else
{
if($_SESSION['id'])
{

?>

<?php
@ini_set('display_errors', 'off');

include('header.php');
?>
	<div class="ads-gridmda">
		<div class="container">
			<div class="side-bar col-md-3">
				<div class="left-side">
					<h3 class="agileits-sear-head">Administrator</h3>
					<?php include ('menu.php'); ?>
					
				</div>
				
			</div>
			
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					
					<div class="product-sec1">
						<!--<h3 class="heading-tittle">CONTENT</h3>
						CONTENT
						-->
						<?php include('panel.php'); ?>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	
	
	
	

<?php
include ('footer.php');
?>



<?php
}

else
{header("Location: ../login/index.php");}
}
?>