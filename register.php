<?php
	if(isset($_POST['gateway_register'])) 
	{
		$pass = $_POST['register_pass'];
		$confirmpass = $_POST['register_passconfirm'];
		if($pass != $confirmpass)
		{
			echo "<script>alert('Confirm your password')</script>";
		}else{
			$conn = pg_connect(getenv("DATABASE_URL"));
			$query = "CREATE TABLE IF NOT EXISTS test (firstname varchar(255), lastname varchar(255))";
			
			//$query = "CREATE TABLE IF NOT EXISTS userdata (firstname varchar(255), lastname varchar(255), email varchar(255), pass varchar(255), rank varchar(255))";
			pg_query($conn, $query); 
			$query = "INSERT INTO test VALUES ($_POST[fname], $_POST[lname])";
			pg_query($conn, $query);
			header("Location: templates/registration_success.html");
			exit;
			//$query = "CREATE TABLE IF NOT EXISTS inventory_users (id int NOT NULL AUTO_INCREMENT, firstname varchar(255) NOT NULL, lastname varchar(255) NOT NULL, email varchar(255) NOT NULL UNIQUE, password varchar(255) NOT NULL, rank int(4))";
			//pg_query($conn, $query); 

			//$query = "INSERT INTO inventory_users VALUES ('$_POST[register_fname]', '$_POST[register_lname]', '$_POST[register_email]', '$_POST[register_pass]'), 3)";
			//pg_query($conn, $query); 
			//$query = "SELECT COUNT(email) FROM inventory_users WHERE email = '$email'";
			//$rs = pg_query($conn, $query); 
			//echo $rs;
			//if($query)
			//$query = "INSERT INTO items VALUES ('$_POST[add_item]')";
			//pg_query($conn, $query);

			//header("Location: templates/registration_success.html");
			//exit;
			pg_close($conn);
		}
	}
?>