<?php
include_once('header.php');
?>
<script>
function validate()
{
	var name=document.forms["userform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out the name");
		return false;
	}
	var username=document.forms["userform"]["username"].value;
	if(username=="" || username==null)
	{
		alert("Please fill out the username");
		return false;
	}
	var email=document.forms["userform"]["email"].value;
	if(email=="" || email==null)
	{
		alert("Please fill out the email");
		return false;
	}
	var contact=document.forms["userform"]["contact"].value;
	if(contact=="" || contact==null)
	{
		alert("Please fill out the contact");
		return false;
	}
	var ah=document.forms["userform"]["ah"].value;
	if(ah=="" || ah==null)
	{
		alert("Please fill out the ah");
		return false;
	}
	
	var dri=document.forms["userform"]["dri"].value;
	if(dri=="" || dri==null)
	{
		alert("Please fill out the dri");
		return false;
	}
	
	var address=document.forms["userform"]["address"].value;
	if(address=="" || address==null)
	{
		alert("Please fill out the address");
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
              <label class="control-label">Cus Id</label>
              <input type="text" placeholder="cus_id" name="cus_id" value="<?php echo $fetch->cus_id;?>" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" placeholder="name" name="name" value="<?php echo $fetch->name;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <input type="text"  placeholder="username" name="username" value="<?php echo $fetch->username;?>"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Email</label>
              <input type="text"  placeholder="email"  name="email" value="<?php echo $fetch->email;?>"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Contact</label>
              <input type="text"  placeholder="contact"  name="contact" value="<?php echo $fetch->contact;?>"><br>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Aadhar card No</label>
              <input type="text"  placeholder="ah"  name="ah" value="<?php echo $fetch->ah;?>"><br>
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Driving licence</label>
              <input type="text"  placeholder="dri"  name="dri" value="<?php echo $fetch->dri;?>"><br>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Address</label>
              <input type="text"  placeholder="address"  name="address" value="<?php echo $fetch->address;?>"><br>
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
