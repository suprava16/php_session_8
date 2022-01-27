<?php
session_start();

include "dbconfig.php";

if(isset($_SESSION['email'])){
  $sql="select * from cst_table where customer_id=$_SESSION[id]";

  $result=$con->query($sql);
if($result->num_rows>0){
  $data=$result->fetch_assoc();
  $name=$data['customer_name'];
  $email=$data['email'];
  $phone=$data['phone'];
  $address=$data['address'];
  $alternative_number=$data['alternative_number'];

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
  <h1>Your Profile</h1>
  <div>
  <span>Name:</span>
  <span><?php echo $name;?></span>
</div>
<div>
  <span>Email:</span>
  <span><?php echo $email;?></span>
</div>
<div>
  <span>Phone:</span>
  <span><?php echo $phone;?></span>
</div>
<div>
  <span>Address:</span>
  <span><?php echo $address;?></span>
</div>
<div>
  <span>Alternative Number:</span>
  <span><?php echo $alternative_number;?></span>
</div>
<a href="update.php">update</a>
</body>
</html>