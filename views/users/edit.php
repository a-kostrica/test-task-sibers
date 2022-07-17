<!-- User Edit Page -->
<?php
require_once './controllers/ShowUserController.php';
?>

<body>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Редактирование пользователя</h3>
    </div>
    <form action="../../controllers/EditUserController.php" method="POST">
      <div class="card-body">
        <?php
        foreach ($users as $user) {
          echo '<div class="form-group">';
          echo '<input type="hidden" name="id" value="' . $user['id'] . '">';
          echo '<label>Логин:</label>';
          echo '<input type="text" class="form-control" name="login" value="' . $user['login'] . '">';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<label>Пароль:</label>';
          echo '<input type="password" class="form-control" name="password">';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<label>Имя:</label>';
          echo '<input type="text" class="form-control" name="name" value="' . $user['name'] . '">';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<label>Фамилия:</label>';
          echo '<input type="text" class="form-control" name="surname" value="' . $user['surname'] . '">';
          echo '</div>';
          echo '<div class="form-group">';
          echo '<label>Пол:</label>';
          echo '<select class="form-control custom-select" name="gender">';
          if ($user['gender'] === 'М') {
            echo '<option value="М" selected>М</option>';
            echo '<option value="Ж">Ж</option>';
          } elseif ($user['gender'] === 'Ж') {
            echo '<option value="М">М</option>';
            echo '<option value="Ж" selected>Ж</option>';
          } else {
            echo '<option value="М">М</option>';
            echo '<option value="Ж">Ж</option>';
          }
          echo '</select>';
          // echo 'М<input type="radio" name="gender" value="М">';
          // echo 'Ж<input type="radio" name="gender" value="Ж">';
          echo '</div>';
          echo '<label>Дата рождения:</label>';
          echo '<div class="input-group">';
          echo '<input type="text" class="form-control mr-2" name="birthday" maxlength="2" value="' . $day . '">';
          echo '<input type="text" class="form-control mr-2" name="birthmonth" maxlength="2" value="' . $month . '">';
          echo '<input type="text" class="form-control" name="birthyear" maxlength="4" value="' . $year . '">';
          echo '</div>';
          echo '<div class="card-footer">';
          echo '<button type="submit" class="btn btn-primary" name="update-user">Обновить</button>';
          echo '</div>';
          echo '</div>';
        }
        ?>
    </form>
  </div>
</body>