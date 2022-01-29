<?php

include "dbconfig.php";
session_start();
if(isset($_SESSION['email'])){
      $qry="select * from cst_table";
      $result=$con->query($qry);
      if($result->num_rows>0){
echo "<table border=1>";
echo "<tr>
<th>name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Alternative Number</th>
</tr>";
            while($data=$result->fetch_assoc()){
                  $name=$data['customer_name'];
                  $email=$data['email'];
                  $phone=$data['phone'];
                  $address=$data['address'];
                  $alternative_number=$data['alternative_number'];
          ?>
            <tr><td><?php echo $name;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $phone;?></td>
            <td><?php echo $address;?></td>
            <td><?php echo $alternative_number;?></td>
            <?php
           echo "<td><a href='Delete.php?user_id=$data[customer_id]'>DELETE</a></td>";

     echo " </tr>";
        
            }
      }
}


?>