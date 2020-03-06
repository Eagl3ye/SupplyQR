<?php
	include("templates/header.html");
	include("templates/body.html");
	include("templates/footer.html");
	$conn = pg_connect(getenv("DATABASE_URL"));
	$query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]', '$_POST[price]', '$_POST[dop]')";
	pg_query($conn, $query); 
?>