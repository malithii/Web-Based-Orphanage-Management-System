<?php

include("includes/db.php");

   $id = $_POST['donar_id'];       
   $cash = $_POST['cash'];
     
        

  $insert_product = "insert into donationcashdetails (donarid, cashAmount)"
                . " values ('$id','$cash')";

  $run_product = mysqli_query($Con, $insert_product);     
     
 
      
      echo json_encode($run_product);  
    
 ?>