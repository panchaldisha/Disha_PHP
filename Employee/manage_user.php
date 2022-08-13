<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage User</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage User</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>cus_id</th>
						<th>name</th>
						<th>username</th>
						<th>pass</th>
						<th>email</th>
						<th>contact</th>
						<th>ah</th>
						<th>dri</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<?php
					foreach($manage_user_arr as $c)
					{
					?>	
					<tbody>
					  <tr>
						<td><?php echo $c->cus_id;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->username;?></td>
						<td><?php echo $c->pass;?></td>
						<td><?php echo $c->email;?></td>
						<td><?php echo $c->contact;?></td>
						<td><?php echo $c->ah;?></td>
						<td><?php echo $c->dri;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cus_id=<?php echo $c->cus_id ?>" class="btn btn-danger">Delete</a></td>
					  </tr>
					  <?php
					  }
					  ?>
					  
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
