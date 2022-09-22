<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Contact</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Contact</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>con_id</th>
						<th>email</th>
						<th>name</th>
						<th>contact</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<?php
					foreach($manage_contact_arr as $c)
					{
					?>	
					<tbody>
					  <tr>
					    <td><?php echo $c->con_id;?></td>
						<td><?php echo $c->email;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->contact;?></td>
						<td><a href="Editcontact?edit_con_id=<?php echo $c->con_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_con_id=<?php echo $c->con_id ?>" class="btn btn-danger">Delete</a></td>
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
