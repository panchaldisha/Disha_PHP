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
				$username=$_REQUEST['username'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
	
			
				$where=array("username"=>$username,"pass"=>$pass);
				
				$run=$this->select_where('employee',$where);
				$res=$run->num_rows;
				if($res==1)
				{
					
					$_SESSION['employee']=$username;
					
					echo "<script> 
						alert('Login Success') 
						window.location='dashboard';
						</script>";
					
				}
				
			}	
			include_once('index.php');
			break;
			
			case '/profile':
			$where=array("username"=>$_SESSION['employee']);
			$run=$this->select_where('employee',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/manage_booking':
			$manage_booking_arr=$this->selectall('booking');
			include_once('manage_booking.php');
			break;
			
			
			case '/manage_car':
			$manage_car_arr=$this->selectall('car');
			include_once('manage_car.php');
			break;
			
			
			case '/manage_cartype':
			$manage_cartype_arr=$this->selectall('category');
			include_once('manage_cartype.php');
			break;
			
			case '/manage_payment':
			$manage_payment_arr=$this->selectall('payment');
			include_once('manage_payment.php');
			break;
			
			
			case '/manage_contact':
			$manage_contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
			break;
			
			
			case '/manage_user':
			$manage_user_arr=$this->selectall('customer');
			include_once('manage_user.php');
			break;
			
			
			case '/add_cartype':
			if(isset($_REQUEST['submit']))
			{
				$cat_name=$_REQUEST['cat_name'];
				$cat_des=$_REQUEST['cat_des'];
				
				$cat_img=$_FILES['cat_img']['name'];
				$path='pic/'.$cat_img;
				$dup_file=$_FILES['cat_img']['tmp_name'];
				move_uploaded_file($dup_file,$path);
				
				$arr=array("cat_name"=>$cat_name,"cat_des"=>$cat_des,"cat_img"=>$cat_img);
				$res=$this->insert('category',$arr);
				if($res)
				{
				
					echo "<script> alert('Register Success') </script>";
				}
               else
			   {
                    echo "Not success";				   
			   }				   
			}	
			include_once('add_cartype.php');
			break;
			
			case '/logout':
			unset($_SESSION['employee']);
			echo "<script>
			       alert('logout success')
				   window.location='index';
				   </script>";
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
					$res=$this->update('payment',$arr,$where);
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
				$cus_id=$_REQUEST['del_con_id'];
				$where=array("con_id"=>$cus_id);
				$res=$this->delete_where('contact',$where);
				if($res) 
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_contact';
						</script>";
				}
			}
			if(isset($_REQUEST['del_cat_id']))
			{
				$cat_id=$_REQUEST['del_cat_id'];
				$where=array("cat_id"=>$cat_id);
				
				
				$run=$this->select_where('category',$where);
				$fetch=$run->fetch_object();
				$cat_img=$fetch->cat_img;
				
				$res=$this->delete_where('category',$where);
				if($res) 
				{
					unlink('pic/'.$cat_img);
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_cartype';
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

			

			
			
			
		    default:
			include_once('404.php');
			break;
			
			
	
	    }	
	}
}
$obj=new control;

?>