<?php
  require "config/db.php";
  require "config/config.php";

  if(isset($_POST['submit'])) {
    $todo = $conn->mysqli_real_escape_string($_POST["todo"]);
  
    $query = "INSERT INTO todo(todo) VALUES('$todo')";

    if($conn->mysqli_query($query)) {
      header('Location' . ROOT_URL);
    } else {
      echo 'Error: ' . $conn->mysqli_error;
    }
    echo "<meta http-equiv='refresh' content='0'>";
  }

?>

<div class="fixed-action-btn">
  <a id="add-btn" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</div>

<!-- Modal -->
<div id="overlay" class="overlay">
  <div>
    <h4>Add Todo</h4>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <button id="modal-exit" class="modal-exit" type="button"><i class="material-icons delete-icon">clear</i></button>
      <div class="input-field">
        <input type="text" id="todo" name="todo">
        <label for="todo">Todo</label>
      </div>
      <div class="right-align">
        <input name="submit" type="submit" value="Add" class="btn btn-large">
      </div>
    </form>
  <div>
</div>