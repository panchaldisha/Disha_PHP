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
	if(username==""|| username==null)
	{
		alert("Please fill out the username");
		return false;
	}
	var email=document.forms["userform"]["email"].value;
	if(email==""|| email==null)
	{
		alert("Please fill out the emailid");
		return false;
	}
	var contact=document.forms["userform"]["contact"].value;
	if(contact==""|| contact==null)
	{
		alert("Please fill out the contact");
		return false;
	}
	var ah=document.forms["userform"]["ah"].value;
	if(ah==""|| ah==null)
	{
		alert("Please fill out the ah");
		return false;
	}
	var dri=document.forms["userform"]["dri"].value;
	if(dri==""|| dri==null)
	{
		alert("Please fill out the dri");
		return false;
	}
	var address=document.forms["empform"]["address"].value;
	if(address==""|| address==null)
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
				<span>Edit user</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="userform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">Cus Id</label>
              <input type="text" name="cus_id" value="<?php echo $fetch->cus_id;?>" placeholder="cus_id" >
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="name" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo $fetch->username;?>" placeholder="username" >
            </div>
			 
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="email" value="<?php echo $fetch->email;?>" placeholder="email" >
            </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Contact No</label>
              <input type="text" name="contact"  value="<?php echo $fetch->contact;?>" placeholder="contact" >
            </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Aadhar no</label>
              <input type="text" name="ah"  value="<?php echo $fetch->ah;?>" placeholder="ah" >
            </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Driving licence</label>
              <input type="text" name="dri"  value="<?php echo $fetch->dri;?>" placeholder="dri" >
            </div>
             
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <input type="text" name="address"  value="<?php echo $fetch->address;?>" placeholder="address" >
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
