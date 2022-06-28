<?php

  class Employee
  {
    private $conn ;
    public function __construct()
    {
      $this->checkConnection();
    }

    

    public function checkConnection ()
    {
      //! localhost : host
      //! root : username
      //! password : 
      //! database : 
      $this->conn = new mysqli("localhost", "root", "", "bt1");
      
      //! Nếu kết nối thất bại
      if (!$this->conn)
      {
        die("Kết nối cơ sở dữ liệu thất bại!");
      }
      // else
      // {
      //   echo"hello world!";
      // }
    }

    public function all()
    {
      //! Bước 1: Viết câu lệnh sql ; 
      $sql = "SELECT * FROM employee";
      //! Bước 2: Chạy câu lệnh SQL
      $result = $this->conn->query($sql);
      //! Bước 3 (Optional): Trả dữ liệu cho người dùng
      // echo "<pre>";
      // print_r($result->fetch_all(MYSQLI_ASSOC)) ;
      // echo "</pre>";
      // die();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data)
    {
      //! Nhận dữ liệu từ data: kiểu dữ liệu mảng
      $name = $data['name'];
      $description = $data['description'];
      $salary = $data['salary'];
      $gender = $data['gender'];
      $birthday = $data['birthday'];

      //! Bước 1: Viết câu lệnh sql ; 
      $sql = "INSERT INTO `employee`(`name`, `description`, `salary`, `gender`, `birthday`) 
      VALUES ('$name','$description','$salary',$gender,'$birthday')" ;
      // $sql;
      //! Bước 2: Chạy câu lệnh SQL
      return $this->conn->query($sql);
    }

    public function delete($id)
    {
      //! Bước 1: Viết câu lệnh sql ; 
      $sql = "DELETE FROM employee WHERE id = ".$id ;
      //! Bước 2: Chạy câu lệnh SQL
      $this->conn->query($sql);
    }

    public function edit($id)
    {
      //! Bước 1: Viết câu lệnh sql ; 
      $sql = "SELECT * FROM employee WHERE id = $id";
      //! Bước 2: Chạy câu lệnh SQL
      $result = $this->conn->query($sql);
      return  $result->fetch_assoc();
    }

    public function update($id, $data)
    {
      //! Nhận dữ liệu từ data: kiểu dữ liệu mảng
      $name = $data['name'];
      $description =$data['description'];
      $salary = $data['salary'];
      $gender = $data['gender'];
      $birthday = $data['birthday'];
      //! Bước 1: Viết câu lệnh sql ; 
      $sql = "UPDATE employee 
              SET `name` = '$name', `description` = '$description', `salary` = '$salary', `gender` = $gender, `birthday` = '$birthday' 
              WHERE id = $id" ;
      //! Bước 2: Chạy câu lệnh SQL
      $result = $this->conn->query($sql);
      return  $result;
    }
  }

?>