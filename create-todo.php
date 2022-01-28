<?php
include_once(__DIR__ . '/controllers/todo-controller.php'); 
include_once(__DIR__ . '/includes/header.php');

showCreateToDoForm();
showToDoCreatedView();
handleCreateToDo();
include_once(__DIR__ . '/includes/footer.php');


?>