<?php
	include('includes/db.php');
	
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
	
	mysqli_query($conn,"update user set firstname='$firstname', lastname='$lastname', address='$address' where userid='$id'");
	header('location:index.php');

?>