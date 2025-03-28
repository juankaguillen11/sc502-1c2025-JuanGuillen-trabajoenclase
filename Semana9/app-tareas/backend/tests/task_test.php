<?php
require '../task.php';
 
echo "Creando una tarea";
echo "Tarea Creada: " .  createTask(1,"Aprender PHP", "Practicar y dominar el lenguaje", '2025-12-01');
 
echo "Obteniendo las tareas del usuario";
$tareas = getTasksByUser(1);
if($tareas){
    foreach($tareas as $tarea){
        echo "ID: " . $tarea["id"] . " - Titulo: " . $tarea["title"] . " - Description: " . $tarea["description"];
    }
}