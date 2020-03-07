<?php
	if(isset($_POST['gateway_register'])) 
	{
		$fname = $_POST['register_fname'];
		$lname = $_POST['register_lname'];
		$email = $_POST['register_email'];
		$pass = $_POST['register_pass'];
		$confirmpass = $_POST['register_passconfirm'];
		if($pass != $confirmpass)
		{	
			echo "<script>alert('Invalid Password')</script>";
			//$conn = pg_connect(getenv("DATABASE_URL"));
			//$query = "CREATE TABLE IF NOT EXISTS users (firstname varchar(255)) NOT NULL, lastname varchar(255) NOT NULL, email varchar(255) NOT NULL UNIQUE, rank int(6)";
			//pg_query($conn, $query); 
			//$query = "INSERT INTO items VALUES ('$_POST[add_item]')";
			//pg_query($conn, $query); 
		}else{
			header("Location: signup.php");
			exit;
		}
	}
?>