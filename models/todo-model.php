<?php
include_once(__DIR__ . '/../db.php');
include_once(__DIR__ . '/../views/show-todos.php');
include_once(__DIR__ . '/../includes/header.php');

function createNewToDo($user_id, $title, $text)
{
  $pdo = connectDB();
  $sql = "INSERT INTO u04items (user_id, title, text, done) VALUES (:user_id, :title, :text, :done) ";
  $statement = $pdo->prepare($sql);
  $statement->execute(['user_id' => $user_id, 'title' => $title, 'text' => $text, 'done' => 0]);

  getToDos($user_id);
}

function getToDos($user_id)
{
  $pdo = connectDB();
  $sql = 'SELECT * FROM u04items WHERE user_id = :user_id';
  $statement = $pdo->prepare($sql);
  $statement->execute(['user_id' => $user_id]);

  $todoList = $statement->fetchAll();

  showToDos($todoList);
?>
<div class="list-wrapper"> 
  <ul>
    <?php
        foreach ($todoList as $dbRow) { ?>
          <div class="card-holder">
            <div class="todo-card">
          <?php if ($dbRow['done']) { ?>
          <li data-id="<?php echo $dbRow['id'] ?>">
            <h2 id="todo-title"><?php echo $dbRow['title'] ?></h2>
            <p><?php echo $dbRow['text'] ?></p>
            <form class="list-buttons" action="handle-todo-edits.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $dbRow['id'] ?>">
              <input type="submit" name="edit" value="Edit">
              <input type="submit" name="delete" value="Delete">
              <input onclick="lineFunctionOn()" type="submit" name="done" value="Done">
              <input onclick="lineFunctionOff()" type="submit" name="notdone" value="Not Done">
            </form>
          </li>
      </div>
    </div>
    <div class="card-holder">
      <div class="todo-card">
        <?php } else { ?>
          <li data-id="<?php echo $dbRow['id'] ?>">
            <h2><?php echo $dbRow['title'] ?></h2>
            <p><?php echo $dbRow['text'] ?></p>
              <form class="list-buttons" action="handle-todo-edits.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dbRow['id'] ?>">
                <input type="submit" name="edit" value="Edit">
                <input type="submit" name="delete" value="Delete">
                <input type="submit" name="done" value="Done">
                <input type="submit" name="notdone" value="Not Done">
              </form>
            </li>
        </div>
    </div>
    <?php } ?>
    <?php
      }
    ?>
</div>  <!-- end wrapper -->
</ul>
<?php
}
?>
   