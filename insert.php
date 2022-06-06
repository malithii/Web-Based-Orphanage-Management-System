<?php

include("includes/db.php");

   $name = $_POST['donarname'];       
   $contact = $_POST['contactNo'];
   $address = $_POST['address'];
   $type = $_POST['type'];     
        

  $insert_product = "insert into donars (donarName, contactNo, Address, donationType, date)"
                . " values ('$name','$contact','$address','$type',NOW())";

  $run_product = mysqli_query($Con, $insert_product);     
     
 $query = "select donarid,donarName from donars order by donarId desc limit 1";  
      $result = mysqli_query($Con, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
    
 ?>