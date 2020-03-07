<?php
	if(isset($_POST['gateway_login'])) 
	{
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "SELECT * FROM users"; 

		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");

		while ($row = pg_fetch_row($rs)) {
			echo "$row[0]\n";
		}
	}
?>
