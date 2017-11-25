<?php
  require "config/db.php";

  if($_POST['todoId']) {
    $id = $_POST['todoId'];
    $query = "DELETE FROM todo WHERE id=$id";

    if(mysqli_query($conn, $query)) {
      echo "Success";
    } else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }