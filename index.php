<!DOCTYPE html>
  <head>
    <title>Insert data to PostgreSQL with php - creating a simple web application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      li {
        list-style: none;
      }
    </style>
  </head>
  <body>
    <h2>Enter data into book table</h2>
      <ul>
        <form name="insert" action="insert.php" method="POST" >
          <li>Book ID:</li><li><input type="text" name="bookid" /></li>
          <li>Book Name:</li><li><input type="text" name="book_name" /></li>
          <li>Price (USD):</li><li><input type="text" name="price" /></li>
          <li>Date of publication:</li><li><input type="text" name="dop" /></li>
          <li><input type="submit" /></li>
        </form>
      </ul>
  </body>
</html>

<?php
  $conn = pg_connect(getenv("DATABASE_URL"));
  $query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]',
'$_POST[price]','$_POST[dop]')";
  pg_query($conn, $query); 
?>