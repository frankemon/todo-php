
<?php
include_once(__DIR__ . '/includes/header.php');
include(__DIR__ . '/controllers/todo-controller.php');
include_once(__DIR__ . '/models/todo-model.php');
include_once(__DIR__ . '/views/show-todos.php');


if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  
  $pdo = connectDB();
  $sql = "DELETE FROM u04items WHERE id=" . $id  . ";";
  $stmt = $pdo->prepare($sql);
  
  $stmt->execute(['id' => $id]);
  
  //EDIT
} elseif (isset($_POST['edit'])) {
  $id = $_POST['id'];
  
  ?>
    
<h1>Edit your ToDo</h1>
<form class="form-todo" action="edit-todos.php" method="POST">
  <label for="title">Title</label>
  <input type="text" name="title" id="title">
  <label for="text">Text</label>
  <textarea name="text" id="text" cols="20" rows="3"></textarea>
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <br>
  <input type="submit" value="Save">
</form>
  
<?php
  
} elseif (isset($_POST['done'])) {
  $id = $_POST['id'];
  $done = 1;
  $pdo = connectDB();

  $sql ="UPDATE u04items
         SET done = :done
         WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['done' => $done, 'id' => $id]);

} elseif (isset($_POST['notdone'])) {
  $id = $_POST['id'];
  $notdone = 0;
  $pdo = connectDB();

  $sql ="UPDATE u04items
         SET done = :notdone
         WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['notdone' => $notdone, 'id' => $id]);

}
showCreateToDoForm();
getToDos($_SESSION['user_id']);
include_once(__DIR__ . '/includes/footer.php');
?>