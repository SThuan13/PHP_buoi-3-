<?php

  require_once('Models/Employee.php');

  class EmployeeController
  {
    public function index () 
    {

      //! Call model employee
      $employee = new Employee();
      $employees = $employee->all();

      require('Views/employee/index.php');

    }

    public function create()
    {
      require_once('Views/employee/create.php');
    }

    public function store ()
    {
      //return '1';die();
      $employee = new Employee();
      $result = $employee->create($_POST);

      if ( $result )
      {
        header ('location: index.php?controller=employee&action=index');
      }
    }

    public function update()
    {
      $id = $_GET['id'];
      $data = $_POST;
      $employee = new Employee();
      
      $result = $employee->update($id, $_POST);
      if ( $result )
      {
        header ('location: index.php?controller=employee&action=index');
      }
    }

    public function edit()
    {
      $id = $_GET['id'];
      $employee = new Employee();
      $employee = $employee->edit($id);
      //require_once('Views/employee/create.php');
      require_once("Views/employee/edit.php");
      //header ('location: index.php?controller=employee&action=index');
      
    }

    public function delete()
    {
      $id = $_GET['id'];
      $employee = new Employee();
      $employee = $employee->delete($id);
      //$employee 

      header ('location: index.php?controller=employee&action=index');
      //require_once('View/employee/edit.php');
    }
  }

  
?>