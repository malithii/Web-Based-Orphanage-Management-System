<?php
include("includes/db.php");


 
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE labor SET ".$column_name."='".$text."' WHERE laborId='".$id."'";  
 if(mysqli_query($Con, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>