<?php
include_once('header.php');
?>
<script>
function validate()
{
	var feed_id=document.forms["feedbackform"]["feed_id"].value;
	if(feed_id=="" || feed_id==null)
	{
		alert("Please fill out the feed_id");
		return false;
	}
	var com=document.forms["feedbackform"]["com"].value;
	if(com==""|| com==null)
	{
		alert("Please fill out the com");
		return false;
	}
	var cus_id=document.forms["feedbackform"]["cus_id"].value;
	if(cus_id==""|| cus_id==null)
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
				<span>Edit user</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="feedbackform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">Feed Id</label>
              <input type="text" name="feed_id" value="<?php echo $fetch->feed_id;?>" placeholder="feed_id" >
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Comment</label>
              <textarea name="com" placeholder="com" ><?php echo $fetch->com;?></textarea>
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Cus Id</label>
              <input type="text" class="form-control" name="cus_id" value="<?php echo $fetch->cus_id;?>" placeholder="cus_id" >
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
