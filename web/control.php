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
			include_once('profile.php');
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
				$username=$_REQUEST['username'];
				$pass=$_REQUEST['pass'];
				$pass=md5($pass);
	
			
				$arr=array("username"=>$username,"pass"=>$pass);
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					echo "<script> alert('Register Success') </script>";				
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