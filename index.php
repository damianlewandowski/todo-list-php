<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
  <title>Todo List</title>
</head>
<body>
  <nav>
    <div class="nav-wrapper blue darken-4">
      <a href="#" class="brand-logo center">Todo List</a>
    </div>
  </nav>

  <div class="container">
    <div class="todo-container">
      <div class="center-align">
      <img src="img/pin.png" alt="pin" width="50">
      </div>

        <ol class="todo-list">
          <li>
            <p>Clean up the toiletaa</p>
            <div class="icons">
              <i class="material-icons check-icon my-icon">check</i>
              <i class="material-icons delete-icon my-icon">clear</i>
            </div>
          </li>
          <li>
            <p>Cook dinner</p>
            <div class="icons">
              <i class="material-icons check-icon my-icon">check</i>
              <i class="material-icons delete-icon my-icon">clear</i>
            </div>
          </li>
          <li>
            <p>Learn something new</p>
            <div class="icons">
              <i class="material-icons check-icon my-icon">check</i>
              <i class="material-icons delete-icon my-icon">clear</i>
            </div>
          </li>
        </ol>
    </div>
  </div>

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
  </div>



  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>