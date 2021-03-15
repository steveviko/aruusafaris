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

.section-header .smaller_logo  {
    
    display: none;
}
@media (max-width: 768px)
 {
    .brand-wrap{
		display:none;
		
	}
#search-form{
	margin-left:-300px
}
	

.navbar-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    /* display: flex; */
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 1px;
    margin-bottom: 0;
    list-style: none;
    margin-left: -10px;
}
}



@media (min-width: 576px){
.navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.7rem;
    padding-left: 0rem;
}

}
@media screen and (max-width: 420px) {
  .b{
  
  display: block;
   padding: 0.5rem 1rem; 
  margin-top:0.2em;

}
  .brand-wrap {
    display: none;
  }
  .carousel-caption p {
    background: none;
    
}

  #searchform {
    width: 200px;
	z-index:2
  }
  .sec{
	  display:none;
  }
   .services {
    margin-bottom: 2px;
    width: 290px;
    margin-left: -35px;
  }
  .itemside > img{
	  width:80%
  }
.logo{
    position: fixed;
    top: 0;
    left: 0;
	width: 86%;
	display: block;
	z-index:12;
	/* margin-bottom:10px; */
}

/* .section-header{
	margin-top:230px;
	
} */
#locate {
	display:none;
}

}
@media (max-width: 768px){
.banner-quote {
    height: auto;
}}

/* .section-header{
	position: fixed;
    z-index: 99;
    width: 100%;
	margin-bottom:20px;
} */


.testimonial{
    text-align: center;
    margin: 0 15px;
}
.testimonial .description{
    padding: 15px;
    margin: 0;
    border-top: 4px solid #73438f;
    border-bottom: 1px solid #ccc;
    font-size: 18px;
    color: #454646;
    line-height: 30px;
    position: relative;
}
.testimonial .description:after{
    content: "";
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #73438f;
    margin: 0 auto;
    position: absolute;
    bottom: -5px;
    left: 0;
    right: 0;
}
.testimonial .pic{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    margin: 40px auto;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}
.testimonial .title{
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin: 0 0 10px 0;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    color: #333;
}
.owl-theme .owl-controls{
    margin-top: 30px;
}
.owl-theme .owl-controls .owl-page span{
    background: #ccc;
    opacity: 1;
    transition: all 0.4s ease 0s;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #73438f;
}

@media (max-width: 575px){

.phone{
  
    background: #000000;
    padding: 10px 7px;
    display: none;

}

.padding-y {
    /* padding-top: 250px; */
    /* padding-bottom: 20px; #CB5C21 #E8AA2D*/
}

.carousel-caption h3 {
    text-transform:capitalize;
    display: none;
}
.section-header .smaller_logo  {
    max-height: 172px;
    width: auto;
    display:block;
}
/* .section-header {
    position: fixed;
    z-index: 999;
    width: 100%;
    background:#fff;
} */
.navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1);
    width: inherit;
}
.b{
  
    display: block;
     padding: 0.5rem 1rem; 
    margin-top:0.2em;

}

.carousel-caption p {
    background: none;
    
}
}
body{
  font-size: 1.2rem;
}


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 
</head>
<body>

<b class="screen-overlay"></b>

<header class="section-header "  >
<div class="">
	<!-- <img src="../images/items/3.jpg" class="img-xs"> -->
	<img class="smaller_logo " src="./images/lion30.jpg" style="width:100%;border-radius:100px" >
	<!-- <div class="form-row "style="margin-top:-3px;" >
			    <a href="#" class="btn btn-success btn-sm btn-block mt-1"><strong class="text-teal">ARUU FALLS SAFARIS</strong></a>
			  </div> -->
</div>
	<nav class="navbar p-md-0 navbar-fixed navbar-expand-sm navbar-light border-bottom">
	<div class="container">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>contact 
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
	<section class="header-main">
	<div class="container">
    <div class="row align-items-center">
    	<div class="col-md-1 col-lg-3 col-12">
      	<a href="index.php" class="brand-wrap">
         <strong class='text-teal'>ARUU FALLS SAFARIS</strong>
       </a> <!-- brand-wrap.// -->
    	</div>
    	<div class="col-md-3 col-lg-4 col-12">
    		<form action="search.php" method="get"  enctype="multipart/form-data"  class="search">
    			<div class="input-group">
    			    <input type="text" class="form-control"  name="search_query" placeholder="Search">
    			    <div class="input-group-append">
    			      <button class="btn btn-success" name="submit_search"  type="submit">
    			        <i class="fa fa-search"></i>
    			      </button>
    			    </div>
    		    </div>
    		</form> <!-- search-wrap .end// -->
    	</div> <!-- col.// -->
    	<div class="col-md-7 col-lg-5 col-sm-12 col-12  text-md-right">
    		<div class="mt-3 mt-md-0 serve">
          <a href="./packages.php" class="b btn btn-success"> Tour Packages </a>
         
          <a href="./cars_list.php" class="b btn btn-success"> Car Hire </a>
          <a href="book.php" class=" b btn btn-success"> Safaris Booking</a>  
          <!-- <button class="btn float-right btn-light d-md-none" type="button" data-toggle="collapse" data-target="#main_nav8" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button> -->
        </div>
    	</div> <!-- col.// -->
    </div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->

	
	
	<nav class="navbar navbar-main navbar-expand-lg border-bottom" style="background:#489689;">
	  <div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav4" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>menu
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
