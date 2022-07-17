После клонирования репозитория, в корне проекта необходимо создать файл `config.php`.
Далее, предварительно создав базу данных, прописываем в нем скрипт подключения к базе данных.

Файл `config.php`
```php
$host = '<host_name>';
$db = '<db_name>';
$user = '<user_name>';
$pass = '<user_password>';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);
```

Во время написания проекта, не преследовось разграничение действий по ролям,
поэтому создать таблицу `users` в базе данных можно перейдя по адресу `/create-users-table`.
