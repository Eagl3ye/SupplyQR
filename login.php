<?php
	if(isset($_POST['gateway_login'])) 
	{
		$email = $_POST['login_email'];
		$pass = $_POST['login_pass'];
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "SELECT pass FROM userdata WHERE email='$email'";

		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");
		$valpass = pg_fetch_all($rs);
		echo $valpass;
	}
?>
