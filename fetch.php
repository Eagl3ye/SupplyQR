<?php
	$conn = pg_connect(getenv("DATABASE_URL"));
	$query = "SELECT * FROM items"; 

	$msg = "Database is empty";
	$rs = pg_query($conn, $query) or echo "<script type='text/javascript'>alert('$msg');</script>";

	while ($row = pg_fetch_row($rs)) {
		echo "$row[0]\n";
	}

?>
