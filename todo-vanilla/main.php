<?php
// Check if the request method is POST
if (isset($_POST['task'])) {
    // Get the task from the POST data
  $task = $_POST['task'];
//   Append the task to the task.txt file
  file_put_contents('tasks.txt', $task . "\n", FILE_APPEND);
}

// Check if the request method is GET and delete parameter is set
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['delete'])) {
    // Get the index of the task to delete from the GET data
    $deleteIndex = (int) ['delete'];
    // Get all the tasks from task.txt file
    $tasks = file('tasks.txt');
    // Check if the task at the deleteIndex exists
    if (isset($tasks[$deleteIndex])) {
        // Remove the task from the deleteIndex
        unset($tasks[$deleteIndex]);
        // Write the remaining tasks to tasks.txt file
        file_put_contents('tasks.txt', implode(',', $tasks));
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatedTask']) && isset($_POST['updateIndex'])) {
    $updatedIndex = (int) $_POST['updateIndex'];
    $updatedTask = $_POST['updatedTask'];
    $tasks = file('tasks.txt');
    if (isset($tasks[$updatedIndex])) {
        $tasks[$updatedIndex] = $updatedTask . "\n";
        file_put_contents('tasks.txt', implode('', $tasks));
    }
}

$tasks = file('tasks.txt');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TODO List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    h1 {
      text-align: center;
    }
    
    form {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    input[type="text"] {
      flex: 1;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px 0 0 5px;
      border: 1px solid #ccc;
    }
    
    button[type="submit"] {
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 0 5px 5px 0;
      border: none;
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
    }
    
    ul {
      list-style: none;
      padding: 0;
    }
    
    li {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  background-color: #f5f5f5;
  padding: 10px;
  border-radius: 5px;
  position: relative;
}

li .task {
  flex: 1;
}

.delete {
  margin-left: 10px;
  background-color: #f44336;
  color: #fff;
  border: none;
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
  cursor: pointer;
}
  </style>
</head>
<body>
  <h1>TODO List</h1>
  
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="task" placeholder="Add task..." required>
    <button type="submit">Add Task</button>
  </form>
  <!-- Display the list of tasks -->
  <?php if (count($tasks) == 0): ?>
    <!-- Show "No tasks" message if there are no tasks in the $tasks array -->
    <p>No tasks</p>
  <?php else: ?>
    <ul>
      <!-- Loop through each task in the $tasks array and display it in a list item -->
      <?php foreach ($tasks as $task): ?>
        <li class="task">
            <!-- Display the task with htmlspecialchars() function to prevent XSS attacks -->
            <?php echo htmlspecialchars($task); ?>
            <!-- Form to delete the task -->
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                <!-- Hidden input field to pass the index of the task to delete -->
                <input type="hidden" name="delete" value="<?php echo $index; ?>" />
                <button type="submit" class="delete">Delete</button>
            </form>

            <!-- Form to update the task -->
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <!-- Hidden input field to pass the index of the task to update -->
                <input type="hidden" name="updateIndex" value="<?php echo $index; ?>" />
                <input type="text" name="updatedTask" placeholder="Update task..." required>
                <button type="submit">Update</button>
            </form>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</body>
</html>