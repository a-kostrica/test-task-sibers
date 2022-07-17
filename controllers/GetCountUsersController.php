<!-- Determination of the page number, the number of output records and the number of pages -->
<?php
require_once './config.php';

$page = $_GET['page'];
$count = 3;

try {
  $count_user = $pdo->query("SELECT COUNT(*) FROM `users`");
  $res_count_user = $count_user->fetchColumn();
  $page_count = ceil(($res_count_user) / $count);
} catch (PDOException $e) {
  die('Database error: ' . $e->getMessage());
}
