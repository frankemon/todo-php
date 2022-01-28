<?php
include(__DIR__ . '/../db.php');

function createUser($name, $password)
{
    $pdo = connectDB();
    $sql = "INSERT INTO u04users (username, password) VALUES (:username, :pass) ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $name, 'pass' => $password]);
    
}

function getUserId($name)
{
    $pdo = connectDB();
    $stmt = $pdo->prepare("SELECT id FROM u04users WHERE username=:name");
    $stmt->execute(['name' => $name]); 
    $user_id_arr = $stmt->fetch();
    
    foreach ($user_id_arr as $key => $value) {
        $user_id = $value;
        $_SESSION['user_id'] = $user_id;
    }
}

function loginUser($username, $password)
{
    $pdo = connectDB();
    $stmt = $pdo->prepare("SELECT id, username, password FROM u04users WHERE username=:username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $password]); 
    $user_login_arr = $stmt->fetchAll();

    foreach ($user_login_arr as $row) {
        $user_id = $row['id'];
        $_SESSION['logged_in'] = $user_id;
    }
}

?>