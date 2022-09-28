<?php
include_once('header.php');
?>
<script>
function validate()
{
	var car_id=document.forms["carform"]["car_id"].value;
	if(cat_id=="" || cat_id==null)
	{
		alert("Please fill out the car_id");
		return false;
	}  
	var client_id=document.forms["carform"]["client_id"].value;
	if(cat_name=="" || cat_name==null)
	{
		alert("Please fill out the client_id");
		return false;
	}
	
	var name=document.forms["carform"]["name"].value;
	if(name=="" || name==null)
	{
		alert("Please fill out the cat_des");
		return false;
	}
	var des=document.forms["carform"]["des"].value;
	if(des=="" || des==null)
	{
		alert("Please fill out the description");
		return false;
	}
	var capacity=document.forms["carform"]["capacity"].value;
	if(capacity=="" || capacity==null)
	{
		alert("Please fill out the capacity");
		return false;
	}
	var maileage=document.forms["carform"]["maileage"].value;
	if(maileage=="" || maileage==null)
	{
		alert("Please fill out the maileage");
		return false;
	}
	var price=document.forms["carform"]["price"].value;
	if(price=="" || price==null)
	{
		alert("Please fill out the price");
		return false;
	}
	var img=document.forms["carform"]["img"].value;
	if(img=="" || img==null)
	{
		alert("Please fill out the img");
		return false;
	}
	var type=document.forms["carform"]["type"].value;
	if(type=="" || type==null)
	{
		alert("Please fill out the type");
		return false;
	}
	var fule_type=document.forms["carform"]["fule_type"].value;
	if(fule_type=="" || fule_type==null)
	{
		alert("Please fill out the fule_type");
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
              <label class="control-label">Car_id</label>
              <input type="text" placeholder="car_id" name="car_id" value="<?php echo $fetch->car_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Client Id</label>
              <input type="text" class="form-control" placeholder="client_id" name="client_id" value="<?php echo $fetch->client_id?>"<br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" class="form-control" placeholder="name"   name="name" value="<?php echo $fetch->name;?>"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Description</label>
              <input type="text" class="form-control" placeholder="des"   name="des" value="<?php echo $fetch->des;?>"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Capacity</label>
              <input type="text" class="form-control" placeholder="capacity"   name="capacity" value="<?php echo $fetch->capacity;?>"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Mileage</label>
              <input type="text" class="form-control" placeholder="mileage"   name="mileage" value="<?php echo $fetch->mileage;?>"><br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Price</label>
              <input type="text" class="form-control" placeholder="price"   name="price" value="<?php echo $fetch->price;?>"><br>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Fule type</label>
              <input type="text" class="form-control" placeholder="fule_type" name="type" value="<?php echo $fetch->type;?>"><br>
			   </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Fule type</label>
              <input type="text" placeholder="fuel_type" name="fuel_type" value="<?php echo $fetch->fuel_type;?>"><br>
			   </div>
		     			
			<div class="col-md-12 form-group1">
              <label class="control-label">Image</label>
              <input type="file" placeholder="img" name="img" value="<?php echo $fetch->img;?>"><br>
			   <img src="../web/pic/car/<?php echo $fetch->img;?>" height="80" width="80">
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
