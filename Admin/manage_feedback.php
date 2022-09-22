<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Feedback</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Feedback</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>Feed_id</th>
					    <th>com</th>
						<th>cus_id</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($feedback_arr as $c)
					{
					?>	
					  <tr>
					    <td><?php echo $c->feed_id;?></td>
						<td><?php echo $c->com;?></td>
						<td><?php echo $c->cus_id;?></td>
						<td><a href="Editfeedback?edit_feed_id=<?php echo $c->feed_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_feed_id=<?php echo $c->feed_id ?>" class="btn btn-danger">Delete</a></td>
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
