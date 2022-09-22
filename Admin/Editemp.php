<?php
include_once('header.php');
?>
<script>
function validate()
{
	var name=document.forms["empform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out the name");
		return false;
	}
	var username=document.forms["empform"]["username"].value;
	if(username==""|| username==null)
	{
		alert("Please fill out the username");
		return false;
	}
	var emailid=document.forms["empform"]["emailid"].value;
	if(emailid==""|| emailid==null)
	{
		alert("Please fill out the emailid");
		return false;
	}
	var pass=document.forms["empform"]["pass"].value;
	if(pass==""|| pass==null)
	{
		alert("Please fill out the pass");
		return false;
	}
	var address=document.forms["empform"]["address"].value;
	if(address==""|| address==null)
	{
		alert("Please fill out the address");
		return false;
	}
	var contact=document.forms["empform"]["contact"].value;
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
				<span>Add Employee</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="empform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">Emp Id</label>
              <input type="text" name="emp_id" value="<?php echo $fetch->emp_id;?>" placeholder="emp_id" >
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" value="<?php echo $fetch->name;?>" placeholder="name" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo $fetch->username;?>" placeholder="Username" >
            </div>
			 
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="emailid" value="<?php echo $fetch->emailid;?>" placeholder="emailid" >
            </div>
			
		
			<div class="col-md-12 form-group1">
              <label class="control-label">Address</label>
              <textarea class="form-control" name="address"  placeholder="address" ><?php echo $fetch->address;?></textarea>
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
