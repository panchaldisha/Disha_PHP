<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage booking</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage booking</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>book_id</th>
						<th>cus_id</th>
						<th>car_id</th>
						<th>book_date</th>
						<th>book_time</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<?php
					foreach($manage_booking_arr as $c)
					{
					?>	
					<tbody>
					  <tr>
						<td><?php echo $c->book_id;?></td>
						<td><?php echo $c->cus_id;?></td>
						<td><?php echo $c->car_id;?></td>
						<td><?php echo $c->book_date;?></td>
						<td><?php echo $c->book_time;?></td>
						<td><a href="#" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_book_id=<?php echo $c->book_id ?>" class="btn btn-danger">Delete</a></td>
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
