<?php


// $username=$_GET['username'];
// echo $username;
// echo $_GET['user_email'];
// echo $_GET['user_password'];

if(isset($_POST['login'])){
  // $username=$_POST['username'];
  // echo $username;
  $user_email=$_POST['user_email'];
  $password=$_POST['user_password'];
if($user_email==="suprava@gmail.com" && $password==="sup"){
  header("location:home.php?id=10");
}
else{
  echo "something wrong... try again....!!!!!!!";
}

}
else{
  echo "try again......";
}

?>
<!-- <table>
  <tr>
    <td><?php echo $user_email;?></td>
  </tr>
</table> -->

