<?php
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);
  
  $conn = new mysqli($server, $username, $password, $db);
  
    // Check connections
    if($conn->mysqli_connect_errno) {
      // Connection failed
      echo 'Failed to connect to MySQL: ' . mysqli_connect_errno();
    }
?>



