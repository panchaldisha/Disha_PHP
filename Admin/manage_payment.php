<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage car</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Payment</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>pay_id</th>
						<th>pay_type</th>
						<th>book_id</th>
						<th>cus_id</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($payment_arr as $c)
					{
					?>	
					  <tr>
					    <td><?php echo $c->pay_id;?></td>
						<td><?php echo $c->pay_type;?></td>
						<td><?php echo $c->book_id;?></td>
						<td><?php echo $c->cus_id;?></td>
						
						<td><a href="Editpayment?edit_pay_id=<?php echo $c->pay_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_pay_id=<?php echo $c->pay_id ?>" class="btn btn-danger">Delete</a></td>
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
