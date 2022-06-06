<?php
	include('includes/db.php');
	?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!-- Delete -->
<div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Delete</h4>
                </center>
            </div>
            <div class="modal-body">
                <input type='hidden' value="" id="staff_Edit" name='staff_Edit' />
                <?php 
                        
                    $del_id=$GET['staff_Edit'];
                    
					$del=mysqli_query($Con,"select * from staff where staffId='$del_id'");
					global $drow;
                        $drow=mysqli_fetch_array($del);
                    
				?>
                <div class="container-fluid">
                    <h5>
                        <center>Are you sure to delete <strong><?php echo ucwords($drow['Name']); ?></strong> from the
                            list? This method cannot be undone.</center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_staff.php?id=<?php echo $row_pro['staffId']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Delete</a>
            </div>

        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
					$edit=mysqli_query($Con,"select * from staff where staffId='".$row['staffId']."'");
					$erow=mysqli_fetch_array($edit);
				?>
                <div class="container-fluid">
                    <form method="POST" action="editStaff.php?id=<?php echo $erow['staffId']; ?>">
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Name:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="Name" class="form-control"
                                    value="<?php echo $erow['firstname']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Contact:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="contact" class="form-control"
                                    value="<?php echo $erow['Contact']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Address:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="address" class="form-control"
                                    value="<?php echo $erow['Address']; ?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span>
                    Save</button>
            </div>

        </div>
    </div>
</div>
<!-- /.modal -->