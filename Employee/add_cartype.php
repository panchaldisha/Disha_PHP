<?php
include_once('header.php');
?>
 
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
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">cat_id</label>
              <input type="text" placeholder="cat_id" name="cat_id" required="">
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">cat_name</label>
              <textarea class="form-control" placeholder="cat_name" name="cat_name" required=""></textarea>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">cat_des</label>
              <input type="password" class="form-control" placeholder="cat_des"  name="cat_des"required="">
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">cat_img</label>
              <input type="password" class="form-control" placeholder="cat_img"  name="cat_img"required="">
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
