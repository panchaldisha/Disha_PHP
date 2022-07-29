<?php

include_once('model.php');

class control extends model
{
	function __construct()
	{
		
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			
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
			include_once('manage_booking.php');
			break;
			
			case '/manage_user':
			include_once('manage_user.php');
			break;
			
			
			case '/add_client':
			include_once('add_client.php');
			break;
			
			
			
			case '/manage_car':
			include_once('manage_car.php');
			break;
			
			
			
			case '/manage_contact':
			include_once('manage_contact.php');
			break;
			
			case '/manage_client':
			include_once('manage_client.php');
			break;
			
			case '/manage_emp':
			$employee_arr=$this->selectall('employee');
			include_once('manage_emp.php');
			break;
	
			
			case '/manage_location':
			include_once('manage_location.php');
			break; 
			 
			case '/manage_feedback':
			include_once('manage_feedback.php');
			break;
			
			case '/manage_payment':
			include_once('manage_payment.php');
			break;
			
			case '/manage_cartype':
			include_once('manage_cartype.php');
			break;
		}
		
	}
}
$obj=new control;

?>