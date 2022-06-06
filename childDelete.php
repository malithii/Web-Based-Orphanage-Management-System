<?php



if(isset($_GET['deleteChild'])){

$delete_id = $_GET['deleteChild'];

$delete_pro = "delete from childdetails where id='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One child Has been deleted')</script>";

echo "<script>window.open('index.php?viewChild','_self')</script>";

}

}

?>