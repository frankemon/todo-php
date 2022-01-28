<?php
include_once(__DIR__ . '/../views/show-todos.php');
include_once(__DIR__ . '/../controllers/todo-controller.php');

function showToDoCreatedView()
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- author etc  -->
    <title>ToDo added!</title>
</head>
    <body>
        <h1>New To-Do has been added!</h1>
    </body>
</html>
  
<?php
}
?>