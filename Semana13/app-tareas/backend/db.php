<?php
$host = getenv("DB_HOST") !== false ? getenv("DB_HOST") : "localhost";
$dbname = getenv("DB_NAME") !== false ? getenv("DB_NAME"): "todo_app";
$user= getenv("DB_USER") !== false ? getenv("DB_USER"): "root";
$password = getenv("DB_PASSWORD") !== false ? getenv("DB_PASSWORD") : "jguillen";
try{
 
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "Conexion exitosa ". PHP_EOL;
    
}catch(PDOException $e){
    die("Error de conexion: " . $e -> getMessage());
}