<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage car</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage car</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>car_id</th>
						<th>client_id</th>
						<th>name</th>
						<th>des</th>
						<th>capacity</th>
						<th>mileage</th>
						<th>price</th>
						<th>img</th>
						<th>type</th>
						<th>fuel_type</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<?php
					foreach($car_arr as $c)
					{
					?>	
					<tbody>
					  <tr>
					    <td><?php echo $c->car_id;?></td>
						<td><?php echo $c->client_id;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->des;?></td>
						<td><?php echo $c->capacity;?></td>
						<td><?php echo $c->mileage;?></td>
						<td><?php echo $c->price;?></td>
						<td><?php echo $c->img;?></td>
						<td><?php echo $c->type;?></td>
						<td><?php echo $c->fuel_type;?></td>
						
					    
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_car_id=<?php echo $c->car_id ?>" class="btn btn-danger">Delete</a></td>
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
