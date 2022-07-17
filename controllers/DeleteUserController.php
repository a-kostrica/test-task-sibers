<!-- User Deletion Controller -->
<?php
require_once '../config.php';

if (isset($_POST['delete-user'])) {
  $user_id = $_POST['delete-user'];

  $query = 'DELETE FROM `users` WHERE `id` = :user_id';
  $stmt = $pdo->prepare($query);
  try {
    $stmt = $stmt->execute(array('user_id' => $user_id));
  } catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
  }
}

header("Location: /users");
exit;
