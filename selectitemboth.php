<?php  
include("includes/db.php");
 $output = ''; 
  $id = $_POST["id"];  
 $sql = "SELECT * FROM donationitemdetails where donarid ='$id'";  
 $result = mysqli_query($Con, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     
                     <th width="40%">Item Name</th>  
                     <th width="40%">Quantity</th>  
                 
                </tr>';  
 if(mysqli_num_rows($result) >= 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     
                     <td class="item" data-id3="'.$row["id"].'" contenteditable>'.$row["itemDetails"].'</td>  
                     <td class="qty" data-id4="'.$row["id"].'" contenteditable>'.$row["qty"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
           
                <td id="itemboth" contenteditable></td>  
                <td id="qtyboth" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add_both" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
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