<?php
	if(isset($_POST['gateway_login'])) 
	{
		$email = $_POST['login_email'];
		$pass = $_POST['login_pass'];
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "SELECT * FROM userdata WHERE email = $email AND password = $pass"; 

		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");

		$row = pg_fetch_result($rs);
		echo $row;
	}
?>
