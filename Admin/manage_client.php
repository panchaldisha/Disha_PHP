<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage client</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
			<div style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage client</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>client_id</th>
						<th>name</th>
						<th>username</th>
						<th>emailid</th>
						<th>contact</th>
						<th>address</th>
						<th>ad</th>
						<th>dri</th>
						<th>PUC</th>
						<th>insu</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($client_arr as $c)
					{
					?>	
					  <tr>
					    <td><?php echo $c->client_id;?></td>
						<td><?php echo $c->name;?></td>
						<td><?php echo $c->username;?></td>
						<td><?php echo $c->emailid;?></td>
						<td><?php echo $c->contact;?></td>
						<td><?php echo $c->address;?></td>
						<td><?php echo $c->ad;?></td>
						<td><?php echo $c->dri;?></td>
						<td><?php echo $c->puc;?></td>
						<td><?php echo $c->insu;?></td>
						<td><a href="Editclient?edit_client_id=<?php echo $c->client_id ?>"class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_client_id=<?php echo $c->client_id ?>" class="btn btn-danger">Delete</a></td>
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
