
<!-- =============== SECTION SERVICES =============== -->
<section  class="padding-bottom" id="services">

	<header class="section-heading heading-line">
		<h4 class="title-section text-uppercase">Services Offered at Aruu Falls Safaris</h4>
	</header>
	
	<div class="row">
		<div class="col-md-3 col-sm-6">
			<article class="card card-post">
			  <img src="images/posts/1.jpg" class="card-img-top">
			  <div class="card-body">
				<h6 class="title">Tours And Travels</h6>
				<p class="small text-uppercase text-muted">Within East Africa</p>
			  </div>
			</article> <!-- card.// -->
		</div> <!-- col.// -->
		<div class="col-md-3 col-sm-6">
			<article class="card card-post">
			  <img src="images/2.jpg" class="card-img-top">
			  <div class="card-body">
				<h6 class="title">Car Hire</h6>
				<p class="small text-uppercase text-muted">At Affordable Prices</p>
			  </div>
			</article> <!-- card.// -->
		</div> <!-- col.// -->
		<div class="col-md-3 col-sm-6">
			<article class="card card-post">
			  <img src="images/posts/3.jpg" class="card-img-top">
			  <div class="card-body">
				<h6 class="title">Consultaion</h6>
				<p class="small text-uppercase text-muted">Services</p>
			  </div>
			</article> <!-- card.// -->
		</div> <!-- col.// -->
		<div class="col-md-3 col-sm-6">
			<article class="card card-post">
			  <img src="images/posts/4.jpg" class="card-img-top">
			  <div class="card-body">
				<h6 class="title">Booking </h6>
				<p class="small text-uppercase text-muted"> or Reservation</p>
			  </div>
			</article> <!-- card.// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	
	</section>
	<!-- =============== SECTION SERVICES .//END =============== -->
	
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer " style="background:#489689;">
	<div class="container">
		<section class="footer-top padding-y-lg text-white">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
				<?php	$sql = "SELECT * from tblpages order by rand() ";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0)
					{
										

					?>
					<ul class="list-unstyled">
					<?php foreach($results as $result)
					{?>
						<li> <a href="page.php?type=<?php echo htmlentities($result->type); ?>"><?php echo htmlentities($result->PageName);?></a></li>
						<?php }}else{
				echo "No pages found";
			}?>	
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#"><i class="fab fa-whatsapp"></i> (+256) 772 517 666 </a></li>
						<li> <a href="#"><i class="fa fa-phone"></i> (+256) 772 517 666 </a></li>
						<li> <a href="#"><i class="fa fa-envelope"></i> info.@aruufalls.com </a></li>
						<!-- <li> <a href="#">Open dispute</a></li> -->
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Services</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> Tours And Travels </a></li>
						<li> <a href="#"> Car Hire </a></li>
						<li> <a href="#"> Consultations </a></li>
						<!-- <li> <a href="#"> My Orders </a></li> -->
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-whatsapp"></i> (+256) 772 517 666 </a></li>
						<!-- <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li> -->
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom text-center">
		
				<p class="text-white">Privacy Policy - Terms of Use - User Information Legal Enquiry Guide</p>
				<p class="text-white"> &copy 2020 Aruu Falls Safaris, All rights reserved </p>
				<br>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
<script src="./js/jquery-2.0.0.min.js" type="text/javascript"></script>
<script src="./js/jquery.flexslider.js"></script>
<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->
	<script src="./js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>

</body>
</html>