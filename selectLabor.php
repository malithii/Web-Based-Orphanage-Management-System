<?php  
include("includes/db.php");
 $output = '';  
 $sql = "SELECT * FROM labor ORDER BY laborId DESC";  
 $result = mysqli_query($Con, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="10%">Name</th>  
                     <th width="20%">Address</th>  
                     <th width="10%">Gender</th>  
                     <th width="10%">Salary</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["laborId"].'</td>  
                     <td class="name" data-id1="'.$row["laborId"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="address" data-id2="'.$row["laborId"].'" contenteditable>'.$row["address"].'</td>  
                     <td class="gender" data-id3="'.$row["laborId"].'" contenteditable>'.$row["gender"].'</td>  
                     <td class="salary" data-id4="'.$row["laborId"].'" contenteditable>'.$row["salary"].'</td>  
                </tr>  
           ';  
      }  
   
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>