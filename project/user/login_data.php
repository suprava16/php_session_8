<?php

if(isset($_POST['login'])){
  $email=$_POST['cst_email'];
  $password=$_POST['cst_password'];

  include "dbconfig.php";

  $sql="select * from cst_table where email='$email' and password='$password'";
//fetching data from database
 $result=$con->query($sql);
 if($result->num_rows>0){
   $data=$result->fetch_assoc();
   $user_email=$data['email'];
   $user_password=$data['password'];
   $user_id=$data['customer_id'];
    
  //  echo "your email id is $user_email and password is $user_password";

  //start session
  session_start();
  $_SESSION['email']=$user_email;
  $_SESSION['id']=$user_id;
  header("location:user_home.php");

 }



}

?>