<?php
//database connection

$con=new mysqli("localhost","root","","customer");
if($con->connect_error){
  die("something wrong in your database connection.. Try again");
}
?>