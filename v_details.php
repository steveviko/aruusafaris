<?php include_once("./includes/header.php"); ?> 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">




<div class="row" style="margin-top:135px">
	<aside class="col-md-3">

	
		<?php include_once"aside.php"; ?>
	</aside> <!-- col.// -->
	<main class="col-md-9">

<!-- ============================  FILTER TOP  ================================= -->
<section class="py-3 bg-light">
  <div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <!-- <li class="breadcrumb-item"><a href="#">Category name</a></li> -->
        <!-- <li class="breadcrumb-item"><a href="#">Sub category</a></li> -->
        <li class="breadcrumb-item active" aria-current="page">Details</li>
    </ol>
  </div>
</section>
<!-- ============================ FILTER TOP END.// ================================= -->

<!-- <header class="mb-3">
		<div class="form-inline">
			<strong class="mr-md-auto"> </strong>
			<select class="mr-2 form-control">
				<option>Latest items</option>
				<option>Trending</option>
				<option>Most Popular</option>
				<option>Cheapest</option>
			</select>
			<div class="btn-group">
				<a href="#" class="btn btn-light" data-toggle="tooltip" title="List view"> 
					<i class="fa fa-bars"></i></a>
				<a href="#" class="btn btn-light active" data-toggle="tooltip" title="Grid view"> 
					<i class="fa fa-th"></i></a>
			</div>
		</div>
</header> -->
<!-- sect-heading -->



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
<div class="container">
<?php 
$vhid=intval($_GET['vhid']);
$sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:vhid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
?>
					<?php foreach($results as $result)
{	?>
					
<!-- ============================ ITEM DETAIL ======================== -->
	<div class="row">
		<aside class="col-md-6">
<div class="card">
<article class="gallery-wrap"> 
	 <!-- slider-product.// -->
	<div class="thumbs-wrap">
	  <!-- <a href="#" class=""> <img src="images/items/15.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="images/items/15-1.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="images/items/15-2.jpg"></a>
      <a href="#" class="item-thumb"> <img src="images/items/15-1.jpg"></a> -->
      <div class="flexslider">
    <ul class="slides">
        <li data-thumb="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>">
            <div class="thumb-image">
                <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
        </li>
        <li data-thumb="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage2);?>">
            <div class="thumb-image">
                <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage2);?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
        </li>
        <li data-thumb="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage3);?>">
            <div class="thumb-image">
                <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage3);?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
        </li>
        <li data-thumb="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage4);?>">
            <div class="thumb-image">
                <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage4);?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
        </li>
    </ul>
    <div class="clearfix"></div>
</div> <!-- slider-nav.// -->
    </div> <!-- slider-nav.// -->

    
</article> <!-- gallery-wrap .end// -->
</div> <!-- card.// -->
		</aside>
		<main class="col-md-6">
<article class="product-info-aside">

<h2 class="title mt-3"> <?php echo htmlentities($result->VehiclesTitle);?></h2>

<div class="rating-wrap my-3">
	<ul class="rating-stars">
		<li style="width:80%" class="stars-active"> 
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
	<small class="label-rating text-muted">132 reviews</small>
	<small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>
</div> <!-- rating-wrap.// -->

<div class="mb-3"> 
	<var class="price h4">From, $<?php echo htmlentities($result->PricePerDay);?> </var> 
	<span class="text-muted"></span> 
</div> <!-- price-detail-wrap .// -->

<p>
    
<ul class="features_list">
                
<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
<!-- <li><i class="fa fa-calendar" aria-hidden="true"></i><?php //echo htmlentities($result->ModelYear);?> model</li> -->
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
</ul>
</p>


<!-- <dl class="row">
  <dt class="col-sm-3">Manufacturer</dt>
  <dd class="col-sm-9"><a href="#">Great textile Ltd.</a></dd>

  <dt class="col-sm-3">Article number</dt>
  <dd class="col-sm-9">596 065</dd>

  <dt class="col-sm-3">Guarantee</dt>
  <dd class="col-sm-9">2 year</dd>

  <dt class="col-sm-3">Delivery time</dt>
  <dd class="col-sm-9">3-4 days</dd>

  <dt class="col-sm-3">Availabilty</dt>
  <dd class="col-sm-9">in Stock</dd>
</dl> -->

	<div class="form-row  mt-4">
		<!-- <div class="form-group col-md flex-grow-0"> -->
			<!-- <div class="input-group mb-3 input-spinner">
			  <div class="input-group-prepend">
			    <button class="btn btn-light" type="button" id="button-plus"> + </button>
			  </div>
			  <input type="text" class="form-control" value="1">
			  <div class="input-group-append">
			    <button class="btn btn-light" type="button" id="button-minus"> &minus; </button>
			  </div>
			</div>
		</div> col.// -->
		<div class="form-group col-md">
			<a href="car_booking.php?vhid=<?php echo htmlentities($result->id);?>"  class="btn  btn-primary"> 
				<i class="fas fa-shopping-cart"></i> <span class="text">Book Now</span> 
			</a>
			<a href="#" class="btn btn-light">
		<!-- <i class="fas fa-envelope"></i>  -->
		<span class="text">Call us on <i class="fab fa-whatsapp" style="color:green"></i> (+256) 772 517 666 </span> 
			</a>
		</div> <!-- col.// -->
	</div> <!-- row.// -->

</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
	</div> <!-- row.// -->

<!-- ================ ITEM DETAIL END .// ================= -->


</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
<div class="container">

<div class="row">
	<div class="col-md-8">
		<h5 class="title-description">Description</h5>
		<p>
		F<?php echo htmlentities($result->VehiclesOverview);?> 
		</p>
		<!-- <ul class="list-check">
		<li>Material: Stainless steel</li>
		<li>Weight: 82kg</li>
		<li>built-in drip tray</li>
		<li>Open base for pots and pans</li>
		<li>On request available in propane execution</li>
		</ul> -->

		<!-- <h5 class="title-description">Specifications</h5>
		<table class="table table-bordered">
			<tr> <th colspan="2">Basic specs</th> </tr>
			<tr> <td>Brands</td><td><?php //echo htmlentities($result->BrandName);?> </td> </tr>
			<tr> <td>Number of seats</td><td><?php// echo htmlentities($result->SeatingCapacity);?></td> </tr>
			<tr> <td>Model</td> <td> <i class="fa fa-check text-success"></i> <?php //echo htmlentities($result->ModelYear);?>  </td></tr>

			
			<tr> <th colspan="2">Fuel</th> </tr>
			<tr> <td>Fuel Type</td><td><?php //echo htmlentities($result->FuelType);?></td> </tr>
		

			

		</table> -->
	</div> <!-- col.// -->
	<?php }}else{

echo "No Items found under Cars";
} ?>

	<aside class="col-md-4">

		<div class="box">
		
		<!-- <h5 class="title-description">Files</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p> -->

	
	<h6 class="bg-blue text-center text-white mb-0 p-2">Related Cars</h6>
	<?php 
							
							$conn = mysqli_connect("localhost","root", "", "tours");
							if(isset($_GET['vhid'])){
								
								$s_id = $_GET['vhid'];
								
								$get_cat = "select * from tblvehicles where id ='$s_id'";
								$run_cat = mysqli_query($conn, $get_cat);
								$num_rows = mysqli_num_rows($run_cat);
							
								while($row_cats = mysqli_fetch_array($run_cat)){
									
									$type = $row_cats['VehiclesBrand'];
								}
									
									
									$get_type = "select * from tblvehicles where VehiclesBrand ='$type'";	
									$run_type = mysqli_query($conn, $get_type);
									$num_rows = mysqli_num_rows($run_type);
								
									while($row_types = mysqli_fetch_array($run_type)){
										$p_id = $row_types['id'];
										$p_title = $row_types['VehiclesTitle'];
										$p_image = $row_types['Vimage1'];
										$p_desc = $row_types['VehiclesOverview'];
										
								
								if($num_rows > 0){			
							
							?>

    <article class="media mb-3">
      <a href="#"><img class="img-sm mr-3" src="admin/img/vehicleimages/<?php echo htmlentities($p_image);?>"></a>
      <div class="media-body">
        <h6 class="mt-0"><a href="v_details.php?vhid=<?php echo htmlentities($p_id);?>"> <?php echo htmlentities($p_title);?></a></h6>
        <p class="mb-2">  <?php echo substr_replace(htmlentities($p_desc), "...", 60);?> </p>
      </div>
	</article>
	<?php 
} else{
	
	echo "No product found  ";
} }}?>

    


		
	</div> <!-- box.// -->
	</aside> <!-- col.// -->
</div> <!-- row.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->







	</main> <!-- col.// -->

</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<?php include_once("./includes/footer.php"); ?> 