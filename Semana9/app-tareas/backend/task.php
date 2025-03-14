<?php
require ('db.php');

function createTask($userId, $title, $description, $dueDate): void{
    global $pdo;
    try{
        $sql = "insert into tasks (user_id, title, description, due_date) values (:user_id, :title, :description, : due_date,)"
        $stmt = $pdo->prepare($sql);
        $stmt -> execute([
            'user_id' => $userId,
            'title'=> $title,
            'description'=> $description,
            'due_date' => $dueDate

        ]),
        return $pdo ->lastInsertId();

    }catch(Exception $e){
        echo $e ->getMessage();
        return 0;
    }
}

function getTaskByUser($userId): void{
}

function editTask($id, $title, $description, $dueDate): void{
}

function deleteTask($id): void{
}



