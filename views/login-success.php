<?php
include_once(__DIR__ . '/../includes/header.php');
include_once(__DIR__ . '/../models/todo-model.php');
include_once(__DIR__ . '/../views/show-todos.php');

// getUserId($_SESSION['user_id']);
?>
<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- author etc  -->
    <title>Welcome back!</title>
  </head>
  <body>
    <!-- <h1>Welcome back <?php echo $username ?></h1> -->

  </body>

<?php
getToDos($_SESSION['user_id']);