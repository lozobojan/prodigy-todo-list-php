<?php
    include './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo App PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-3">Lista zadataka</h3>

        <div class="row">
            <div class="col-9 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Zadatak</th>
                            <th>Rok</th>
                            <th>Prioritet</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tasksTableBody">
                        <?php 
                        
                            $tasks = getTasks();
                            foreach($tasks as $currTask){
                                echo "<tr>";
                                echo "  <td>".$currTask['id']."</td>";
                                echo "  <td>".$currTask['name']."</td>";
                                echo "  <td>".$currTask['deadline']."</td>";
                                echo "  <td>".$currTask['priority']."</td>";
                                echo "  <td>
                                            <a href='./deleteTask.php?id=".$currTask['id']."'>brisanje</a>
                                        </td>
                                ";
                                echo "</tr>";                                
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <form action="./saveTask.php" method="POST">
                    <label for="taskName">Naziv zadatka:</label>
                    <input type="text" class="form-control task-input" name="taskName">

                    <label for="taskDeadline">Rok:</label>
                    <input type="date" class="form-control task-input" name="taskDeadline">

                    <label for="taskPriority">Prioritet:</label>
                    <select name="taskPriority" class="form-control">
                        <option value="">-odaberite prioritet-</option>
                        <option value="Nizak">Nizak</option>
                        <option value="Srednji">Srednji</option>
                        <option value="Visok">Visok</option>
                    </select>

                    <button class="btn btn-success w-100 mt-3" id="saveBtn">Sačuvaj</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>