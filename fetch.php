<?php
	$conn = pg_connect(getenv("DATABASE_URL"));
	$query = "SELECT * FROM items"; 

	$rs = pg_query($conn, $query) or die("Cannot execute query: $query\n");

	while ($row = pg_fetch_row($rs)) {
		echo "$row[0]\n";
	}

?>
