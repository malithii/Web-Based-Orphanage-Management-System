<?php



if(isset($_GET['deleteAdoption'])){

$delete_id = $_GET['deleteAdoption'];

$delete_pro = "delete from adoption where Adopter_Id='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One adopter Has been deleted')</script>";

echo "<script>window.open('index.php?viewAdoption','_self')</script>";

}

}



?>