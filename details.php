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

<!-- 
<header class="mb-3">
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
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
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
		<aside class="col-md-12">
<div class="card">
<article class="gallery-wrap"> 
	<div class="img-big-wrap">
	  <div> <a href="#"><img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>"></a></div>
	</div> <!-- slider-product.// -->
	<!-- <div class="thumbs-wrap">
	  <a href="#" class="item-thumb"> <img src="images/items/15.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="images/items/15-1.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="images/items/15-2.jpg"></a>
	  <a href="#" class="item-thumb"> <img src="images/items/15-1.jpg"></a>
	</div> slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
</div> <!-- card.// -->
		</aside>
		<main class="col-md-9">
<article class="product-info-aside">

<h2 class="title mt-3"><b>Name:</b> <?php echo htmlentities($result->PackageName);?></h2>

<!-- <div class="rating-wrap my-3">
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
</div> -->

<div class="mb-3"> 
	<!-- <var class="price h4">From, $<?php// echo htmlentities($result->PackagePrice);?> </var>  -->
	<span class="text-muted"></span> 
</div> <!-- price-detail-wrap .// -->

<!-- <p><?php //echo htmlentities($result->PackageFetures);?> </p> -->


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
			<a href="book.php"  class="btn  btn-primary"> 
				<i class="fas fa-shopping-cart"></i> <span class="text">Book Now</span> 
			</a>
			<a href="#" class="btn btn-light">
		<!-- <i class="fas fa-envelope"></i>  -->
		<span class="text">Contact us on <i class="fab fa-whatsapp" style="color:green"></i> (+256) 772 517 666 </span> 
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
	<div class="col-md-12">
		<h5 class="title-description">Description</h5>
		<p>
		<?php echo htmlentities($result->PackageDetails);?> 
		</p>
		<!-- <ul class="list-check">
		<li>Material: Stainless steel</li>
		<li>Weight: 82kg</li>
		<li>built-in drip tray</li>
		<li>Open base for pots and pans</li>
		<li>On request available in propane execution</li>
		</ul> -->

		
	</div> <!-- col.// -->
	<?php }}else{

echo "No Items found under packages";
} ?>


</div> <!-- row.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<?php 
//Query for Listing count
$sql = "SELECT id from tbltourpackages";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
?>

<!-- ============================  FILTER TOP  ================================= -->

<!-- ============================ FILTER TOP END.// ================================= -->

<!-- <header class="mb-3">
		<div class="form-inline">
			<strong class="mr-md-auto">(<?php echo htmlentities($cnt);?>)Cars Found  </strong>
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

<?php $sql = "SELECT * from tbltourpackages order by rand() limit 9";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{ 
foreach($results as $result)
{	?>

<article class="card card-product-list">
	<div class="row no-gutters">
		<aside class="col-md-3">
			<a href="details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="img-wrap">
				<span class="badge badge-danger"> NEW </span>
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>">
			</a>
		</aside> <!-- col.// -->
		<div class="col-md-6">
			<div class="info-main">
				<a href="details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="h5 title"> <b>Name: </b><?php echo htmlentities($result->PackageName);?> </a>
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

				<p> <?php echo substr_replace(htmlentities($result->PackageDetails), "...", 200);?> </p>

			</div> <!-- info-main.// -->
		</div> <!-- col.// -->
		<aside class="col-sm-3" >
			<div class="info-aside">
				<div class="price-wrap">
					<!-- <span class="h5 price">From, $<?php //echo htmlentities($result->PackagePrice);?></span>  -->
					<small class="text-muted"></small>
				</div> <!-- price-wrap.// -->
				<small class="text-warning">Call and we customize the package within your Budget</small>
				
				<p class="text-muted mt-3">Aruu Falls Safaris Co</p>
				<p class="mt-3">
					<a href="book.php" class="btn btn-outline-primary"> <i class="fa fa-book"></i> Reservation  </a>
					<a href="contact.php" class="btn btn-outline-primary"> <i class="fa fa-envelope"></i> Contact us </a>
					<a href="details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="btn btn-success mt-2"><i class="fa fa-arrow"></i> View Details </a>
				</p>

				

			</div> <!-- info-aside.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</article> <!-- card-product .// -->

<?php }}else{

echo "No Items found under packages";
} ?>




	</main> <!-- col.// -->

</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



<?php include_once("./includes/footer.php"); ?> 

