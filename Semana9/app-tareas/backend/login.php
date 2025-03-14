<?php
require('db.php');
 
function login($username, $password){
    global $pdo;
 
    $sql = 'Select * from users where username = :username';
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute(['username' => $username]);
    $user = $stmt -> fetch(PDO::FETCH_ASSOC); //retorna los datos como un array asociativo
 
    if($user){
        //muestro los datos que estan en mi BD y fue resultado del fetch
        echo $user['username'];
        echo $user['email'];
        if(password_verify($password,$user['password'])){
            return true;
        }
    }
    return false;
}
