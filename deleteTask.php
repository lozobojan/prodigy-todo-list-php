<?php 

    include './functions.php';
    $tasks = getTasks();

    $idToDelete = $_GET['id'];

    foreach($tasks as $key => $task){
        if($task['id'] == $idToDelete){
            unset($tasks[$key]);
        }
    }

    // sacuvaj u fajl taskove bez izbrisanog
    saveTasks($tasks);

    header('location: ./index.php');

?>