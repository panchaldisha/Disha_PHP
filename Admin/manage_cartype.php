<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage cartype</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage cartype</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>car_id</th>
						<th>car_name</th>
						<th>car_des</th>
						<th>car_img</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($cartype_arr as $c)
					{
					?>	
					  <tr>
					    <td><?php echo $c->cat_id;?></td>
						<td><?php echo $c->cat_name;?></td>
						<td><?php echo $c->cat_des;?></td>
						<td><?php echo $c->cat_img;?></td>
						
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
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
