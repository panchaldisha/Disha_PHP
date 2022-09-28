<?php
include_once('header.php');
?>
<body>
	<!-- banner -->
	<div class="banner banner2">
		<div class="container">
			<div class="header">
				<div class="logo">
					<h1><a href="index"><img src="images/car.png" alt=""/>AUTO <span>CARS</span></a></h1>
				</div>
				<div class="top_details">
					<ul>
				    <?php
					if(isset($_SESSION['username'])) 
				    {
                    ?>
					<button class="btn btn-light"><a href="logout">logout</a></button>
					<button class="btn btn-light"><a href="signup">profile</a></button>
					<?php
					}
					else
					{
					?>
					
					<button class="btn btn-light"><a href="login">login</a></button>
					<button class="btn btn-light"><a href="signup">signup</a></button>
					<?php
					}
					?>
					</ul>
					<div class="search">
						<form>
							<input type="text" value="" placeholder="Search location">
							<input type="submit" value="">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php
			if(isset($_SESSION['username']))
			{
			?>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="category">Category</a></li>
						<li><a href="booking">Booking</a></li>
						<li><a href="addform">Add car</a></li>
						<li><a href="cars">Available cars</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			else
			{
			?>
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					  </button>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="categories">categories</a></li>
						<li><a href="contact">Contact Us</a></li>
					</ul>
				</div>
			</nav>
			<?php
			}
			?>
			
             			
		</div>
	</div>
	<!---->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top gal_heading">
				<h2>Add form</h2>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">Gallery</li>
				</ol>
			</div>
			<div class="gallery-bottom">
				
        <form name="carform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" class="form-control" placeholder="name"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Description</label>
              <input type="text" class="form-control" placeholder="des" name="des"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Capacity</label>
              <input type="text" class="form-control" placeholder="capacity"   name="capacity"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Mileage</label>
              <input type="text" class="form-control" placeholder="mileage"   name="mileage"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Price</label>
              <input type="text" class="form-control" placeholder="price"   name="price"><br>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Type</label>
              <input type="text" class="form-control" placeholder="type" name="type"><br>
			   </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Fule type</label>
              <input type="text" class="form-control" placeholder="fuel_type" name="fuel_type" ><br>
			   </div>
		     			
			<div class="col-md-12 form-group1">
              <label class="control-label">Image</label>
              <input type="file" placeholder="img" name="img"><br>
			  
            </div>
						
			
             <div class="clearfix"> </div>
   
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
			</div>
		</div>
	</div>

	<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/jquery.min.js"></script>
	<!----end-gallery---->
	<script src="js/grid.js"></script>
	<script>
		$(function () {
			Grid.init();
		});
	</script>
	<script src="js/bootstrap.js"></script>
	
<?php
include_once('footer.php');
?>