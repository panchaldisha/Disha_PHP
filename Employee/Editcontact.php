<?php
include_once('header.php');
?>
<script>
function validate()
{
	var con_id=document.forms["contactform"]["con_id"].value;
	if(con_id=="" || con_id==null)
	{
		alert("Please fill out the con_id");
		return false;
	}  
	var email=document.forms["contactform"]["email"].value;
	if(email=="" || email==null)
	{
		alert("Please fill out the email");
		return false;
	}
	
	var name=document.forms["contactform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out the name");
		return false;
	}
	var contact=document.forms["contactform"]["contact"].value;
	if(contact=="" || contact==null)
	{
		alert("Please fill out the contact");
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
              <label class="control-label">Con_id</label>
              <input type="text" placeholder="con_id" name="con_id" value="<?php echo $fetch->con_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Email</label>
              <input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $fetch->email?>"<br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" class="form-control" placeholder="name"   name="name" value="<?php echo $fetch->name;?>"><br>
            </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">Contact</label>
              <input type="text" class="form-control" placeholder="contact" name="contact" value="<?php echo $fetch->contact;?>"><br>
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
