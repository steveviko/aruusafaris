<?php if(isset($_POST['submit']))
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

<header class="section-heading heading-line">
	<h4 class="title-section text-uppercase">Request for Quotation</h4>
</header>

<div class="row">
	<div class="col-md-8">
<div class="card-banner banner-quote overlay-gradient" style="background-image: url('images/banners/banner9.jpg');height: 435px;
    object-fit: contain;">
  <div class="card-img-overlay white">
    <h3 class="card-title">An easy way to send request and Plan your Package</h3>
    <p class="card-text" style="max-width: 400px">Explore the world with us, best prices, best services, From land,to the shores, we can take you there.</p>
    <a href="" class="btn btn-primary rounded-pill">Learn more</a>
  </div>
</div>
	</div> <!-- col // -->
	<div class="col-md-4">

<div class="card card-body"style="background:#489689;" >
	<h4 class="title py-3">One Request, Multiple Quotes</h4>
	<form method="post" action="">
		
        <div class="form-group">
			<input class="form-control" name="name" placeholder="Enter your name" type="text">
        </div>
        <div class="form-group">
			<input class="form-control" name="contact" placeholder="Enter your contact Email/phone Number" type="text">
		</div>
		<div class="form-group">
			<div class="input-group">
				<input class="form-control" placeholder="Quantity" name="package" type="text">
				
				<select class="custom-select form-control">
					<option>Couple</option>
					<option>One</option>
					<option>Family</option>
					<option>Organization</option>
				</select>
			</div>
		</div>
		<!-- <div class="form-group text-muted">
			<p style="color:#fff;">Select Request type:</p>
			<label class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" value="option1">
			   <span class="form-check-label" style="color:#fff;">Request price</span>
			</label>
			<label class="form-check form-check-inline">
			  <input class="form-check-input" type="checkbox" value="option2">
			  <dspaniv class="form-check-label" style="color:#fff;">Request a Resorces</span>
			</label>
		</div> -->
		<div class="form-group">
			<button class="btn btn-warning">Request for quote</button>
		</div>
	</form>
</div>

	</div> <!-- col // -->
</div> <!-- row // -->