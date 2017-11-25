<?php
  require "config/db.php";

  if($_POST['todoId']) {
    $id = $_POST['todoId'];
    $query = "SELECT done FROM todo WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $done = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $done = $done[0]["done"];
    $done = $done == 0 ? 1 : 0;
    $query = "UPDATE todo SET done = $done WHERE id=$id";

    if(mysqli_query($conn, $query)) {
      echo $done;
    } else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }
    
?>