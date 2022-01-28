<?php
include_once(__DIR__ . '/../views/todo-form.php');

function showUserCreatedView($createUser)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- author etc  -->
    <title>User creation</title>
</head>
<body>
<h1>Welcome <?php echo $createUser;?></h1> 
    <h1> <?= $createUser ? 'New user has been created' : 'Error, new user was not created!' ?> </h1>
</body>
</html>

<?php
}
showCreateToDoForm();


?>