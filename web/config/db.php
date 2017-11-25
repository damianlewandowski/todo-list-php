<?php
  // Create connections
  $conn = mysqli_connect('localhost', 'root', '', 'todo');
  
    // Check connections
    if(mysqli_connect_errno()) {
      // Connection failed
      echo 'Failed to connect to MySQL: ' . mysqli_connect_errno();
    }
?>