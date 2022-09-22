<?php
include_once('header.php');
?>
<script>
function validate()
{
	var pay_id=document.forms["paymentform"]["pay_id"].value;
	if(pay_id=="" || pay_id==null)
	{
		alert("Please fill out the pay_id");
		return false;
	}
	
	var pay_type=document.forms["paymentform"]["pay_type"].value;
	if(pay_type=="" ||pay_type==null)
	{
		alert("Please fill out the pay_type");
		return false;
	}
	var book_id=document.forms["paymentform"]["book_id"].value;
	if(book_id=="" ||book_id==null)
	{
		alert("Please fill out the book_id");
		return false;
	}
	var cus_id=document.forms["paymentform"]["cus_id"].value;
	if(cus_id=="" ||cus_id==null)
	{
		alert("Please fill out the cus_id");
		return false;
	}
	
}

</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add client</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="clientform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Pay Id</label>
              <input type="text" name="pay_id" value="<?php echo $fetch->pay_id;?>" placeholder="pay_id" >
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Pay Type</label>
              <input type="text" name="pay_type" value="<?php echo $fetch->pay_type;?>" placeholder="pay_type" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Book Id</label>
              <input type="text"  name="book_id" value="<?php echo $fetch->book_id;?>" placeholder="book_id">
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Cus Id</label>
              <input type="text" name="cus_id" value="<?php echo $fetch->cus_id;?>" placeholder="cus_id">
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
