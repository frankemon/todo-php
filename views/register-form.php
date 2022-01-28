<?php
function registerAccount() 
{
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- author etc  -->
    <title>Register new account</title>
  </head>
  <body>
  <h1>Create a new account by filling in your information below</h1>
  <div class="form-container">
    <form class="form-login" method="POST" action="create-user.php">
      Username: <input type="text" name="username" required><br>
      Password: <input type="password" name="password" required><br>
      <button type="submit">Register</button>
    </form>
  </div>

  </body>

  </html>
<?php
}
?>