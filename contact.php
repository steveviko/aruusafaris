<?php include_once("./includes/header.php"); ?> 
<?php
error_reporting(0);

if(isset($_POST['submit']))
{
$name=$_POST['names'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$type=$_POST['types'];
$message=$_POST['messages'];
$sql="INSERT INTO  tblissues(names,UserEmail,phone,types,messages) VALUES(:names,:email,:phone,:types,:messages)";
$query = $dbh->prepare($sql);
$query->bindParam(':names',$name,PDO::PARAM_STR);
$query->bindParam(':messages',$message,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':types',$type,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();


if($lastInsertId)
{
$msg="message successfully submited ";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again.";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}

}
?>
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
			<strong class="d-inline-block mr-3">Contact us through any option below, Our Team will get back to you .</strong>
			
		</header>
		<div class="card-body">
			<div class="row"> 
				<div class="col-md-12 d-flex">
                <aside class="col-md-6">

<!-- ============================ COMPONENT FEEDBACK  ================================= -->
	<div class="card mb-4">
      <div class="card-body">
      <h4 class="card-title mb-4">Contact us</h4>
      <form method="POST" action="" >
	  <div class="form-group">
			<label>Name</label>
		  	<input type="text" name="names" class="form-control" require="" placeholder="Enter your name">
		</div> <!-- form-group end.// -->
		<div class="form-group">
			<label>Email</label>
		  	<input type="text" name="email" class="form-control" required="" placeholder="Enter your email">
		</div> <!-- form-group end.// -->
		<div class="form-group">
			<label>Phone Number</label>
		  	<input type="text" name="phone" class="form-control" required="" placeholder="Enter your Phone Number">
		</div>
		<div class="form-group">
			<label>What is message about?</label>
			<select name="types" class="form-control">
				<option>Select</option>
				<option>Technical issue</option>
				<option>Money refund</option>
				<option>Recommendation</option>
			</select>
		</div>
		<div class="form-group">
			<label>What is message about?</label>
			<textarea name="messages" class="form-control" rows="3" required=""></textarea>
		</div>
		
		<button type="submit" name="submit" class="btn btn-primary btn-block">Send</button>
      </form>
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
                    <h6>Kampala, Uganda</h6>
                    <p>P.O.BOX  <br> Floor: 2, Aprt: 32  </p>
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
			<li><a href="#" class="nav-link"> <i class="fab fa-whatsapp" style="color:green;" ></i> (+256) 702 369 454 </a></li>
			<li><a href="#" class="nav-link"> <i class="fa fa-phone"></i> Call us (+256) 703 941 720</a></li>
		</ul> <!-- list-inline //  -->
	</nav>
	</div>
</div> <!-- input-group.// -->
</div> <!-- form-group.// -->


 
<p class="alert alert-success"> <i class="fa fa-lock"></i> 
Stay in touch with Aruu Falls Safaris and receive feedback from our team, packed with useful information for your next safari to East Africa
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