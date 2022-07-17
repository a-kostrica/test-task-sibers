<!-- User Creation page -->

<body>
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Добавление пользователя</h3>
    </div>
    <form action="../../controllers/CreateUserController.php" method="POST">
      <div class="card-body">
        <div class="form-group">
          <label>Логин:</label>
          <input type="text" class="form-control" name="login" required>
        </div>
        <div class="form-group">
          <label>Пароль:</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
          <label>Имя:</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label>Фамилия:</label>
          <input type="text" class="form-control" name="surname">
        </div>
        <div class="form-group">
          <label>Пол:</label>
          <select class="form-control custom-select" name="gender">
            <option value="М">М</option>
            <option value="Ж">Ж</option>
          </select>
        </div>
        <label>Дата рождения:</label>
        <div class="input-group">
          <input type="text" class="form-control mr-2" name="birthday" maxlength="2">
          <input type=" text" class="form-control mr-2" name="birthmonth" maxlength="2">
          <input type="text" class="form-control" name="birthyear" maxlength="4">
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="add-user">Добавить</button>
        </div>
      </div>
    </form>
  </div>
</body>