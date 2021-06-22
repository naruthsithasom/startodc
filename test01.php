<?php
      define("DB_HOST", "43.229.78.39");
      define("DB_USER", "dean");
      define("DB_PASSWORD", "zdean_star2dc");
      define("DB_DATABASE", "zdean_star2dc");
  
      $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

  if(!$conn){
    die('Connection failled!!!') . mysqli_connect_error();
  } else {
    echo "db conntenct";
  }
?>