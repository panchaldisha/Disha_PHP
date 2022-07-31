<?php
include_once('header.php');
?>
 
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
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name" placeholder="Name" required="">
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <textarea class="form-control" name="username" placeholder="Username" required=""></textarea>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">password</label>
              <input type="password" class="form-control" name="password" placeholder="password" required="">
            </div>
			
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Email_id</label>
              <textarea class="form-control" name="emailid" placeholder="emailid" required=""></textarea>
            </div>
			
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Contact</label>
              <input type="text" name="contact" placeholder="contact" required="">
            </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <input type="text" name="address" placeholder="contact no" required="">
            </div>
			
						
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Adhar card no</label>
              <input type="text" name="ad" placeholder="Adhar card no" required="">
            </div>
						
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Driving licence</label>
              <input type="text"  name="dri" placeholder="Driving licence" required="">
            </div>
			
						
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">PUC NO</label>
              <input type="text" name="puc" placeholder="PUC NO" required="">
            </div>
			
						
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Insurance NO</label>
              <input type="text" name="insu" placeholder="Insurance NO" required="">
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
