<?php

class control
{
	function __construct()
	{
		
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
			
			case '/add_client':
			include_once('add_client.php');
			break;
			
			case '/add_emp':
			include_once('add_emp.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/manage_booking':
			include_once('manage_booking.php');
			break;
			
			
			case '/manage_car':
			include_once('manage_car.php');
			break;
			
			
			case '/manage_feedback':
			include_once('manage_feedback.php');
			break;
			
			case '/manage_payment':
			include_once('manage_payment.php');
			break;
			
			case '/add_client':
			include_once('add_client.php');
			break;
			
			case '/add_client':
			include_once('add_client.php');
			break;
    
			case '/add_emp':
			include_once('add_emp.php');
			break;
        
		   
    
  
   
    
		}
		
	}
}
$obj=new control;

?>