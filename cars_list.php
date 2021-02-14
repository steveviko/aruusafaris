<?php include_once("./includes/header.php"); ?> 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">





<div class="row">
	<aside class="col-md-2" style="margin-top:135px">

	
	<?php include_once"aside.php"; ?>
	</aside> <!-- col.// -->
	<main class="col-md-10">

<!-- ============================  FILTER TOP  ================================= -->
<div class="card mb-3" style="margin-top:115px">
	<div class="card-body">
		<ol class="breadcrumb float-left">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="#">All Available Cars</a></li>
			<!-- <li class="breadcrumb-item active">Cars</li> -->
		</ol>
	</div> <!-- card-body .// -->
</div> <!-- card.// -->
<!-- ============================ FILTER TOP END.// ================================= -->
<header class="mb-3">
<?php 
//Query for Listing count
$sql = "SELECT id from tblvehicles";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
?>
		<div class="form-inline">
			<strong class="mr-md-auto">(<?php echo htmlentities($cnt);?>)Cars Found </strong>
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
</header><!-- sect-heading -->

<?php $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
?>
<!-- ============================ COMPONENT BOOTSTRAP CARD WITH  IMG ================================= -->
<div class="row">
<?php foreach($results as $result)
{  ?>
		<div class="col-md-4">
			<div class="card bg-dark">
			  <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" style=" width:340px;height:208px;padding:2px" class="card-img opacity">
			  <div class="card-img-overlay text-white">
			    <h6 class="card-title"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></h6>
			    <p class="card-text" style="display:flex;">
				<ul>
				<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
				<!-- <li><i class="fa fa-calendar" aria-hidden="true"></i><?php //echo htmlentities($result->ModelYear);?> model</li> -->
				<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
				</ul>
				</p>
			    <a href="v_details.php?vhid=<?php echo htmlentities($result->id);?>" class="btn btn-success">View Detials</a>
			  </div>
			</div>
		</div> <!-- col.// -->
		<?php }} ?>
		
		
	</div> <!-- row.// -->
<!-- ============================ COMPONENTBOOTSTRAP CARD IMG  END .// ================================= -->


<br><br>








<div class="row">
		<div class="col-md-8">
<!-- ============================ COMPONENT BANNER 7 ================================= -->
<div class="card-banner overlay-gradient" style="min-height:230px; background-image: url('./images/10.jpg');">
  <div class="card-img-overlay white">
    <h3 class="card-title">Need to Hire a Car  Now</h3>
    <p class="card-text" style="max-width: 400px">Aruu Falls Safaris got you covered.</p>
    <a href="car_booking.php" class="btn btn-warning">Book Now </a>
  </div>
</div>
<!-- ============================ COMPONENT BANNER 7  END .// =========================== -->
		</div> <!-- col.// -->
		<div class="col-md-4">
<!-- ============================ COMPONENT BANNER 8  ================================= -->
<div class="card-banner overlay-gradient" style="min-height:230px; background-image: url('./images/12.jpg');">
  <div class="card-img-overlay text-white">
    <h5 class="card-title">Call or Email us for more information</h5>
	<p class="card-text"><i class="fab fa-facebook" style="color:blue;"></i> Facebook <br>
	<i class="fa fa-envelope" style="color:blue;"></i> aruusafaris@gmail.com <br>
	<i class="fab fa-whatsapp" style="color:green;" ></i> (+256) 772 517 666.</p>
  </div>
</div>
<!-- ============================ COMPONENT BANNER 8  END .// ================================= -->
		</div> <!-- col.// -->
</div> <!-- row.// -->


<br><br>
<!-- <nav class="mb-4" aria-label="Page navigation sample">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->





	</main> <!-- col.// -->

</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<?php include_once("./includes/footer.php"); ?> 