<!-- Controller for receiving users -->
<?php
require_once './config.php';

try {
  $stmt = $pdo->query("SELECT * FROM `users` ORDER BY `id` DESC");
  while ($user = $stmt->fetch()) {
    $users[] = $user;
  }
} catch (PDOException $e) {
  die('Database error: ' . $e->getMessage());
}
