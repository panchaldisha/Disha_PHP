<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Edit profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Badge Signup Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/signupstyle.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="w3layouts-main"> 
		<h1>Edit profile</h1>
		<div class="agilesign-form">  
			<div class="agileits-top">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="styled-input w3ls-text">
						<input type="text" name="cus_id" value="<?php echo $fetch->cus_id;?>" required=""/>
						<label>Id</label>
						<span></span>
					</div>
					<div class="styled-input w3ls-text">
						<input type="text" name="name" value="<?php echo $fetch->name;?>" required=""/>
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input w3ls-text">
						<input type="text" name="username" value="<?php echo $fetch->username;?>" required=""/>
						<label>User Name</label>
						<span></span>
					</div>
					<div class="styled-input w3ls-text">
						<input type="text" name="email" value="<?php echo $fetch->email;?>" required=""/>
						<label>Email ID</label>
						<span></span>
					</div>
					<div class="styled-input w3ls-text">
						<input type="text" name="contact" value="<?php echo $fetch->contact;?>" required=""/>
						<label>Contact no</label>
						<span></span>
					</div>
					<div class="styled-input w3ls-text">
						<input type="text" name="address" value="<?php echo $fetch->address;?>" required=""/>
						<label>Address</label>
						<span></span>
					</div>
					<div class="wthree-text">  
						<p>
							<input type="checkbox" id="brand" value="">
							<label for="brand"><span></span>I accept the terms of use</label>  
						</p>  
					</div>
					<div class="agileits-bottom"> 
						<input type="submit" name="submit" value="Save"> 
					</div>	
				</form>
			</div> 
		</div>	
	</div>	
	<!-- //main -->
</body>
</html>