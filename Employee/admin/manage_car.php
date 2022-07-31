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
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage car</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>car_id</th>
						<th>client_id</th>
						<th>name</th>
						<th>des</th>
						<th>price</th>
						<th>img</th>
						<th>type</th>
						<th>fuel_type</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
					    <td>1</td>
						<td>2</td>
						<td>John</td>
						<td>nice car</td>
						<td>700</td>
						<td>https://www.autocarindia.com/cars/suv-cars-in-indi...</td>
						<td>SUV</td>
						<td>CNG</td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="#" class="btn btn-danger">Delete</a></td>
					  </tr>
					  
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
