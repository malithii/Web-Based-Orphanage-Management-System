<?php



if(isset($_GET['deleteLabors'])){

$delete_id = $_GET['deleteLabors'];

$delete_pro = "delete from labor where laborId='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One Labor Has been deleted')</script>";

echo "<script>window.open('index.php?viewLabors','_self')</script>";

}

}

?>