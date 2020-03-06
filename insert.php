<?php
	if(isset($_POST['insertdata'])) 
	{
		$name1 = $_POST['add_item'];
		echo "User Has submitted the form and entered this: <b> $name1 </b>";
		$conn = pg_connect(getenv("DATABASE_URL"));
		$query = "CREATE TABLE IF NOT EXISTS items (item varchar(255))";
		pg_query($conn, $query); 
		$query = "INSERT INTO items VALUES ('$_POST[add_item]')";
		pg_query($conn, $query); 
	}
?>