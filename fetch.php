<?php
	$conn = pg_connect(getenv("DATABASE_URL"));
	$query = "SELECT item FROM items";
	pg_query($conn, $query); 
	while ($row = pg_fetch_row($query)) {
		echo "Item: $row[0]";
		echo "<br />\n";
	}

?>
