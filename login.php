<?php
	if(isset($_POST['gateway_login'])) 
	{
		$email = $_POST['login_email'];
		$pass = $_POST['login_pass'];
		$conn = pg_connect(getenv("DATABASE_URL")) or die("Unable to connect to the server: $conn\n");
		$query = "SELECT * FROM test";
		$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");

		while ($row = pg_fetch_row($rs)) {
			echo "$row[0]\n";
		}
		pg_close($conn);
	}
?>
