# login-fb
<?php 


 require_once 'callback.php';
//
	if (!isset($_SESSION['id'])) {
		session_destroy();
		header('location:login.php');
	}
	else{
	header('location:admin.php');
	

	}
	
	
		
		


	
	

		
	

?>
