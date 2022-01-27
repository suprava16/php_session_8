
<?php

if(isset($_POST['login'])){
  $email=$_POST['admin_email'];
  $password=$_POST['admin_password'];

  include "dbconfig.php";

  $sql="select * from admin_table where email='$email' and password='$password'";
//fetching data from database
 $result=$con->query($sql);
 if($result->num_rows>0){
   $data=$result->fetch_assoc();
   $admin_email=$data['email'];
    
  //start session
  session_start();
  $_SESSION['email']=$admin_email;
  header("location:admin_home.php");

 }



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Admin Login form</h1>
  <form action="" method="post">
    <input type="email" name="admin_email" placeholder="enter email">
    <input type="password" name="admin_password" placeholder="enter password">
    <button type="submit" name="login">Admin Login</button>
  </form>
</body>
</html>