<?php
include(__DIR__ . '/controllers/user-controller.php');
include_once(__DIR__ . '/views/login-success.php');
include_once(__DIR__ . '/includes/header.php');


handleUserLogin();
// print_r($_SESSION);

?>
<?php 
include_once(__DIR__ . '/includes/footer.php');