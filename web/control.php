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
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
    
	
			case '/contact':
			include_once('contact.php');
			break;
			
			case '/gallery':
			include_once('gallery.php');
			break;
			
			case '/services':
			include_once('services.php');
			break;
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				$email=$_REQUEST['email'];
				$address=$_REQUEST['address'];
				$contact=$_REQUEST['contact'];
	
			
				$arr=array("name"=>$name,"username"=>$username,"pass"=>$pass,"email"=>$email,"address"=>$address,"contact"=>$contact);
				
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
					
					$_SESSION['username']=$username;
					
					echo "<script> 
						alert('Login Success') 
						window.location='index';
						</script>";
					
				}
				else
				{
					echo "<script> 
						alert('Login Failed due wrong credential') 
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