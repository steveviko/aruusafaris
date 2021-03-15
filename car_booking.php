<?php include_once("./includes/header.php"); ?> 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">




<div class="row" style="margin-top:135px">
	<aside class="col-md-3">

	
		<?php include_once"aside.php"; ?>
	</aside> <!-- col.// -->
	<main class="col-md-9">




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
       

	</div> <!-- row.// -->
    <article class="card mb-4">
		<header class="card-header bg-green text-white">
			<a href="index.php" class="float-right"> <i class="fa fa-print text-white"></i>Home </a> 
			<strong class="d-inline-block mr-3">Make Car Booking/Reservation with Aruu Falls Safaris.</strong>
			
		</header>
		<div class="card-body">
			<div class="row"> 
				<div class="col-md-12 d-flex">
                <aside class="col-md-6">

<!-- ============================ COMPONENT FEEDBACK  ================================= -->
	<div class="card mb-4">
      <div class="card-body">
	  <h4 class="card-title mb-4">Book Your Favorite car for Hire With us</h4>
	
<?php 
if(isset($_GET['vhid']))
{
$vhid=$_GET['vhid'];

$sql= "SELECT * from tblvehicles where id='$vhid'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{ 
	
	foreach($results as $result)
	{

		$car_id = $result->id;
		$title = $result->VehiclesTitle;
	}

?>

      <form action="booking.php" method="post">
	  <input type="hidden" class="form-control" name="carid" required="" value="<?php echo htmlentities($car_id);?>">
	  <input type="hidden" class="form-control" name="carname" required="" value="<?php echo htmlentities($title);?>">
	  <p class="alert alert-success"> <i class="fa fa-pen "></i> 
		&nbsp; Yor are making Reservation for <span class="text-black" style="color:red;" ><?php echo htmlentities($title);?></span> car.
</p>
      <div class="form-group">
			<label>Name</label>
		  	<input type="text" class="form-control" name="name" required="" placeholder="Enter your name">
		</div>
		<div class="form-group">
			<label>Phone Number</label>
		  	<input type="text" name="phone" required="" class="form-control" placeholder="Enter your phone Number">
        </div>
	
		<div class="form-group">
			<label>Email</label>
		  	<input type="text" name="email" required="" class="form-control" placeholder="Enter your Email">
        </div>
        <div class="form-group">
			<label>From DATE</label>
			<input  type="date" class="form-control"    name="fromdate" required="">
		</div> <!-- form-group end.// -->
		<div class="form-group">
			<label>TO Date </label>
			<input   type="date" class="form-control"    name="todate" required="">
		     </div>      
        
	
      
		<div class="form-group">
			<label>Any Other Addtional information you would like to let us Know?</label>
			<textarea class="form-control" rows="3" name="message" required=""></textarea>
		</div>
		
		<button type="type" name="submitbook" class="btn btn-primary btn-block">Send</button>
	  </form>
	  <?php	}
}
?>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->
<!-- ============================ COMPONENT FEEDBACK END.// ================================= -->

	</aside>
	

	<aside class="col-md-6">


<!-- ============================ COMPONENT PAYMENT  ================================= -->
	<div class="card mb-4">
      <div class="card-body">
      <h4 class="card-title mb-4">Location</h4>
      <form role="form">
	  <div class="col-md-12">
                <article class="box mb-4">
                    <h6>Gulu, Uganda</h6>
                    <p>Building one <br> Floor: 2, Aprt: 32  </p>
                    <a href="#" class="btn btn-light"></a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
                </article>
            </div>  <!-- col.// --> <!-- form-group.// -->

<div class="form-group">
<label for="cardNumber">Socail Media Links</label>
<div class="input-group">
	<nav>
	<ul class="navbar-nav">
		<li><a href="#" class="nav-link"> <i class="fa fa-envelope" style="color:blue;"></i> aruufallssafaris@gmail.com </a></li>
			<li><a href="#" class="nav-link"> <i class="fab fa-facebook" style="color:blue;"></i> Facebook </a></li>
			<li><a href="#" class="nav-link"> <i class="fab fa-whatsapp" style="color:green;" ></i> (+256) 702 369 454</a></li>
			<li><a href="#" class="nav-link"> <i class="fa fa-phone"></i> Call us (+256)  7703 941 720</a></li>
		</ul> <!-- list-inline //  -->
	</nav>
	</div>
</div> <!-- input-group.// -->
</div> <!-- form-group.// -->


 
<p class="alert alert-success"> <i class="fa fa-lock"></i> 
We would love to hear from you!
In order to provide you with the best suitable information, Get in touch with Aruu Falls Safaris by 
filling in this form or call us on any of our Phone contacts or social media Handles:
</p>

</form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->
<!-- ============================ COMPONENT PAYMENT END.// ================================= -->

	</aside>

	</div>
			</div> <!-- row.// -->
		</div> <!-- card-body .// -->
</div> <!-- container .//  -->


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