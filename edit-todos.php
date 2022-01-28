<?php
include_once(__DIR__ . '/db.php');
include_once(__DIR__ . '/includes/header.php');
include_once(__DIR__ . '/models/todo-model.php');
include_once(__DIR__ . '/views/show-todos.php');


?>
<h1>ToDo has been edited!</h1>

<?php

$title = $_POST['title'];
$text = $_POST['text'];
$id = $_POST['id'];
// $timestamp = date('Y-m-d H:m:s');
// 'timestamp' => $timestamp,
// modified = :timestamp

$pdo = connectDB();

$sql = "UPDATE u04items
        SET title = :title, text = :text 
        WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['title' => $title, 'text' => $text,  'id' => $id]);

showCreateToDoForm();
getToDos($_SESSION['user_id']);
include_once(__DIR__ . '/includes/footer.php');

// header('Location: handle-user-login.php');
