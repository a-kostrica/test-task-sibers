<!-- Detailed User View Controller -->
<?php
require_once './config.php';

try {
  $stmt = $pdo->query('SELECT * FROM `users` WHERE `id` = ' . $user_id . '');
  while ($user = $stmt->fetch()) {
    $users[] = $user;
  }
} catch (PDOException $e) {
  die('Database error: ' . $e->getMessage());
}

$birthday = explode('-', $users[0]['birthday']);

$year = $birthday[0];
$month = $birthday[1];
$day = $birthday[2];
