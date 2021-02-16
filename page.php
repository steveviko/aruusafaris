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
  <?php 
$pagetype=$_GET['type'];
$sql = "SELECT id,detail, PageName,type from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
		
	

?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <?php  foreach($results as $result){		
?>
        <!-- <li class="breadcrumb-item"><a href="#">Category name</a></li> -->
        <!-- <li class="breadcrumb-item"><a href="#">Sub category</a></li> -->
        <li class="breadcrumb-item active" aria-current="page"><?php 	echo $result->PageName;  ?></li>
    </ol>
    <?php 
  }}?>
  </div>
</section>
<!-- ============================ FILTER TOP END.// ================================= -->





<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg-white padding-y">
<div class="container">

					
<!-- ============================ ITEM DETAIL ======================== -->
	<div class="row">
		<aside class="col-md-6">
<div class="card">
<article class="gallery-wrap"> 
	<div class="img-big-wrap">
	
</article> <!-- gallery-wrap .end// -->
</div> <!-- card.// -->
		</aside>
		<main class="col-md-6">
<article class="product-info-aside">



</article> <!-- product-info-aside .// -->
		</main> <!-- col.// -->
        <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail, PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
	foreach($results as $result)
{		
	

?>
	</div> <!-- row.// -->
    <article class="card mb-4">
		<header class="card-header bg-green text-white">
			<a href="#" class="float-right"> <i class="fa fa-print"></i> </a>
			<strong class="d-inline-block mr-3">Order ID: 6123456789</strong>
			<span>Order Date: 16 December 2018</span>
		</header>
		<div class="card-body">
			<div class="row"> 
				<div class="col-md-12">
    <?php 	echo $result->detail; ?>

	</div>
			</div> <!-- row.// -->
		</div> <!-- card-body .// -->
</div> <!-- container .//  -->
<?php 
}}?>
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
<div class="container">


	
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