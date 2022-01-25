<?php
session_start();
include "dbconfig.php";
if(isset($_POST['update'])){
  $name=$_POST['cst_name'];
  $email=$_POST['cst_email'];
  $phone=$_POST['cst_number'];
  $address=$_POST['cst_address'];
  $alt_number=$_POST['cst_alt_number'];

  $qry="update cst_table set customer_name='$name',email='$email',phone='$phone',address='$address',alternative_number='$alt_number' where customer_id=$_SESSION[id]";
  if($con->query($qry)){
    header("location:profile.php");
  }
  else{
    echo "user not found";
  }
 }

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
 
  <form action="" method="post">
    <input type="text" name="cst_name" value="<?php echo $name;?>" placeholder="enter name"><br/>
    <input type="email" name="cst_email" value="<?php echo $email;?>" placeholder="enter email"><br/>
    <input type="text" name="cst_number" value="<?php echo $phone;?>" placeholder="enter number"><br/>
    <input type="text" name="cst_address" value="<?php echo $address;?>" placeholder="enter address"><br/>
    <input type="text" name="cst_alt_number" value="<?php echo $alternative_number;?>" placeholder="enter alternative number"><br/>
    <button type="submit" name="update">Update</button>
    <button><a href="profile.php">Back</a></button>
  </form>
  
</body>
</html>