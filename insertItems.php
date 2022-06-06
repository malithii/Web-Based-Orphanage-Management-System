    <?php  
    include("includes/db.php");
     $sql = "INSERT INTO donationitemdetails(donarid,itemDetails,qty) VALUES('".$_POST["id"]."', '".$_POST["description"]."','".$_POST["qty"]."')";  
     if(mysqli_query($Con, $sql))  
     {  
          echo 'Data Inserted';  
     }  
     ?>