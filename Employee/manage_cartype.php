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
					    <th>cat_id</th>
						<th>cat_name</th>
						<th>cat_des</th>
						<th>cat_img</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<?php
					foreach($manage_cartype_arr as $c)
					{
					?>	
					<tbody>
					  <tr>
					    <td><?php echo $c->cat_id;?></td>
						<td><?php echo $c->cat_name;?></td>
						<td><?php echo $c->cat_des;?></td>
						<td><img src="pic/<?php echo $c->cat_img;?>" width="50px" higth="40px" </td>
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
