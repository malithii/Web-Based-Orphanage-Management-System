<?php  
 include("includes/db.php");
 $sql = "DELETE FROM donationitemdetails WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($Con, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>