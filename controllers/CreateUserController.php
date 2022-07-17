<!-- User Creation Controller -->
<?php
require_once '../config.php';

if (isset($_POST['add-user'])) {
  $login = $_POST['login'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $gender = $_POST['gender'];
  $day = $_POST['birthday'];
  $month = $_POST['birthmonth'];
  $year = $_POST['birthyear'];
  if ($_POST['birthday'] & $_POST['birthmonth'] & $_POST['birthyear']) {
    $birthday = $year . '-' . $month . '-' . $day;
  }
  $query = 'INSERT INTO `users` (`login`, `password`, `name`, `surname`, `gender`, `birthday`) 
  VALUES (:login, :password, :name, :surname, :gender, :birthday)';
  $stmt = $pdo->prepare($query);

  try {
    $stmt = $stmt->execute(array(
      'login' => $login,
      'password' => $password,
      'name' => $name,
      'surname' => $surname,
      'gender' => $gender,
      'birthday' => $birthday
    ));
  } catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
  }

  header("Location: /users");
  exit;
}
