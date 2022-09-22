<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body>
<h3>Edit Employee</h3>
<form action="" method="post" enctype="multipart/form-data">
  <table>
       <tr>
	       <td>Emp Id:</td>
		   <td><input type="text" name="emp_id" value="<?php echo $fetch->emp_id;?>"></td>
		</tr>
		<tr>
	       <td>First name:</td>
		   <td><input type="text" name="Firstname" value="<?php echo $fetch->Firstname;?>" class="form-control"></td>
		</tr>
		<tr>
	       <td>Last name:</td>
		   <td><input type="text" name="Lastname" value="<?php echo $fetch->Lastname;?>" class="form-control"></td>
		</tr>
		<tr>
	       <td>Email:</td>
		   <td><input type="text" name="Email"  value="<?php echo $fetch->Email;?>"  class="form-control"></td>
		</tr>
		<tr>
	       <td>Mobile:</td>
		   <td><input type="text" name="Mobile"  value="<?php echo $fetch->Mobile;?>" class="form-control"></td>
		</tr>
		
		<tr>
              <td><input type="submit"  name="submit" value="submit"></td>
		 </tr>
		
		</body>
		</head>
		</html>
		
