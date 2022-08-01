<?php
include_once('../admin/model.php');

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
			
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/manage_booking':
			include_once('manage_booking.php');
			break;
			
			
			case '/manage_car':
			include_once('manage_car.php');
			break;
			
			
			case '/manage_cartype':
			$manage_cartype_arr=$this->selectall('category');
			include_once('manage_cartype.php');
			break;
			
			case '/manage_payment':
			include_once('manage_payment.php');
			break;
			
			
			case '/manage_contact':
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
			
    
			
    
    
  
   
    
		}
		
	}
}
$obj=new control;

?>