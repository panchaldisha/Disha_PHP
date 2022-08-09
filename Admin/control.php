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
		}
		
	}
}
$obj=new control;

?>