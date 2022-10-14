<?php
include_once('header.php')
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
						<li><a href="category">Categories</a></li>
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
						<li><a href="category">categories</a></li>
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
	<div class="services">
		<div class="container">
			<h2>Services</h2>
			<ol class="breadcrumb">
				<li><a href="index">Home</a></li>
				<li class="active">Booking</li>
			</ol>
			<form name="clientform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Booking ID</label>
              <input type="text" class="form-control" name="book_id" placeholder="Booking ID">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1"><br>
              <label class="control-label">Cus ID</label>
              <input type="text" class="form-control" name="cus_id" placeholder="Customer ID">
            </div>
            <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Car ID</label>
              <input type="text" class="form-control" name="car_id" placeholder="Car id">
            </div>
             <div class="clearfix"> </div>
			 
			<div class="col-md-12 form-group1 group-mail"><br>
              <label class="control-label">Booking date</label>
              <input type="text" class="form-control" name="book_date" placeholder="Booking date"><br>
            </div>
             <div class="clearfix"> </div>
			 
            
            <div class="col-md-12 form-group1"><br>
              <label class="control-label">Booking time</label>
              <input type="text" class="form-control" name="book_time" placeholder="Booking Time">
            </div>
            <div class="clearfix"> </div>
            
			
			
            <div class="clearfix"> </div>
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group"><br>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
			
				<div class="clearfix"></div>
			
		</div>
	</div>
	<!---->
	<?php
	include_once('footer.php');
	?>