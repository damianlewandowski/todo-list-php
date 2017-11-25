<?php
  require 'includes/header.php';
  require 'includes/nav.php';
  require 'config/db.php';

  // Create query
  $query = 'SELECT * FROM todo';

  // Get results
  $result = mysqli_query($conn, $query);

  // Fetch data
  $todos = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Clean up and close
  mysqli_free_result($result);
  mysqli_close($conn);
?>

<div class="container">
  <div class="todo-container">
    <div class="center-align">
    <img src="img/pin.png" alt="pin" width="50">
    <h3>Todos</h3>
    </div>
      <ol class="todo-list">
        <?php foreach($todos as $todo): ?>
        <?php
          $id = $todo["id"];
          $doneClass = $todo["done"] == 0 ? 'check-icon-false' : 'check-icon-true'; 
          $doneClass .= " material-icons my-icon";
        ?>
          <li id="<?php echo "item-$id" ?>">
            <p><?php echo $todo["todo"] ?></p>
            <div class="icons">
              <i 
                class="<?php echo htmlspecialchars($doneClass); ?>"
                onclick="toggleTaskDone(this.id)" <?php echo "id=$id"  ?>>
                check
              </i>
              <i 
                class="material-icons delete-icon my-icon"
                onclick="deleteTodo(<?php echo $id ?>)"
                >clear</i>
            </div>
          </li>
        <?php endforeach ?>
      </ol>
  </div>
</div>

<?php
  require "addNewTodo.php";
  require 'includes/footer.php';
?>