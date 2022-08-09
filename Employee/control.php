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
			
			
			
    
			default:
			include_once('404.php');
			break;
			
			
	
	    }	
	}
}
$obj=new control;

?>