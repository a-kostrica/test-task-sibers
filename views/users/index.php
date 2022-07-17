<!-- User Output Page -->
<?php
require_once './controllers/GetUsersController.php';
?>

<body>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Пользователи</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th>ID</th>
            <th>Логин</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once './controllers/GetCountUsersController.php';
          echo '<form action="../../controllers/DeleteUserController.php" method="POST">';
          for ($i = $page * $count; $i < ($page + 1) * $count; $i++) {
            if ($users[$i]['id']) {
              echo '<tr>';
              echo '<td>' . $users[$i]['id'] . '</td>';
              echo '<td>' . $users[$i]['login'] . '</td>';
              echo '<td class="project-actions text-right">';
              echo '<a href="/show-user/' . $users[$i]['id'] . '" class="btn btn-primary btn-sm mr-2" 
          name="show-user" value="' . $users[$i]['id'] . '">Подробнее</a>';
              echo '<a href="/edit-user/' . $users[$i]['id'] . '" class="btn btn-info btn-sm mr-2" 
          name="show-user" value="' . $users[$i]['id'] . '">Редактировать</a>';
              echo '<button class="btn btn-danger btn-sm mr-2" 
          name="delete-user" type="submit" value="' . $users[$i]['id'] . '">Удалить</button>';
              echo '</td>';
              echo '</tr>';
            }
          }
          echo '</form>';
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
  if (count($users) > 3) {
    require_once './controllers/PaginationUsersController.php';
  }
  ?>
</body>