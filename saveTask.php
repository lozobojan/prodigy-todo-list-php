<?php

    include './functions.php';
    $tasks = getTasks();

    $taskName = $_POST['taskName'];
    $taskDeadline = $_POST['taskDeadline'];
    $taskPriority = $_POST['taskPriority'];

    $newTask = [
        'id' => findNextId($tasks),
        'name' => $taskName,
        'deadline' => $taskDeadline,
        'priority' => $taskPriority
    ];

    // array_push($tasks, $newTask);
    $tasks[] = $newTask;

    saveTasks($tasks);

    // vrati nas na pocetnu gdje se prikazuju svi taskovi
    header('location: ./index.php');

?>