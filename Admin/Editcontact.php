<?php
include_once('header.php');
?>
<script>
function validate()
{ 
	var email=document.forms["contactform"]["email"].value;
	if(email==""|| email==null)
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
	if(contact==""|| contact==null)
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
				<span>Edit user</span>
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
              <label class="control-label">Con Id</label>
              <input type="text" name="con_id" value="<?php echo $fetch->con_id;?>" placeholder="con_id" >
            </div>
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="email" value="<?php echo $fetch->email;?>" placeholder="email" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="name" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Contact No</label>
              <input type="text" name="contact"  value="<?php echo $fetch->contact;?>" placeholder="contact" >
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
