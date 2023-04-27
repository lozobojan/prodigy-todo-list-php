<?php

    function getTasks($fileName = 'tasks.json'){

        $fileContents = file_get_contents($fileName);
        $tasks = json_decode($fileContents, true);

        return $tasks;
    }

    function saveTasks($tasks, $fileName = 'tasks.json'){
        file_put_contents($fileName, json_encode($tasks));
    }

    function findNextId($tasks){
        $max = 1;
        foreach($tasks as $task){
            if($task['id'] > $max){
                $max = $task['id'];
            }
        }

        return $max + 1;
    }

?>