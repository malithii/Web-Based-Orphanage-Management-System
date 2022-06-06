<?php




if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['deleteUsers'])){

$delete_id = $_GET['deleteUsers'];

$delete_pro = "delete from users where id='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('index.php?viewUsers','_self')</script>";

}

}

?>

<?php } ?>