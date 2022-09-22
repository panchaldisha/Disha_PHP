<?php
include_once('header.php');
?>
<script>
function validate()
{
	var book_id=document.forms["bookingform"]["book_id"].value;
	if(book_id=="" || book_id==null)
	{
		alert("Please fill out the book_id");
		return false;
	}
	var cus_id=document.forms["bookingform"]["cus_id"].value;
	if(cus_id==""|| cus_id==null)
	{
		alert("Please fill out the cus_id");
		return false;
	}
	var car_id=document.forms["bookingform"]["car_id"].value;
	if(car_id==""|| car_id==null)
	{
		alert("Please fill out the car_id");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit user</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="bookingform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">Booking Id</label>
              <input type="text" name="book_id" value="<?php echo $fetch->book_id;?>" placeholder="book_id" >
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Customer Id</label>
              <input type="text" name="cus_id" value="<?php echo $fetch->cus_id;?>" placeholder="cus_id" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Car Id</label>
              <input type="text" name="car_id" value="<?php echo $fetch->car_id;?>" placeholder="car_id" >
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Book Date</label>
              <input type="text" name="book_date" value="<?php echo $fetch->book_date;?>" placeholder="book_date" >
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Book Time</label>
              <input type="text" name="book_time" value="<?php echo $fetch->book_time;?>" placeholder="book_time" >
            </div>
			
			
           
             
         
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>
