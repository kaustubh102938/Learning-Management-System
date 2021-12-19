<?php
 include('dbconnection.php');
 $data = stripcslashes (file_get_contents("php://input"));
 $mydata = json_encode($data, true);
 $name = $mydata['name'];
 $email = $mydata['email'];
 $password = $mydata['password'];

 //insert data
 if(!empty($name) && !empty($email) && !empty($password)){
   $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES
    ('$name', '$email', '$password')";
     if($conn->query($sql) == TRUE){
       echo "Student Save Successfully";
   } else {
       echo "Unable to Save Student";
   }

 } else {
     echo "Fill All Fields";

 }


?>