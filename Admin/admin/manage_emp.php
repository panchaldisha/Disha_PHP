<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Employee</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
			<div style="overflow:auto">
				
				<div class="table-responsive container mt-3">
				  <h2>Manage Employee</h2>
                  
				  <table class="table">
					<thead>
					  <tr>
					    <th>Emp_id</th>
						<th>name</th>
						<th>user name</th>
						<th>emailid</th>
						<th>add</th>
						<th>contact</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($employee_arr as $c)
					{
					?>	
					  <tr>
					    <td><?php echo $c->emp_id;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->username;?></td>
						<td><?php echo $c->emailid;?></td>
						<td><?php echo $c->address;?></td>
						<td><?php echo $c->contact;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
					  </tr>
					<?php
					}
					?>
					  
					</tbody>
				  </table>
				</div>
			</div>
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
