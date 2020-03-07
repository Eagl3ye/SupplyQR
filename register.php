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
			echo "<script>alert('Invalid Password'); document.getElementById('reg_fname').value = '<?php $fname?>'; document.getElementById('reg_lname').value = '<?php $lname?>'; document.getElementById('reg_email').value = '<?php $email?>'; document.getElementById('reg_pass').value = ''; document.getElementById('reg_cpass').value = '';</script>";
			
			//$conn = pg_connect(getenv("DATABASE_URL"));
			//$query = "CREATE TABLE IF NOT EXISTS users (id, firstname varchar(255)) NOT NULL, lastname varchar(255) NOT NULL, email varchar(255) NOT NULL UNIQUE, rank int(6)";
			//pg_query($conn, $query); 
			//$query = "INSERT INTO items VALUES ('$_POST[add_item]')";
			//pg_query($conn, $query); 
		}else{
			echo "<script>alert('Invalid Password')";
			header("Location: index.php");
			exit;
		}
	}
?>