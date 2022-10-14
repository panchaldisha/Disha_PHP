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
			
			case '/profile':
			$where=array("username"=>$_SESSION['username']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;
			
			case'/editprofile':
			if(isset($_REQUEST['edit_cus_id']))
			{
				$cus_id=$_REQUEST['edit_cus_id'];
				$where=array("cus_id"=>$cus_id);
				$run=$this->select_where('customer',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					
					$name=$_REQUEST['name'];
					$username=$_REQUEST['username'];
					$email=$_REQUEST['email'];
					$contact=$_REQUEST['contact'];
					$address=$_REQUEST['address'];
					
						$arr=array("name"=>$name,"username"=>$username,"email"=>$email,"contact"=>$contact,"address"=>$address);
						$res=$this->update('customer',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='profile';
							</script>";
						}
				}
					
			}	
			
			include_once('editprofile.php');
			break;
		
			case '/index':
			$fetcharr=$this->selectall('car');
			include_once('index.php');
			break;
			
			case '/category':
			include_once('category.php');
			break;
			
			case '/show':
			if(isset($_REQUEST['cat_name']))
			{
				$cat_name=$_REQUEST['cat_name'];
				$where=array('cat_name'=>$cat_name);
				$run=$this->select_where('category',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$cat_name=$_REQUEST['cat_name'];
					$des=$_REQUEST['des'];
					$arr=array("cat_name"=>$cat_name,"des"=>$des);
					$res=$this->selectall('car',$arr,$where);
					if($res)
					{
						echo "<script>welcome</script>";
					
					}
				}
			}
			include_once('cars.php');
			break;
    
	
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$contact=$_REQUEST['contact'];
				$message=$_REQUEST['message'];
				
				$arr=array("name"=>$name,"email"=>$email,"contact"=>$contact,"message"=>$message);
				$res=$this->insert('contact',$arr);
				
				if($res)
				{
					echo "<script>
					alert('Inquiry Success');
					</script>";
				}
				else
				{
					echo "<script>
					alert('Inquiry not success');
					</script>";
					
				}
			}	
			include_once('contact.php');
			break;
			
			case '/cars':
			$fetcharr=$this->selectall('car');
			include_once('cars.php');
			break;
			
			case '/booking':
			include_once('booking.php');
			break;
			
			case '/addform':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$description=$_REQUEST['des'];
				$capacity=$_REQUEST['capacity'];
				$mileage=$_REQUEST['mileage'];
				$price=$_REQUEST['price'];
				$type=$_REQUEST['type'];
				$fule_type=$_REQUEST['fule_type'];
				$img=$_REQUEST['img'];
				
				
				$arr=array("name"=>$name,"des"=>$des,"capacity"=>$capacity,"mileage"=>$mileage,"price"=>$price,"type"=>$type,"fule_type"=>$fule_type,"img"=>$img);
				$res=$this->insert('contact',$arr);
				
				{
							echo "<script> 
							alert('Update Success'); 
							window.location='dashboard';
							</script>";
				}
			}	
			include_once('addform.php');
			break;
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				$email=$_REQUEST['email'];
				$contact=$_REQUEST['contact'];
	            $ah=$_REQUEST['ah'];
				$dri=$_REQUEST['dri'];
			    $address=$_REQUEST['address'];
				
				
				$arr=array("name"=>$name,"username"=>$username,"pass"=>$pass,"email"=>$email,"contact"=>$contact,"ah"=>$ah,"dri"=>$dri,"address"=>$address);
				$res=$this->insert('customer',$arr);
				if($res)
				{
					echo "<script> 
					
					alert('Register Success') 
					window.location='index';
					</script>";				
				}
				else
				{
					echo "Not success";
				}
				
				
			}
			include_once('signup.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['submit']))
		    {	
				$username=$_REQUEST['username'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("username"=>$username,"pass"=>$pass);
				$run=$this->select_where('customer',$where);
				
				$res=$run->num_rows; 
				if($res==1) 
			    {
					    $data=$run->fetch_object();
					    $status=$data->status;
					    if($status=="Unblock")
						{
				
					
					          $_SESSION['username']=$username;
					          echo "<script> 
						      alert('Login Success') 
						      window.location='index';
						      </script>";
						}
						
						 else
				        {
					          echo "<script> 
						      alert('Login Failed due to blocked') 
						      window.location='login';
						      </script>";
				        }
				}
						
		     	  else
				        {
					          echo "<script> 
						          alert('Login Failed due wrong credentials') 
						           window.location='index';
						      </script>";
				        }
			}
			
			include_once('login.php');
			break;
			
			case '/logout':
			unset($_SESSION['username']);
			echo "<script>
			       alert('logout success')
				   window.location='index';
				   </script>";
			
			
			default:
			include_once('404.php');
			break;
		}
	    
		
    }
}
$obj=new control;

?>