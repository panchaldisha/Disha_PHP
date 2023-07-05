						<div class="top-inputs">
                        Customer Name: <input type="text" name="cust_name" placeholder="Customer Name"  class="form-control" value="<?php echo $fetch->cust_name;?>" required="">
                        </div>
						
						<div class="col-md-12 form-group1">
              <label class="control-label">Invoice Id</label>
              <input type="text"  name="invoice_id" placeholder="invoice_id" >
            </div>
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Booking Id</label>
              <input type="text"  name="booking_id" placeholder="booking_id" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Branch Id</label>
              <input type="text"  name="branch_id" placeholder="branch_id" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Parcel Id</label>
              <input type="text"  name="parcel_id" placeholder="parcel_id" >
            </div>
			
var invoice_id=document.forms["invoiceform"]["invoice_id"].value;
	if(invoice_id=="" ||invoice_id==null)
	{
		alert("Please fill out the Invoice Id");
		return false;
	}
	var booking_id=document.forms["invoiceform"]["booking_id"].value;
	if(booking_id=="" ||booking_id==null)
	{
		alert("Please fill out the booking_id");
		return false;
	}
    var branch_id=document.forms["invoiceform"]["branch_id"].value;
	if(branch_id=="" ||branch_id==null)
	{
		alert("Please fill out the branch_id");
		return false;
	}
    var parcel_id=document.forms["invoiceform"]["parcel_id"].value;
	if(parcel_id=="" ||parcel_id==null)
	{
		alert("Please fill out the parcel_id");
		return false;
	}			
	Parcel Quantity
	
	quantity