<?php

include("includes/db.php");

   $year = $_POST['year'];       
 
        

  
     
 $query = "select sum(cashAmount) as amount,Monthname(date) as month from donars d inner join donationcashdetails dcd on d.donarId = dcd.donarid where year(date)='$year' group by MONTH(date) ";  
      $result = mysqli_query($Con, $query);  
      
//      echo json_encode($row); 
      $json_array = array();
      while($row=mysqli_fetch_array($result)){
         $json_array[] = $row;
      }
     echo json_encode($json_array);
 ?>