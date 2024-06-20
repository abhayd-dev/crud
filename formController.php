<?php
require_once __DIR__.'/connect.php';

if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

 $sql = "INSERT INTO emps(name,email,password,mobile) values('$name','$email','$password','$mobile') ";
 
    if (mysqli_query($conn, $sql)) {
      echo "inserted";
        }

  
}




?>