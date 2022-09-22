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
	if(cus_id=="" || cus_id==null)
	{
		alert("Please fill out the cus_id");
		return false;
	}
	
	var car_id=document.forms["bookingform"]["car_id"].value;
	if(car_id=="" || car_id==null)
	{
		alert("Please fill out the car_id");
		return false;
	}
	var book_date=document.forms["bookingform"]["book_date"].value;
	if(book_date=="" || book_date==null)
	{
		alert("Please fill out the book_date");
		return false;
	}
	var book_time=document.forms["bookingform"]["book_time"].value;
	if(book_time=="" || book_time==null)
	{
		alert("Please fill out the book_time");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add cartype</span>
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
              <label class="control-label">Book Id</label>
              <input type="text" placeholder="book_id" name="book_id" value="<?php echo $fetch->book_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Cus Id</label>
              <input type="text" class="form-control" placeholder="cus_id" name="cus_id" value="<?php echo $fetch->cus_id;?>"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Car Id</label>
              <input type="text" class="form-control" placeholder="car_id"   name="car_id" value="<?php echo $fetch->car_id;?>"><br>
            </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">Book Date</label>
              <input type="text" class="form-control" placeholder="book_date" name="book_date" value="<?php echo $fetch->book_date;?>"><br>
            </div>
						
			<div class="col-md-12 form-group1">
              <label class="control-label">Book Time</label>
              <input type="text" class="form-control" placeholder="book_time" name="book_time" value="<?php echo $fetch->book_date;?>"><br>
            </div>
             <div class="clearfix"> </div>
   
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
