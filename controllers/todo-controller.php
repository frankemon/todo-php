<?php
include_once(__DIR__ .  '/../models/todo-model.php');
include_once(__DIR__ .  '/../views/todo-created.php'); 

function handleCreateToDo()
{
    $user_id = $_SESSION['user_id'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    createNewToDo($user_id, $title, $text);
}

?>
<!-- DELETE FROM table_name -->
<!-- WHERE some_column = some_value -->