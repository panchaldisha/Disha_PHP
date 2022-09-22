<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage location</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage location</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>location_id</th>
						<th>location_name</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($location_arr as $c)
					{
					?>	
					  <tr>
			            <td><?php echo $c->loc_id;?></td>
						<td><?php echo $c->loc_name;?></td>
					    <td><a href="Editlocation?edit_loc_id=<?php echo $c->loc_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_loc_id=<?php echo $c->loc_id ?>" class="btn btn-danger">Delete</a></td>
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
