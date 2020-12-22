<aside class="col-lg col-md-3 flex-lg-grow-0">
	<div class="itemside d-block">
	<!-- <img src="../images/items/3.jpg" class="img-xs"> -->
	<img class="logo " src="./images/lion30.jpg" style="width:100%;border-radius:100px" >
	<!-- <div class="form-row "style="margin-top:-3px;" >
			    <a href="#" class="btn btn-success btn-sm btn-block mt-1"><strong class="text-teal">ARUU FALLS SAFARIS</strong></a>
			  </div> -->
</div><!-- itemside // -->

		
<div class="col-md-12">
<div class="itemside d-block">
	
	<div class="form-row "style="margin-top:7px; width:100%" >
		<a href="#" class="btn btn-success btn-sm  btn-block mt-1"><strong class="text-teal">Office Address</strong></a>
	</div>
</div>
<nav class="nav-home-aside ">
 <!-- itemside // -->
<!-- <ul class="menu-category">
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
                <article class="box mb-1 " style="width:190px;margin-left:-20px">
                    <h6>Gulu, Uganda</h6>
                    <p>Building: Nestone <br> Floor: 22, Aprt: 12  </p>
                    <a href="#" class="btn btn-light disabled"> <i class="fa fa-car"></i> </a> <a href="#" class="btn btn-light"> <i class="fa fa-pen"></i> </a>   <a href="#" class="btn btn-light"> <i class="text-danger fa fa-trash"></i>  </a>
                </article>
            </div>  <!-- col.// -->
		
		
		
			  <!-- <nav class="nav-home-aside ">
			  <ul class="navbar-nav">
			<li><a href="#" class="nav-link"> <i class="fab fa-facebook" style="color:blue;"></i> Facebook </a></li>
			<li><a href="#" class="nav-link"> <i class="fab fa-twitter" style="color:blue;"></i> Twitter </a></li>
			</ul>
		</nav> -->
	</aside> <!-- col.// -->
                  <?php $sql = "SELECT * from  tblbrands ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
?>
<h6 class="title">
			<a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#collapse_2"> Car Brands For Hire </a>
		</h6>
		<div class="filter-content collapse show" id="collapse_2">
			<div class="inner">
           <?php  foreach($results as $result)
{       ?>  

				<label class="custom-control custom-checkbox">
				  <input type="checkbox" checked="" class="custom-control-input">
				  <div class="custom-control-label"><?php echo htmlentities($result->BrandName);?> 
				  	<b class="badge badge-pill badge-light float-right"></b>  </div>
                </label>
                
                <?php }} ?>
				
				
				
			
			</div> <!-- inner.// -->
		</div>
	</article> <!-- filter-group .// -->
	
