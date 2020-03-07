<?php
	if(isset($_POST['gateway_login'])) 
	{
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "SELECT * FROM userdata WHERE email = $_POST['login_email'] AND password = $_POST['login_pass']"; 

		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");

		$row = pg_fetch_result($rs);
		echo $row;
	}
?>
