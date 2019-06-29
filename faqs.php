<?php
include 'layout/header.php';
?>
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Faqs</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- FAQ-help-page -->
	<div class="faqs-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">FAQs
				<span class="heading-style">
					
				</span>
			</h3>
			<!-- //tittle heading -->
			<h3 class="w3-head">Pertanyaan yang Sering Diajukan</h3>
			<div class="faq-w3agile">
				<ul class="faq">
					<li class="item1">
						<a href="#" title="click here">Bagaimana cara melakukan order di toko Online ini?</a>
						<ul>
							<li class="subitem1">
								<p> Untuk order Anda dapat melakukan dari halaman website, dengan memilih produk terlebih dahulu. Selanjutnya adalah proses ordering dan diakhiri dengan Proses Checkout.</p>
							</li>
						</ul>
					</li>
					<li class="item2">
						<a href="#" title="click here">Bagaimana metode pembayaran di toko online ini?</a>
						<ul>
							<li class="subitem1">
								<p> Pembayaran dapat anda lakukan dengan melakukan transfer ke nomor rekening yang kami tunjuk, selanjutnya konfirmasikan pembayaran anda kepada kami untuk kami validasi.</p>
							</li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //FAQ-help-page -->

<?php
include 'layout/footer.php';
?>

<script>
		$(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
	</script>