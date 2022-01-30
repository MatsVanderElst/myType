<?php
// set routes
use Illuminate\Http\Request;

$routes = array(
  'home' => array(
    'controller' => 'Pages',
    'action' => 'index'
  ),
  'upload' => array(
    'controller' => 'Pages',
    'action' => 'upload'
  ),
  'order' => array(
    'controller' => 'Pages',
    'action' => 'order'
  ),
);

if (empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if (empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
