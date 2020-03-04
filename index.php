<?php
  $conn = pg_connect(getenv("DATABASE_URL"));
  //$sql = "CREATE TABLE IF NOT EXISTS Users (
  //  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //  firstname VARCHAR(30) NOT NULL,
  //  lastname VARCHAR(30) NOT NULL,
  //  email VARCHAR(50),
  //  isGuest BOOLEAN,
  //  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  //  )";
  if (!$conn) {
    echo "Not connected";
  }else{
    echo "Connected";
  }
  pg_query($conn, $sql);
?>
