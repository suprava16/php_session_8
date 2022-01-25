<?php
session_start();
if(isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  $id=$_SESSION['id'];
  echo "<h1> welcome to home $email and your id value is $id</h1>";


?>

<a href="profile.php">Profile</a>
<a href="logout.php">Logout</a>
<?php
}
else{
  echo "404 ERROR!!!!!!.... Page Not Found";
}
?>