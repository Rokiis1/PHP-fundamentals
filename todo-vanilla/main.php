<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO list</title>
    <style>
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>TODO list</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="task">Task:</label>
        <input type="text" name="task" id="task" require>
        <button type="submit">Add</button> 
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
          $task = $_POST['task'];
          file_put_contents('tasks.txt', $task. "\n", FILE_APPEND | LOCK_EX);
        }

        $task = file('tasks.txt');

        if(count($task) == 0) {
            echo '<>No tasks';    
        } else {
            echo '<ul>';
            foreach($tasks as $task) {
                echo '<li>'. htmlspecialchars($task) .'</li>';
            }
            echo '</ul>';
        }
    ?>

    
</body>
</html>