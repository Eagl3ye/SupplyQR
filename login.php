<?php
	if(isset($_POST['gateway_login'])) 
	{
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "SELECT email FROM userdata; 

		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");

		echo "pg_fetch_one($rs)";
	}
?>
