<!-- The file for creating the "users" table in the database.
To create a table, go to /create-users-table -->
<?php
require_once './config.php';

function createUsersTable($pdo)
{
  try {
    $create_users_table = 'CREATE TABLE `users` (
  `id` INT PRIMARY KEY AUTO_INCREMENT, 
  `login` VARCHAR(20) UNIQUE NOT NULL, 
  `password` VARCHAR(255) NOT NULL, 
  `name` VARCHAR(30), 
  `surname` VARCHAR (20), 
  `gender` VARCHAR(10), 
  `birthday` DATE)';

    $pdo->query($create_users_table);
    return [
      'status' => true,
      'message' => 'Таблица "users" успешно создана'
    ];
  } catch (PDOException $e) {
    return [
      'status' => false,
      'error' => $e->getMessage()
    ];
  }
}

$response = createUsersTable($pdo);

echo json_encode($response);
