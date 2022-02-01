<?php
//database connection
$con=new mysqli("localhost","root","","image_upload");
if($con->connect_error){
  die("something wrong in your database connection.. Try again");
}

$sql="select * from user_image ";
$result=$con->query($sql);
 if($result->num_rows>0){
  while( $data=$result->fetch_assoc()){
    $username=$data['username'];
    echo "<div>";
    echo "welcome $username";
    echo "</div>";
    echo "<div>";
    echo "<img src='$data[image_file]' height=100px width=100px>";
    echo "</div>";
  }
}

?>