<?php
include_once('header.php');
?>
<script>
function validate()
{
	var loc_id=document.forms["locationform"]["loc_id"].value;
	if(loc_id=="" || loc_id==null)
	{
		alert("Please fill out the name");
		return false;
	}
	var loc_name=document.forms["locationform"]["loc_name"].value;
	if(loc_name==""|| loc_name==null)
	{
		alert("Please fill out the loc_name");
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
  	    
        <form name="locationform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">Location Id</label>
              <input type="text" name="loc_id" value="<?php echo $fetch->loc_id;?>" placeholder="loc_id" >
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Location Name</label>
              <input type="text" name="loc_name" value="<?php echo $fetch->loc_name;?>" placeholder="loc_name" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="clearfix"></div>         
          
          
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
