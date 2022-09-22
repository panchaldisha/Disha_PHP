<?php
include_once('model.php');
class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			
			  
			case '/Add_emp':
			if(isset($_REQUEST['submit']))
			{
				$Firstname=$_REQUEST['Firstname'];
				$Lastname=$_REQUEST['Lastnamename'];
				$Email=$_REQUEST['Email'];
				$Mobile=$_REQUEST['Mobile'];
				$Address=$_REQUEST['Address'];
				$Gender=$_REQUEST['Gender'];
				$Password=$_REQUEST['Password'];
				$Password=md5($Password);
				$Confirmpassword=$_REQUEST['Confirmpassword'];
				$arr=array("Firstname"=>$Firstname,"Lastname"=>$Lastname,"Email"=>$Email,"Mobile"=>$Mobile,"Address"=>$Address,"Gender"=>$Gender,"Password"=>$Password,"Confirmpassword"=>$Confirmpassword);
				$res=$this->insert('employee',$arr);
				if($res)
				{
				
					echo "<script> alert('Register Success') </script>";
				}
               else
			   {
                    echo "Not success";				   
			   }				   
			}	
			include_once('Add_emp.php');
			break;
			
			
			
			case '/manage_emp':
			$manage_emp_arr=$this->selectall('employee');
			include_once('manage_emp.php');
			break;
			
			
			case'/Editemployee':
			if(isset($_REQUEST['edit_emp_id']))
			{
				$emp_id=$_REQUEST['edit_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$run=$this->select_where('employee',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					
					$Firstname=$_REQUEST['Firstname'];
					$Lastname=$_REQUEST['Lastname'];
					$Email=$_REQUEST['Email'];
					$Mobile=$_REQUEST['Mobile'];
				
					
						$arr=array("Firstname"=>$Firstname,"Lastname"=>$Lastname,"Email"=>$Email,"Mobile"=>$Mobile);
						$res=$this->update('employee',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_emp';
							</script>";
						}
					}
					
				}	
			
			include_once('Editemployee.php');
			break;
					
     		case '/delete':
			if(isset($_REQUEST['del_emp_id']))
			{
				$cus_id=$_REQUEST['del_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employee',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_emp';
						</script>";
				}
			}

			
			if(isset($_REQUEST['del_con_id']))
			{
				$con_id=$_REQUEST['del_con_id'];
				$where=array("con_id"=>$con_id);
				$res=$this->delete_where('contact',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_contact';
						</script>";
				}
			}
			
			
			if(isset($_REQUEST['del_feed_id']))
			{
				$feed_id=$_REQUEST['del_feed_id'];
				$where=array("feed_id"=>$feed_id);
				$res=$this->delete_where('feedback',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_feedback';
						</script>";
				}
			}
			if(isset($_REQUEST['del_loc_id']))
			{
				$loc_id=$_REQUEST['del_loc_id'];
				$where=array("loc_id"=>$loc_id);
				$res=$this->delete_where('location',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_location';
						</script>";
				}
			}
			if(isset($_REQUEST['del_book_id']))
			{
				$book_id=$_REQUEST['del_book_id'];
				$where=array("book_id"=>$book_id);
				$res=$this->delete_where('booking',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_booking';
						</script>";
				}
			}
			
			if(isset($_REQUEST['del_pay_id']))
			{
				$pay_id=$_REQUEST['del_pay_id'];
				$where=array("pay_id"=>$pay_id);
				$res=$this->delete_where('payment',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_payment';
						</script>";
				}
			}
			if(isset($_REQUEST['del_cat_id']))
			{
				$cat_id=$_REQUEST['del_cat_id'];
				$where=array("cat_id"=>$cat_id);
				$res=$this->delete_where('category',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_cartype';
						</script>";
				}
			}
			if(isset($_REQUEST['del_emp_id']))
			{
				$emp_id=$_REQUEST['del_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employee',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_emp';
						</script>";
				}
			}
			if(isset($_REQUEST['del_client_id']))
			{
				$client_id=$_REQUEST['del_client_id'];
				$where=array("client_id"=>$client_id);
				$res=$this->delete_where('client',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_client';
						</script>";
				}
			}
			if(isset($_REQUEST['del_car_id']))
			{
				$car_id=$_REQUEST['del_car_id'];
				$where=array("car_id"=>$car_id);
				$res=$this->delete_where('car',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_car';
						</script>";
				}
			}
			
			case '/status':
			
			if(isset($_REQUEST['status_cus_id']))
			{
				$cus_id=$_REQUEST['status_cus_id'];
				$where=array("cus_id"=>$cus_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('customer',$arr,$where);
					if($res) 
					{
						echo "<script> 
							alert('Unblock Success') 
							window.location='manage_user';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update('customer',$arr,$where);
					if($res) 
					{
						unset($_SESSION['username']);
						echo "<script> 
							alert('Block Success') 
							window.location='manage_user';
							</script>";
					}
				}
			}
			
			
			if(isset($_REQUEST['status_emp_id']))
			{
				$emp_id=$_REQUEST['status_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$run=$this->select_where('employee',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('employee',$arr,$where);
					if($res) 
					{
						echo "<script> 
							alert('Unblock Success') 
							window.location='manage_employee';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update('employee',$arr,$where);
					if($res) 
					{
						unset($_SESSION['employee']);
						echo "<script> 
							alert('Block Success') 
							window.location='manage_employee';
							</script>";
					}
				}
			}
				
			     
			
		}
		
	}
}
$obj=new control;

?>