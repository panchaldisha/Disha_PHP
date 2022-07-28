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
              <input type="text" placeholder="Name" required="">
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <textarea class="form-control" placeholder="Username" required=""></textarea>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">car_id</label>
              <input type="password" class="form-control" placeholder="password" required="">
            </div>
			
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">car_name</label>
              <textarea class="form-control" placeholder="address" required=""></textarea>
            </div>
			
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">car_des</label>
              <input type="text" placeholder="Email id" required="">
            </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">car_img</label>
              <input type="text" placeholder="contact no" required="">
            </div>
			
			
            
             <div class="clearfix"> </div>
   
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
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
