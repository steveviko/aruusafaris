<?php include_once("./includes/header.php"); ?> 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">



<div class="row">
	<aside class="col-md-2 " style="margin-top:135px">

	<?php include_once"aside.php"; ?>
	

	</aside> <!-- col.// -->
	<main class="col-md-10">
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
<div class="card mb-3" style="margin-top:115px">
	<div class="card-body">
		<ol class="breadcrumb float-left">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Pacakge Lists</a></li>
			<!-- <li class="breadcrumb-item active">Item details</li> -->
		</ol>
	</div> <!-- card-body .// -->
</div> <!-- card.// -->
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