<?php include_once("./includes/header.php"); ?> 
<?php if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$nationality=$_POST['nationality'];
$travelPeriod=$_POST['travelPeriod'];
$personnel=$_POST['personnel'];
$indicator=$_POST['indicator'];
$interest=$_POST['interest'];
$message=$_POST['message'];
$sql="INSERT INTO  book(name,email,phone,nationality,travelPeriod,personnel,indicator,interest,message) 
VALUES(:name,:email,:phone,:nationality,:travelPeriod,:personnel,:indicator,:interest,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':nationality',$nationality,PDO::PARAM_STR);
$query->bindParam(':travelPeriod',$travelPeriod,PDO::PARAM_STR);
$query->bindParam(':personnel',$personnel,PDO::PARAM_STR);
$query->bindParam(':indicator',$indicator,PDO::PARAM_STR);
$query->bindParam(':interest',$interest,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
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




<div class="row">
	<aside class="col-md-2">

	
		<?php include_once"aside.php"; ?>
	</aside> <!-- col.// -->
	<main class="col-md-10">




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
			<strong class="d-inline-block mr-3">Make Booking/Reservation with Aruu Falls Safaris.</strong>
			
		</header>
		<div class="card-body">
			<div class="row"> 
				<div class="col-md-12 d-flex">
                <aside class="col-md-6">

<!-- ============================ COMPONENT FEEDBACK  ================================= -->
	<div class="card mb-4">
      <div class="card-body">
      <h4 class="card-title mb-4">Book your safaris With us</h4>
      <form action="" method="post">
      <div class="form-group">
			<label>Name</label>
		  	<input type="text" class="form-control" name="name" required="" placeholder="Enter your name">
		</div>
		<div class="form-group">
			<label>Email</label>
		  	<input type="text" class="form-control" name="email" required="" placeholder="Enter your email">
		</div> <!-- form-group end.// -->
		<div class="form-group">
			<label>Phone Number</label>
		  	<input type="text" name="phone" required=""class="form-control" placeholder="Enter your phone Number">
        </div>
        <div class="form-group">
			<label>Nationality</label>
		  	<input type="text" class="form-control" name="nationality" required=""  placeholder="Enter your Nationality">
		</div> <!-- form-group end.// -->
		<div class="form-group">
			<label>Travel Period </label>
		  	<input type="text" class="form-control" name="travelPeriod" required="" placeholder="Enter your Travel Period in Month/Year">
        </div>
        <div class="form-group">
			<label>Number of Personnel </label>
		  	<input type="text" class="form-control" name="personnel" required="" placeholder="Enter your Travel Period in Month/Year">
        </div>
        
		<div class="form-group">
			<label>Budget Indicators for each Personnel</label>
			<select name="indicator" required="" class="form-control">
				<option>$0-1000</option>
				<option>$1000-2000 </option>
				<option>$2000-3000</option>
                <option>$3000-4000</option>
                <option>+$4000</option>
			</select>
        </div>
        <div class="form-group">
			<label>Interests</label>
			<select name="interest" required="" class="form-control">
				<option>Select</option>
				<option>Cultural Tour </option>
				<option>Gorilla Tracking</option>
                <option> Wildlife Viewing</option>
                <option> Birding</option>
                <option> Honeymoon</option>
                <option> Mountaineering</option>
                <option> Primate Tour</option>
                <option> Golfing</option>
			</select>
		</div>
		<div class="form-group">
			<label>Any Other Addtional information you would like to let us Know?</label>
			<textarea class="form-control" rows="3" name="message" required=""></textarea>
		</div>
		
		<button type="type" name="submit" class="btn btn-primary btn-block">Send</button>
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
		<li><a href="#" class="nav-link"> <i class="fa fa-envelope" style="color:blue;"></i> aruusafaris@gmail.com </a></li>
			<li><a href="#" class="nav-link"> <i class="fab fa-facebook" style="color:blue;"></i> Facebook </a></li>
			<li><a href="#" class="nav-link"> <i class="fab fa-whatsapp" style="color:green;" ></i> (+256) 772 517 666 </a></li>
			<li><a href="#" class="nav-link"> <i class="fa fa-phone"></i> Call us (+256) 772 517 666</a></li>
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