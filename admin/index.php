<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/admin/framework/controllerAdmin.php';
session_start();
$ctr = 'home';
if (isset($_GET['ctr'])) {
  if (isset($_SESSION['user_infor_ad'])){
    $ctr = $_GET['ctr'];
  }else if($_GET['ctr']=='login'){
    $ctr = $_GET['ctr'];
  }
  
}

$controllerName = ucfirst($ctr) . 'Controller'; // UserController
$redirect = new controllerAdmin();
if (file_exists(__DIR__ . '/controllers/'.$controllerName.'.php')) {
    include_once(__DIR__ . '/controllers/'.$controllerName.'.php');
    if (class_exists($controllerName)) {
        $act = 'getIndex';
        if (isset($_GET['act'])) {
          if (isset($_SESSION['user_infor_ad'])){
            $act = $_GET['act'];
          }else if ($_GET['act']=='getLogin'){
            $act = $_GET['act'];
          }
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