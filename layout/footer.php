
<footer>
<div class="container">
		<!--
		
			<!-- footer first section 
			<p class="footer-main">
				<span>"Goedang Oleh Oleh"</span>  adalah tempat yang menyediakan berbagai macam oleh-oleh khas Indonesia terutama Malang. Kami bertempat di Jl. Simpang Tenaga II no 12 Malang yang memiliki lokasi strategis. Sebagai Pusat Jajanan Serba Ada disini menyediakan Ruang Retail sebagai toko Oleh-Oleh. Kami menyediakan banyak jajanan khas Malang dan Jawa Timur</p>
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa ti-car" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer"><br>
						<h3>Parkir Luas</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa ti-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer"><br>
						<h3>Musholla</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-cutlery" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer"><br>
						<h3>Rest Area </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section 
			<i class='fa fa-briefcase'></i>
			-->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							<?php
							$menuprob1=mysqli_query($conn,"select * from merk order by kode ASC");
							while($menuprob=mysqli_fetch_array($menuprob1))
								{
								echo"
								<li><a href='index_kat.php?c=$menuprob[kode]'>$menuprob[keterangan]</a></a></li>
								";
								}
							?>
						</ul>
					</div>
					<!-- agile-secomk -->
					<div class="col-xs-6 footer-grids ">
					<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="content.php?load=accountbank">Bank Account</a>
							</li>
							<li>
								<a href="content.php?load=confirm">Payment Confirmation</a>
							</li>
							<li>
								<a href="content.php?load=testi">Testimonial</a>
							</li>
							<li>
								<a href="content.php?load=news">News</a>
							</li>
							<li>
								<a href="content.php?load=article">Articles</a>
							</li>
							<li>
								<a href="content.php?load=howtoshop">How To Shop</a>
							</li>
						</ul>
					</div>
					
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links 
				About Us
				Contact Us
				Peta Lokasi
				FAQs
				How To Shop
				Virtual Tour 3D
				-->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids agile-secomk" >
						
						<ul>
							<li>
								<a href="content.php?load=aboutus">About Us</a>
							</li>
							<li>
								<a href="content.php?load=contactus">Contact Us</a>
							</li>
							<li>
								<a href="content.php?load=lokasi">Peta Lokasi</a>
							</li>
							<li>
								<a href="content.php?load=faqs">Faqs</a>
							</li>
							
							<li>
								<a href="content.php?load=virtual">Virtual Tour 3D</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>  Jl. Simpang Tenaga II no 12 Malang</li>
							<li>
								<i class="fa fa-mobile"></i> 081335060700 </li>
							<li>
								<i class="fa fa-phone"></i> 0341-410567 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@gmail.com"> mail@example.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<!--
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							-->
						</ul>
					</div>
					<div class="agileits_app-devices">
						<h5>Download the App</h5>
						<a href="http://www.appsgeyser.com/getwidget/GoedangOlehOleh">
						
							<img src="images/1.png" alt="">
						</a>
						<a href="#">
							<!--<img src="images/2.png" alt="">-->
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">
				
				<!-- brands 
				<div class="sub-some">
					<h5>Popular Brands</h5>
					<ul>
						<li>
							<a href="product.html">Aashirvaad</a>
						</li>
						<li>
							<a href="product.html">Amul</a>
						</li>
						<li>
							<a href="product.html">Bingo</a>
						</li>
						<li>
							<a href="product.html">Boost</a>
						</li>
						<li>
							<a href="product.html">Durex</a>
						</li>
						<li>
							<a href="product.html"> Maggi</a>
						</li>
						<li>
							<a href="product.html">Glucon-D</a>
						</li>
						<li>
							<a href="product.html">Horlicks</a>
						</li>
						<li>
							<a href="product2.html">Head & Shoulders</a>
						</li>
						<li>
							<a href="product2.html">Dove</a>
						</li>
						<li>
							<a href="product2.html">Dettol</a>
						</li>
						<li>
							<a href="product2.html">Dabur</a>
						</li>
						<li>
							<a href="product2.html">Colgate</a>
						</li>
						<li>
							<a href="product.html">Coca-Cola</a>
						</li>
						<li>
							<a href="product2.html">Closeup</a>
						</li>
						<li>
							<a href="product2.html"> Cinthol</a>
						</li>
						<li>
							<a href="product.html">Cadbury</a>
						</li>
						<li>
							<a href="product.html">Bru</a>
						</li>
						<li>
							<a href="product.html">Bournvita</a>
						</li>
						<li>
							<a href="product.html">Tang</a>
						</li>
						<li>
							<a href="product.html">Pears</a>
						</li>
						<li>
							<a href="product.html">Oreo</a>
						</li>
						<li>
							<a href="product.html"> Taj Mahal</a>
						</li>
						<li>
							<a href="product.html">Sprite</a>
						</li>
						<li>
							<a href="product.html">Thums Up</a>
						</li>
						<li>
							<a href="product2.html">Fair & Lovely</a>
						</li>
						<li>
							<a href="product2.html">Lakme</a>
						</li>
						<li>
							<a href="product.html">Tata</a>
						</li>
						<li>
							<a href="product2.html">Sunfeast</a>
						</li>
						<li>
							<a href="product2.html">Sunsilk</a>
						</li>
						<li>
							<a href="product.html">Patanjali</a>
						</li>
						<li>
							<a href="product.html">MTR</a>
						</li>
						<li>
							<a href="product.html">Kissan</a>
						</li>
						<li>
							<a href="product2.html"> Lipton</a>
						</li>
					</ul>
				</div>
				<!-- //brands 
				<!-- payment 
				<div class="sub-some child-momu">
					<h5>Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				-->

				<!-- //payment -->
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>� 2017 Goedang Oleh Oleh. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


	 <!--<script src="js/jquery.cookie.js"></script>
	 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js">
</script>
            <script>
            $(document).ready(function() {
                 if ($.cookie(�pop�) == null) {
                     $(�#myModal3�).modal(�show�);
                     $.cookie(�pop�, �1');
                 }
             });
            </script>
-->
<!--
		<script>
            $(window).load(function()
			{
				$('#myModal3').modal('show');
			});
            </script> -->
<!--
Menu
-idmenu
-namamenu
-posmenu
-link
-->
</body>

</html>
