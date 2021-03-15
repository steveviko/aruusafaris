<aside class="col-lg col-md-3 flex-lg-grow-0 phone" style="background:#56B61C;padding:10px 1px;">
<div class="itemside d-block">
	<!-- <img src="../images/items/3.jpg" class="img-xs"> -->
	<img class="logo " src="./images/lion30.jpg" style="width:100%;border-radius:100px" >
	<!-- <div class="form-row "style="margin-top:-3px;" >
			    <a href="#" class="btn btn-success btn-sm btn-block mt-1"><strong class="text-teal">ARUU FALLS SAFARIS</strong></a>
			  </div> -->
</div><!-- itemside // -->
<nav class="nav-home-aside  " >
<div class="form-row  mt-2 " >
			   
			  </div><!-- <ul class="menu-category">
				<li><a href="#">Fashion and clothes</a></li>
				<li><a href="#">Automobile and motors</a></li>
				<li><a href="#">Gardening and agriculture</a></li>
				<li><a href="#">Electronics and tech</a></li>
				<li><a href="#">Packaginf and printing</a></li>
				<li><a href="#">Home and kitchen</a></li>
				<li><a href="#">Digital goods</a></li>
				<li class="has-submenu"><a href="#">More items</a>
					<ul class="submenu">
						<li><a href="#">Submenu name</a></li>
						<li><a href="#">Great submenu</a></li>
						<li><a href="#">Another menu</a></li>
						<li><a href="#">Some others</a></li>
					</ul>
				</li>
			</ul> -->
		</nav>
		<aside class="col-sm-12" style="background:#000;padding-bottom:10px;">
			<div class="info-aside">
			<?php 
//Query for Listing count
$sql = "SELECT id from tbltourpackages";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
?>

				<div class="price-wrap">
					<span class="h5 price" style="color: #ff6a00;">Find Us</span> 
					<small class="text-muted">
					<article class="box mb-1">
					<?php $sql = "SELECT * from tbltourpackages order by rand() limit 9";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0)
					{ 
					foreach($results as $result)
					{	?>
                    <a href="details.php?pkgid=<?php echo htmlentities($result->name);?>" class="img-wrap">
				
				
					</a>
					<?php }}else{

echo "No Items found under packages";
} ?>
                <!-- //     <p class="text-warning">P.O.BOX,40492:Kampala <br>  
                //    <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
				//    </p>  -->
				</article>
					</small>
				</div> <!-- price-wrap.// -->				
				
				
				// <p class="mt-3">
				// 	<a href="#" class="btn btn-outline-primary btn-sm"> <i class="fa fa-envelope"></i> aruufalssafaris@gmail.com </a>
				// 	<!-- <a href="#" class="btn btn-outline-primary"> <i class="fab fa-facebook" style="color:blue;"></i> Facebook </a> -->
				// 	<a href="#" class="btn btn-outline-primary btn-sm mt-1"> <i class="fab fa-whatsapp" style="color:green;"></i> &nbsp;&nbsp;&nbsp; (+256) 772 517 666 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
					
				// 	<a href="#" class="btn btn-outline-secondary btn-sm mt-1"><i class="fa fa-phone" style="color:red;"></i> &nbsp;&nbsp;&nbsp; call: (+256) 772 517 666 &nbsp;&nbsp;&nbsp;</a>
				// </p>

				// <!-- <label class="custom-control mt-3 custom-checkbox">
				// 	  <input type="checkbox" class="custom-control-input">
				//   	  <div class="custom-control-label">Add to compare
				//   </div>
				// </label> -->

			</div> <!-- info-aside.// -->
	</aside> <!-- col.// -->
   
	
	</article> <!-- filter-group .// -->
	</aside> <!-- col.// -->
