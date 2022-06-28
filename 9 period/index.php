<?php
  
  //! .../index.php?controller=employee&action=index

  // Step 1: Lấy tên controller và action ( employee | index )

  $controller = isset($_GET['controller']) ? ucfirst($_GET['controller'])."Controller" : "EmployeeController" ;
  $action = isset($_GET['action']) ? $_GET['action'] : 'index' ;

  //
  //echo $controller."||".$action ;

  //
  require_once("Controllers/$controller.php");

  $controllerInstance = new $controller();
  echo $controllerInstance->$action();

  
?>