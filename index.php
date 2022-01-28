<?php
// include(__DIR__ . '/controllers/todo-controller.php');
// sam has user controller
// include(__DIR__ . '/views/register-form.php');
// include(__DIR__ . '/views/login-form.php');
include_once(__DIR__ . '/includes/header.php');

landingPage();

?>
<?php
function landingPage()
{
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- author etc  -->
    <title>Francois' Todo List Landing Page</title>
  </head>
  <body>
  <h1>Welcome! Choose an action to continue</h1>
      <a class="link-button" href="register.php">Register Account</a>
      <a class="link-button" href="login.php">Login</a>

  </body>
  </html>
<?php
}
?>
