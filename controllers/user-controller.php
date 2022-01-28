<?php
include_once(__DIR__ . '/../models/user-model.php');
include_once(__DIR__ . '/../views/create-user-success.php');

function createNewUser() 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    createUser($username, $password);
    getUserId($username);
    showUserCreatedView($username);

}

function handleUserLogin() 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    loginUser($username, $password);
    getUserId($username);

}
?>