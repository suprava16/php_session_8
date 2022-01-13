<?php


// $username=$_GET['username'];
// echo $username;
// echo $_GET['user_email'];
// echo $_GET['user_password'];

if(isset($_POST['login'])){
  $username=$_POST['username'];
  echo $username;
  echo $_POST['user_email'];
  echo $_POST['user_password'];
}
else{
  echo "try again......";
}

?>