<?php
//database connection
$con=new mysqli("localhost","root","","image_upload");
if($con->connect_error){
  die("something wrong in your database connection.. Try again");
}
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $file_name=$_FILES['profile_image']['name'];
  $file_tmp_name=$_FILES['profile_image']['tmp_name'];

  if(move_uploaded_file($file_tmp_name,$file_name))
  {
    $qry="insert into user_image values(0,'$username','$file_name')";
    if($con->query($qry)){
      echo "image added successfully";
    }
    else{
      echo "something wrong";
    }
  }
}

?>

<a href="displayImage.php">Display</a>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="enter name"><br/>
    <input type="file" name="profile_image" ><br/>
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>