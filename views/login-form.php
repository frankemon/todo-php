<?php

function login()
{
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- author etc  -->
    <title>Login to user account</title>
  </head>

  <body>
    <h1>Fill in username and password to continue</h1>
    <form class="form-login" method="POST" action="handle-user-login.php">
      Username: <input type="text" name="username" required>
      Password: <input type="password" name="password" required>
      <br>
      <button type="submit">Login</button>
    </form>

  </body>

  </html>

<?php
}
?>