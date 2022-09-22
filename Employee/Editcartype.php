<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cat_id=document.forms["cartypeform"]["cat_id"].value;
	if(cat_id=="" || cat_id==null)
	{
		alert("Please fill out the con_id");
		return false;
	}  
	var cat_name=document.forms["cartypeform"]["cat_name"].value;
	if(cat_name=="" || cat_name==null)
	{
		alert("Please fill out the cat_name");
		return false;
	}
	
	var cat_des=document.forms["cartypeform"]["cat_des"].value;
	if(cat_des=="" || cat_des==null)
	{
		alert("Please fill out the cat_des");
		return false;
	}
	var cat_img=document.forms["cartypeform"]["cat_img"].value;
	if(cat_img=="" || cat_img==null)
	{
		alert("Please fill out the cat_img");
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
  	    
        <form name="contactform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Cat_id</label>
              <input type="text" placeholder="cat_id" name="cat_id" value="<?php echo $fetch->cat_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Cat Name</label>
              <input type="text" class="form-control" placeholder="cat_name" name="cat_name" value="<?php echo $fetch->cat_name?>"<br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Cat Des</label>
              <input type="text" class="form-control" placeholder="cat_des"   name="cat_des" value="<?php echo $fetch->cat_des;?>"><br>
            </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">Cat img</label>
              <input type="text" class="form-control" placeholder="cat_img" name="cat_img" value="<?php echo $fetch->cat_img;?>"><br>
			   <img src="img/cartype/<?php echo $fetch->cat_img;?>" height="80" width="80">
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
