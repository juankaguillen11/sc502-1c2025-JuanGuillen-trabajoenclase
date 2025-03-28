<?php
require('db.php');
 
function createTask($userId, $title, $description, $dueDate){
    global $pdo;
    try{
        $sql = "insert into tasks (user_id, title, description, due_date) value (:user_id, :title, :description, :due_date)";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute([
            'user_id' => $userId,
            'title' => $title,
            'description'=> $description,
            'due_date' => $dueDate
        ]);
        return $pdo -> lastInsertId();
 
    }catch(Exception $e){
        echo $e -> getMessage();
        return 0;
    }
}
 
function getTasksByUser($userId){
    try{
        global $pdo;
        $stmt = $pdo -> prepare("SELECT * FROM tasks where user_id = :user_id");
        $stmt->execute(['user_id' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(Exception $ex){
        echo "Error al obtener las tareas del usuario" . $ex-> getMessage();
        return [];
    }
}
 
function editTask($id, $title, $description,$dueDate){
 
}
 
function deleteTask($id){
 
}