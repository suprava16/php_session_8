<?php
include "dbconfig.php";
$id=$_GET['user_id'];

$qry="delete from cst_table where customer_id=$id";
if($con->query($qry)){
  header("location:customers_list.php");
}
else{
  echo "data not found";
}

?>