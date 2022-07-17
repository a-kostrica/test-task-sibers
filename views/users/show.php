<!-- User's Detailed View page -->

<body>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Подробный просмотр пользователя</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th>ID</th>
            <th>Логин</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Пол</th>
            <th>Дата рождения</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once './controllers/ShowUserController.php';
          foreach ($users as $user) {
            echo '<tr>';
            echo '<td>' . $user['id'] . '</td>';
            echo '<td>' . $user['login'] . '</td>';
            echo '<td>' . $user['name'] . '</td>';
            echo '<td>' . $user['surname'] . '</td>';
            echo '<td>' . $user['gender'] . '</td>';
            echo '<td>' . $user['birthday'] . '</td>';
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>