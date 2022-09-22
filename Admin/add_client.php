<?php
include_once('header.php');
?>
<script>
function validate()
{
	var name=document.forms["clientform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out the name");
		return false;
	}
	var alpha=/^[A-Za-z]+$/;  
	if(!alpha.test(name))
	{
		alert("Please fill only alpha name");  
		return false;   

	}
	var username=document.forms["clientform"]["username"].value;
	if(username=="" ||username==null)
	{
		alert("Please fill out the username");
		return false;
	}
	var password=document.forms["clientform"]["password"].value;
	if(password=="" ||password==null)
	{
		alert("Please fill out the password");
		return false;
	}
	var emailid=document.forms["clientform"]["emailid"].value;
	if(emailid=="" ||emailid==null)
	{
		alert("Please fill out the Emailid");
		return false;
	}
	var mail=/^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
	if(!mail.test(emailid))
	{
		alert('Please fill proper emailid');  
		return false;   

	}
	
	var contact=document.forms["clientform"]["contact"].value;
	if(contact=="" ||contact==null)
	{
		alert("Please fill out the contact");
		return false;
	}
	var phone=/^[0-9]{10,11}$/;
	if(!phone.test(contact))
	{
		alert("please fill only digits in contact");
		return false;
	}
	
		
	var address=document.forms["clientform"]["address"].value;
	if(address=="" ||address==null)
	{
		alert("Please fill out the address");
		return false;
	}
	var ad=document.forms["clientform"]["ad"].value;
	if(ad=="" ||ad==null)
	{
		alert("Please fill out the Adhar card no ");
		return false;
	}
	var dri=document.forms["clientform"]["dri"].value;
	if(dri=="" ||dri==null)
	{
		alert("Please fill out the Driving licence ");
		return false;
	}
	var puc=document.forms["clientform"]["puc"].value;
	if(puc=="" ||puc==null)
	{
		alert("Please fill out the PUC ");
		return false;
	}
	var insu=document.forms["clientform"]["insu"].value;
	if(insu=="" ||insu==null)
	{
		alert("Please fill out the Insurance NO ");
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
              <label class="control-label">Name</label>
              <input type="text" name="name" placeholder="Name" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <textarea class="form-control" name="username" placeholder="Username" ></textarea>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">password</label>
              <input type="password" class="form-control" name="password" placeholder="password" >
            </div>
			
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Email_id</label>
              <textarea class="form-control" name="emailid" placeholder="emailid" ></textarea>
            </div>
			
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Contact</label>
              <input type="text" name="contact" placeholder="contact" >
            </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <input type="text" name="address" placeholder="contact no" >
            </div>
			
						
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Adhar card no</label>
              <input type="text" name="ad" placeholder="Adhar card no" >
            </div>
						
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Driving licence</label>
              <input type="text"  name="dri" placeholder="Driving licence" >
            </div>
			
						
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">PUC NO</label>
              <input type="text" name="puc" placeholder="PUC NO" >
            </div>
			
						
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Insurance NO</label>
              <input type="text" name="insu" placeholder="Insurance NO" >
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
