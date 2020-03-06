<?php
	$conn = pg_connect(getenv("DATABASE_URL"));
	$query = "SELECT item FROM items";
	pg_query($conn, $query); 
	$result = "INSERT INTO items VALUES ('$_POST[add_item]')";
	while ($row = pg_fetch_row($result)) {
	echo "Item: $row[0]";
	echo "<br />\n";
}

?>
