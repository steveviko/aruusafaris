<?php include_once("./includes/header.php"); ?> 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">





<div class="row">
	<aside class="col-md-2">

	
	<?php include_once"aside.php"; ?>
	</aside> <!-- col.// -->
	<main class="col-md-9">

<!-- ============================  FILTER TOP  ================================= -->
<div class="card mb-3">
	<div class="card-body">
		<ol class="breadcrumb float-left">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Search Results </a></li>
			<!-- <li class="breadcrumb-item active">Cars</li> -->
		</ol>
	</div> <!-- card-body .// -->
</div> <!-- card.// -->
<!-- ============================ FILTER TOP END.// ================================= -->


<?php 
							
							$conn = mysqli_connect("localhost","root", "", "tours");
                            if(isset($_GET['submit_search'])){
	
                                $query_name = $_GET['search_query'];
                                
                                $get_cat = "select * from tblvehicles where VehiclesTitle  like '%$query_name%' 
                                            OR PricePerDay like '%$query_name%' OR FuelType like '%$query_name%' 
                                            OR VehiclesOverview like '%$query_name%' OR VehiclesBrand like '%$query_name%'
                                            OR ModelYear like '%$query_name%' OR 'car' like '%$query_name%' OR 'cars' like '%$query_name%'";
                                $run_cat = mysqli_query($conn, $get_cat);
                                $num_rows = mysqli_num_rows($run_cat);
								if($num_rows > 0){	

                          
		
	
			

?>
<!-- ============================ COMPONENT BOOTSTRAP CARD WITH  IMG ================================= -->
<div class="row">
	<?php
      while($row_cats = mysqli_fetch_array($run_cat)){
		$p_id = $row_cats['id'];
		$p_image = $row_cats['Vimage1'];
		$p_name = $row_cats['VehiclesTitle'];
		$p_brand = $row_cats['VehiclesBrand'];		
		$p_price = $row_cats['PricePerDay'];
		$p_details = $row_cats['VehiclesOverview'];
		$p_fuel = $row_cats['FuelType'];
		$p_seat = $row_cats['SeatingCapacity'];


	?>
		<div class="col-md-4">
			<div class="card bg-dark">
			  <img src="admin/img/vehicleimages/<?php echo htmlentities($p_image);?>" style=" width:340px;height:208px;padding:2px" class="card-img opacity">
			  <div class="card-img-overlay text-white">
			    <h6 class="card-title"><?php echo htmlentities($p_name);?></h6>
			    <p class="card-text" style="display:flex;">
				<ul>
				<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($p_seat);?> seats</li>
				<!-- <li><i class="fa fa-calendar" aria-hidden="true"></i><?php //echo htmlentities($result->ModelYear);?> model</li> -->
				<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($p_fuel);?></li>
				</ul>
				</p>
			    <a href="v_details.php?vhid=<?php echo htmlentities($p_id);?>" class="btn btn-success">View Detials</a>
			  </div>
			</div>
		</div> <!-- col.// -->
		<?php 
} } }
?>
	<?php 
						
						$conn = mysqli_connect("localhost","root", "", "tours");
						if(isset($_GET['submit_search'])){

							$query_name = $_GET['search_query'];
							
							$get_cat = "select * from tbltourpackages where PackageName  like '%$query_name%' 
										OR PackageType like '%$query_name%' OR PackageLocation like '%$query_name%' 
										OR PackagePrice like '%$query_name%' OR PackageFetures like '%$query_name%'
										OR PackageDetails like '%$query_name%' OR 'prices' like '%$query_name%' OR 'packages' like '%$query_name%'";
							$run_cat = mysqli_query($conn, $get_cat);
							$num_rows = mysqli_num_rows($run_cat);
							if($num_rows > 0){	
								
							while($row_cats = mysqli_fetch_array($run_cat)){
								$pa_id = $row_cats['id'];
								$pa_image = $row_cats['PackageImage'];
								$pa_name = $row_cats['PackageName'];
								$pa_brand = $row_cats['PackageType'];		
								$pa_location = $row_cats['PackageLocation'];
								$pa_price = $row_cats['PackagePrice'];
								$pa_details = $row_cats['PackageDetails'];
								$pa_fetures = $row_cats['PackageFetures'];
	
	
	

		?>
<article class="card card-product-list">
	<div class="row no-gutters">
		<aside class="col-md-3">
			<a href="details.php?pkgid=<?php echo htmlentities($pa_id);?>" class="img-wrap">
				<span class="badge badge-danger"> NEW </span>
				<img src="admin/pacakgeimages/<?php echo htmlentities($pa_image);?>">
			</a>
		</aside> <!-- col.// -->
		<div class="col-md-6">
			<div class="info-main">
				<a href="details.php?pkgid=<?php echo htmlentities($pa_id);?>" class="h5 title"> <b>Name: </b><?php echo htmlentities($pa_ame);?> </a>
				<div class="rating-wrap mb-2">
					<ul class="rating-stars">
						<li style="width:100%" class="stars-active"> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
						<li>
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
					</ul>
					<div class="label-rating">9/10</div>
				</div> <!-- rating-wrap.// -->
			
				<p class="mb-3">
					<span class="tag"> <i class="fa fa-check"></i> Verified</span> 
					
					<span class="tag"> 80 reviews </span>
					
				</p>

				<p> <?php echo substr_replace(htmlentities($pa_details), "...", 200);?> </p>

			</div> <!-- info-main.// -->
		</div> <!-- col.// -->
		<aside class="col-sm-3">
			<div class="info-aside">
				<div class="price-wrap">
					<span class="h5 price">From, $<?php echo htmlentities($pa_price);?></span> 
					<small class="text-muted"></small>
				</div> <!-- price-wrap.// -->
				<small class="text-warning">Call and we customize the package within your Budget</small>
				
				<p class="text-muted mt-3">Aruu Falls Safaris Co</p>
				<p class="mt-3">
					<a href="book.php" class="btn btn-outline-primary"> <i class="fa fa-book"></i> Reservation  </a>
					<a href="contact.php" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact us </a>
					<a href="details.php?pkgid=<?php echo htmlentities($pa_id);?>" class="btn btn-success mt-2"><i class="fa fa-arrow"></i> View Details </a>
				</p>

				

			</div> <!-- info-aside.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</article> <!-- card-product .// -->

<?php 
}

}}else{
	
	echo "No  Match For Your search Found  ";
}?>
				
			
	</div> <!-- row.// -->
<!-- ============================ COMPONENTBOOTSTRAP CARD IMG  END .// ================================= -->


<br><br>














	</main> <!-- col.// -->

</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<?php include_once("./includes/footer.php"); ?> 