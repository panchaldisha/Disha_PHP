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
	<div class="gallery">
		<div class="container">
			<div class="gallery-top gal_heading">
				<h2>Our Gallery</h2>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
					<li class="active">Cars</li>
				</ol>
			</div>
			<div class="gallery-bottom">
				<ul id="og-grid" class="og-grid">
				<?php
				foreach($fetcharr as $data)
				{
				?>
					<li>
						<a href="single.html" data-largesrc="pic/car/<?php echo $data->img;?>" data-title="<?php echo $data->name?>" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="pic/car/<?php echo $data->img;?>" alt="pic/car/"/>
						</a>
					</li>
				<?php
				}
				?>	
					<!--<li>
						<a href="single.html" data-largesrc="images/2.jpg" data-title="Vivamus mauris" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/2.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/93.jpeg" data-title="SUV" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/93.jpeg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/52.jpeg" data-title="Nam lacinia" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/52.jpeg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/97.jpeg" data-title="Integer laoreet" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/97.jpeg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/42.jpeg" data-title="MAHINDRA SCORPIO" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/42.jpeg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/04.jpeg" data-title="TOYOTA" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/04.jpeg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="single.html" data-largesrc="images/99.jpeg" data-title="Nullam ligula" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.Mauris dapibus eros eget metus consectetur, quis sollicitudin mi aliquam. Nunc ut tortor at risus faucibus sagittis. Vivamus ut elit mi. Proin vitae metus ante. Aenean rutrum quis tellus sed congue. Mauris id molestie magna. Suspendisse eleifend in mi sed vestibulum.">
							<img class="img-responsive" src="images/99.jpeg" alt="img01"/>
						</a>
					</li>-->
					<div class="clearfix"> </div>
				</ul>
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