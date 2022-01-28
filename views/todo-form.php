<?php
function showCreateToDoForm()
{
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- author etc  -->
    <title>Create a new ToDo item</title>
  </head>
  <body>
  <h1>Fill in a title and text for your new ToDo item</h1>
  <div>
    <form class="form-todo" method="POST" action="/u04-todo-app-frankemon/create-todo.php">
      Title: <input type="text" name="title" required>
      Text: <textarea name="text" id="text" cols="20" rows="3" required></textarea>
      <br>
      <button type="submit">Create</button>
    </form>
  </div>

  </body>

  </html>
<?php
}
?>