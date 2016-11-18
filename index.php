<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/framework/base/Controller.php';
session_start();
$ctr = 'home';
if (isset($_GET['ctr'])) {
  $ctr = $_GET['ctr'];
}

$controllerName = ucfirst($ctr) . 'Controller'; // UserController
$redirect = new Controller();
if (file_exists(__DIR__ . '/controllers/'.$controllerName.'.php')) {
    include_once(__DIR__ . '/controllers/'.$controllerName.'.php');
    if (class_exists($controllerName)) {
        $act = 'getIndex';
        if (isset($_GET['act'])) {
          $act = $_GET['act'];
        }
        $controller = new $controllerName();
        if (method_exists($controller, $act)) {
          $controller->$act();
        } else {
          // redirect to 404
          $redirect->redirect('ctr=error&act=error404');
        }
    } else {
        // redirect to 404
        $redirect->redirect('ctr=error&act=error404');
    }
} else {
    // redirect to 404
    $redirect->redirect('ctr=error&act=error404');
}