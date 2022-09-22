<?php
include_once('../admin/model.php');
class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$user_name=$_REQUEST['user_name'];
				$pass=$_REQUEST['pass'];
				$pass=md5($pass);
	
			
				$where=array("user_name"=>$user_name,"pass"=>$pass);
				
				$run=$this->select_where('admin',$where);
				
				$res=$run->num_rows;
				if($res==1)
				{
					
					$_SESSION['email']=$email;
					
					echo "<script> 
						alert('Login Success') 
						window.location='dashboard';
						</script>";
					
				}
				else
				{
					echo "<script> 
						alert('Login Failed due wrong credebntial') 
						window.location='index';
						</script>";
				}			
			}
			include_once('index.php');
			break;
			
			
			case '/logout':
			unset($_SESSION['admin']);
			echo "<script>
			       alert('logout success')
				   window.location='index';
				   </script>";
				   
			case '/profile':
			$where=array("email"=>$_SESSION['email']);
			$run=$this->select_where('admin',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;
    
	
			case '/404':
			include_once('404.php');
			break;
			
			
			
			case '/add_emp':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$emailid=$_REQUEST['emailid'];
				$pass=$_REQUEST['pass'];
				$pass=md5($pass);
				$address=$_REQUEST['address'];
				$contact=$_REQUEST['contact'];
				$arr=array("name"=>$name,"username"=>$username,"emailid"=>$emailid,"pass"=>$pass,"address"=>$address,"contact"=>$contact);
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
			include_once('add_emp.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/manage_booking':
			$booking_arr=$this->selectall('booking');
			include_once('manage_booking.php');
			break;
			
			case '/manage_user':
			$customer_arr=$this->selectall('customer');
			include_once('manage_user.php');
			break;
			
			
			case '/add_client':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				$pass=md5($password);
				$emailid=$_REQUEST['emailid'];
				$contact=$_REQUEST['contact'];
				$address=$_REQUEST['address'];
				$ad=$_REQUEST['ad'];
				$puc=$_REQUEST['puc'];
				$dri=$_REQUEST['dri'];
				$insu=$_REQUEST['insu'];
				$arr=array("name"=>$name,"username"=>$username,"password"=>$pass,"emailid"=>$emailid,"contact"=>$contact,"address"=>$address,"ad"=>$ad,"puc"=>$puc,"dri"=>$dri,"insu"=>$insu);
				$res=$this->insert('client',$arr);
				if($res)
				{
				
					echo "<script> alert('Register Success') </script>";
				}
               else
			   {
                    echo "Not success";				   
			   }				   
			}	
			include_once('add_client.php');
			break;
			
			
			
			case '/manage_car':
			$car_arr=$this->selectall('car');
			include_once('manage_car.php');
			break;
			
			
			
			case '/manage_contact':
			$contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
			break;
			
			case '/manage_client':
			$client_arr=$this->selectall('client');
			include_once('manage_client.php');
			break;
			
			case '/manage_emp':
			$employee_arr=$this->selectall('employee');
			include_once('manage_emp.php');
			break;
	
			
			case '/manage_location':
			$location_arr=$this->selectall('location');
			include_once('manage_location.php');
			break; 
			 
			case '/manage_feedback':
			$feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			
			case '/manage_payment':
			$payment_arr=$this->selectall('payment');
			include_once('manage_payment.php');
			break;
			
			case '/manage_cartype':
			$cartype_arr=$this->selectall('category');
			include_once('manage_cartype.php');
			break;
			
			case'/Editclient':
			if(isset($_REQUEST['edit_client_id']))
			{
				$client_id=$_REQUEST['edit_client_id'];
				$where=array("client_id"=>$client_id);
				$run=$this->select_where('client',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					
					$name=$_REQUEST['name'];
					$username=$_REQUEST['username'];
					$Email=$_REQUEST['emailid'];
					$contact=$_REQUEST['contact'];
					$address=$_REQUEST['address'];
					$ad=$_REQUEST['ad'];
					$dri=$_REQUEST['dri'];
					$puc=$_REQUEST['puc'];
					$insu=$_REQUEST['insu'];
					
					
						$arr=array("name"=>$name,"username"=>$username,"emailid"=>$emailid,"contact"=>$contact,"address"=>$address,"ad"=>$ad,"dri"=>$dri,"puc"=>$puc,"insu"=>$insu);
						$res=$this->update('client',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_client';
							</script>";
						}
					}
					
				}	
			
			include_once('Editclient.php');
			break;
			
			case'/Editemp':
			if(isset($_REQUEST['edit_emp_id']))
			{
				$emp_id=$_REQUEST['edit_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$run=$this->select_where('employee',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$emp_id=$_REQUEST['emp_id'];
					$name=$_REQUEST['name'];
					$username=$_REQUEST['username'];
					$emailid=$_REQUEST['emailid'];
					$address=$_REQUEST['address'];
					$contact=$_REQUEST['contact'];
					
					
						$arr=array("emp_id"=>$emp_id,"name"=>$name,"username"=>$username,"emailid"=>$emailid,"address"=>$address,"contact"=>$contact);
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
			
			include_once('Editemp.php');
			break;
			
			
			
			case'/Edituser':
			if(isset($_REQUEST['edit_cus_id']))
			{
				$cus_id=$_REQUEST['edit_cus_id'];
				$where=array("cus_id"=>$cus_id);
				$run=$this->select_where('customer',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$cus_id=$_REQUEST['cus_id'];
					$name=$_REQUEST['name'];
					$username=$_REQUEST['username'];
					$email=$_REQUEST['email'];
					$contact=$_REQUEST['contact'];
					$ah=$_REQUEST['ah'];
					$dri=$_REQUEST['dri'];
					$address=$_REQUEST['address'];
					
					
					
						$arr=array("cus_id"=>$cus_id,"name"=>$name,"username"=>$username,"email"=>$email,"contact"=>$contact,"ah"=>$ah,"dri"=>$dri,"address"=>$address);
						$res=$this->update('customer',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_user';
							</script>";
						}
					}
					
				}	
			
			include_once('Edituser.php');
			break;
			
			
			case'/Editcontact':
			if(isset($_REQUEST['edit_con_id']))
			{
				$con_id=$_REQUEST['edit_con_id'];
				$where=array("con_id"=>$con_id);
				$run=$this->select_where('contact',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$con_id=$_REQUEST['con_id'];
					$email=$_REQUEST['email'];
					$name=$_REQUEST['name'];
					$contact=$_REQUEST['contact'];
	             	$arr=array("con_id"=>$con_id,"email"=>$email,"name"=>$name,"contact"=>$contact);
					$res=$this->update('contact',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_contact';
							</script>";
						}
					}
					
				}	
			
			include_once('Editcontact.php');
			break;
			
			case'/Editfeedback':
			if(isset($_REQUEST['edit_feed_id']))
			{
				$feed_id=$_REQUEST['edit_feed_id'];
				$where=array("feed_id"=>$feed_id);
				$run=$this->select_where('feedback',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$feed_id=$_REQUEST['feed_id'];
					$com=$_REQUEST['com'];
					$cus_id=$_REQUEST['cus_id'];
	             	$arr=array("feed_id"=>$feed_id,"com"=>$com,"cus_id"=>$cus_id);
					$res=$this->update('feedback',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_feedback';
							</script>";
						}
					}
				}	
			
			include_once('Editfeedback.php');
			break;
			
			case'/Editlocation':
			if(isset($_REQUEST['edit_loc_id']))
			{
				$loc_id=$_REQUEST['edit_loc_id'];
				$where=array("loc_id"=>$loc_id);
				$run=$this->select_where('location',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$loc_id=$_REQUEST['loc_id'];
					$loc_name=$_REQUEST['loc_name'];
	             	$arr=array("loc_id"=>$loc_id,"loc_name"=>$loc_name);
					$res=$this->update('location',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_location';
							</script>";
						}
					}
				}	
			
			include_once('Editlocation.php');
			break;
			
			case'/Editbooking':
			if(isset($_REQUEST['edit_book_id']))
			{
				$book_id=$_REQUEST['edit_book_id'];
				$where=array("book_id"=>$book_id);
				$run=$this->select_where('booking',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$book_id=$_REQUEST['book_id'];
					$cus_id=$_REQUEST['cus_id'];
					$car_id=$_REQUEST['car_id'];
					$book_date=$_REQUEST['book_date'];
					$book_time=$_REQUEST['book_time'];
	             	$arr=array("book_id"=>$book_id,"cus_id"=>$cus_id,"car_id"=>$car_id,"book_date"=>$book_date,"book_time"=>$book_time);
					$res=$this->update('booking',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_booking';
							</script>";
						}
					}
				}	
			
			include_once('Editbooking.php');
			break;
			
			
			case'/Editpayment':
			if(isset($_REQUEST['edit_pay_id']))
			{
				$pay_id=$_REQUEST['edit_pay_id'];
				$where=array("pay_id"=>$pay_id);
				$run=$this->select_where('payment',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$pay_id=$_REQUEST['pay_id'];
					$pay_type=$_REQUEST['pay_type'];
					$book_id=$_REQUEST['book_id'];
					$cus_id=$_REQUEST['cus_id'];
	             	$arr=array("pay_id"=>$pay_id,"pay_type"=>$pay_type,"book_id"=>$book_id,"cus_id"=>$cus_id);
					$res=$this->update('payment',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_payment';
							</script>";
						}
					}
				}	
			
			include_once('Editpayment.php');
			break;
			
			
		
			
		
			
		
			
			case '/delete':
			
			
			if(isset($_REQUEST['del_cus_id']))
			{
				$cus_id=$_REQUEST['del_cus_id'];
				$where=array("cus_id"=>$cus_id);
				$res=$this->delete_where('customer',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_user';
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