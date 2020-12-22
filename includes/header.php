<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="Best Tours and travels found in uganda and east Africa">
<meta name="keywords" content="Tours, Travels, Cars, Hire">

<title>Aruu Falls Safaris</title>

<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>
<style>
	.carousel-caption h3,
.carousel-caption p {
  color: #fff;
  display: inline-block;
  font-family: "Oswald", sans-serif;
  text-shadow: none;
  margin-bottom: 20px;
}
.carousel-caption h3 {
  background: rgba(0, 0, 0, 0.9);
  padding: 12px 24px;
  font-size: 20px;
  text-transform: uppercase;
}
.carousel-caption p {
  background: #489689;
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 300;

 
}
.slider-home-banner .carousel-item img {
    width: 100%;
    height: 415px;
    -o-object-fit: cover;
    object-fit: cover;
}
.search-header {
    border: 2px solid #489689;
    border-radius: 0.55rem;
}
</style>
</head>
<body>

<b class="screen-overlay"></b>
<header class="section-header">
	<nav class="navbar p-md-0 navbar-fixed navbar-expand-sm navbar-light border-bottom">
	<div class="container">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTop4">
		<ul class="navbar-nav mr-auto">
			<!-- <li class="nav-item dropdown">
				 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">   Language </a>
				<ul class="dropdown-menu small">
					<li><a class="dropdown-item" href="#">English</a></li>
					<li><a class="dropdown-item" href="#">Arabic</a></li>
					<li><a class="dropdown-item" href="#">Russian </a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> USD </a>
				<ul class="dropdown-menu small">
					<li><a class="dropdown-item" href="#">EUR</a></li>
					<li><a class="dropdown-item" href="#">AED</a></li>
					<li><a class="dropdown-item" href="#">RUBL </a></li>
				</ul>
			</li> -->
		</ul>
		<ul class="navbar-nav">
		<li><a href="#" class="nav-link"> <i class="fa fa-envelope" style="color:blue;"></i> aruusafaris@gmail.com </a></li>
			<li><a href="#" class="nav-link"> <i class="fab fa-facebook" style="color:blue;"></i> Facebook </a></li>
			<li><a href="#" class="nav-link"> <i class="fab fa-whatsapp" style="color:green;" ></i> (+256) 772 517 666 </a></li>
			<li><a href="#" class="nav-link"> <i class="fa fa-phone"></i> Call us (+256) 772 517 666</a></li>
		</ul> <!-- list-inline //  -->
	  </div> <!-- navbar-collapse .// -->
	</div> <!-- container //  -->
	</nav>
	
	<section class="header-main border-bottom">
		<div class="container">
	<div class="row row-sm align-items-center">
		<div class="col-lg-2 col-md-3 col-6">
			<a href="index.php" class="brand-wrap">
				<!-- <img class="logo" src="./images/lion30.jpg" > -->
				<strong class="text-teal">ARUU FALLS SAFARIS</strong>
			</a> <!-- brand-wrap.// -->
		</div>
		<!-- <div class="col-lg col-sm col-md col-6 flex-grow-0">
			<div class="category-wrap dropdown d-inline-block float-md-right">
				<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"> 
					<i class="fa fa-bars"></i> All category 
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Machinery / Mechanical Parts / Tools </a>
					<a class="dropdown-item" href="#">Consumer Electronics / Home Appliances </a>
					<a class="dropdown-item" href="#">Auto / Transportation</a>
					<a class="dropdown-item" href="#">Apparel / Textiles / Timepieces </a>
					<a class="dropdown-item" href="#">Home & Garden / Construction / Lights </a>
					<a class="dropdown-item" href="#">Beauty & Personal Care / Health </a> 
				</div>
			</div> 
		</div>   -->
		<div class="col-lg-5  col-md-7 col-sm-12 col">
			<form action="search.php" method="get"  enctype="multipart/form-data" class="search-header">
				<div class="input-group w-100">
					<input type="text" class="form-control" name="search_query" style="width:60%;" placeholder="Search">
					<!-- <select class="custom-select border-left"  name="category_name">
							<option value="">All type</option><option value="codex">Special</option>
							<option value="comments">Only best</option>
							<option value="content">Latest</option>
					</select> -->
					<div class="input-group-append">
					  <button class="btn btn-success" name="submit_search" type="submit">
						<i class="fa fa-search"></i>
					  </button>
					</div>
				</div>
			</form> <!-- search-wrap .end// -->
		</div> <!-- col.// -->
		<div class="col-md-5 col-lg-5 col-sm-12 col-12 text-md-right">
				<div class="mt-3 mt-md-0">
				<a href="#services" class="btn btn-success">Services</a>
			  <a href="./packages.php" class="btn btn-success">Packages </a>
			  <a href="./cars_list.php" class="btn btn-success"> Car Hire </a>
			  <a href="book.php" class="btn btn-success"> Safaris Bookings <span class="ml-2 badge badge-warning"></span>
			  </a>  
			  <button class="btn float-right btn-light d-md-none" type="button" data-toggle="collapse" data-target="#main_nav8" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			  </button>
			</div>			
			
		</div> <!-- col.// -->
	</div> <!-- row.// -->
		</div> <!-- container.// -->
	</section> <!-- header-main .// -->
	
	
	<nav class="navbar navbar-main navbar-expand-lg border-bottom" style="background:#489689;">
	  <div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav4" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main_nav4">
        <?php 
					

					$sql = "SELECT * from tblpages order by rand() ";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0)
					{
										

					?>	
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link pl-0" href="index.php"> <strong>Home</strong></a>
            </li>
            <?php foreach($results as $result)
					{?>
						
			<li class="nav-item">
			  <a class="nav-link" href="page.php?type=<?php echo htmlentities($result->type); ?>"><?php echo htmlentities($result->PageName);?></a>
            </li>
            <?php }}else{
				echo "No pages found";
			}?>	
		
			<li class="nav-item dropdown">
			  <a class="nav-link " href="contact.php" aria-haspopup="true" aria-expanded="false">Contact US</a>
			 
		  </ul>
		</div> <!-- collapse .// -->
	  </div> <!-- container .// -->
	</nav> <!-- navbar main end.// -->
	
	</header> <!-- section-header.// -->
