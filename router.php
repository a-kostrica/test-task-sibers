<!-- URL Handler file -->
<?php

$uri = $_SERVER['REQUEST_URI'];
$page = $_GET['page'];

if (strstr($uri, '/show-user/')) {
  $user_id = str_replace('/show-user/', '', $uri);
}
if (strstr($uri, '/edit-user/')) {
  $user_id = str_replace('/edit-user/', '', $uri);
}

switch ($uri) {
  case '/':
    require_once './views/home.php';
    break;
  case '/create-users-table':
    require_once './database/create_users_table.php';
    break;
  case '/create-user':
    require_once './views/users/create.php';
    break;
  case '/users':
    require_once './views/users/index.php';
    break;
  case '/users?page=' . $page . '':
    require_once './views/users/index.php';
    break;
  case '/show-user/' . $user_id . '':
    require_once './views/users/show.php';
    break;
  case '/edit-user/' . $user_id . '':
    require_once './views/users/edit.php';
    break;
}
