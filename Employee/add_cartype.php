<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cat_name=document.forms["carform"]["cat_name"].value;
	if(cat_name=="" || cat_name==null)
	{
		alert("Please fill out the cat_name");
		return false;
	}
	var alpha=/^[A-Za-z]+$/;  
	if(!alpha.test(cat_name))
	{
		alert("Please fill only alpha cat_name");  
		return false;   

	}
	
	var cat_des=document.forms["carform"]["cat_des"].value;
	if(cat_des=="" || cat_des==null)
	{
		alert("Please fill out the cat_des");
		return false;
	}
	
	var cat_img=document.forms["carform"]["cat_img"].value;
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
  	    
        <form name="carform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" placeholder="Name" name="cat_name" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Description</label>
              <textarea class="form-control" placeholder="description" name="cat_des"></textarea><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Img</label>
              <input type="file" class="form-control" placeholder="img"   name="cat_img"><br>
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
