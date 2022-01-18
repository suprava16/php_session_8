<?php

if(isset($_POST['register'])){
  //fetching data from html file
  $name=$_POST['cst_name'];
  $email=$_POST['cst_email'];
  $phone=$_POST['cst_number'];
  $address=$_POST['cst_address'];
  $alt_number=$_POST['cst_alt_number'];
  $password=$_POST['cst_password'];
//database connection
include "dbconfig.php";

//insert data into database
$sql="insert into cst_table values(0,'$name','$email','$phone','$address','$alt_number','$password')";

if($con->query($sql)){
echo "data inserted successfully";
}
else{
echo "something wrong. try again";
}
}

?>