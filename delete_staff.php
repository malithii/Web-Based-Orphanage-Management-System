<?php



if(isset($_GET['deleteStaff'])){

$delete_id = $_GET['deleteStaff'];

$delete_pro = "delete from staff where staffId='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('index.php?viewStaff','_self')</script>";

}

}



?>

<!--<div class="modal fade" id="del_staff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
                    <input type="hidden"  id="donorId" name='donorId' >
                
				<div class="container-fluid">
					<h5><center>Are you sure to delete <strong><input type="text" id="dname" name="sname"<//?php echo row_pro['Name']; ?>></strong> from the list? This method cannot be undone.</center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete_staff.php?id=<//?php echo $row_pro['staffId']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>-->