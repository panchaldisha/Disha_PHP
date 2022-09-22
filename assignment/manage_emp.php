<html>
<head>
<title>Employee sign up</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
<div class="container" >
<table  align="center" class="table table-striped ">
<h1 align="center">Employee sign up</h1>
 <thead>
	<tr>
	<th>Emp Id</th>
    <th>First name</th>
	<th>Last name</th>
	<th>Email</th>
	<th>Mobile</th>
	<th>Edit</th>
    <th>Delete</th>	
    </tr>
  </thead>
					<tbody>
					<?php
					foreach($manage_emp_arr as $c)
					{
					?>	
					
					  <tr>
						<td><?php echo $c->emp_id;?></td>
						<td><?php echo $c->Firstname;?></td>
						<td><?php echo $c->Lastname;?></td>
						<td><?php echo $c->Email;?></td>
						<td><?php echo $c->Mobile;?></td>
						<td><a href="Editemployee?edit_emp_id=<?php echo $c->emp_id;?>" class="btn btn-danger">Edit</td>
						<td><a href="delete?del_emp_id=<?php echo $c->emp_id;?>" class="btn btn-danger" onclick="confirm_fun()">Delete</td>
						
					  </tr>
					<?php
					}
					?>
					</tbody>
</table>
</div>
</body>
</html>
	