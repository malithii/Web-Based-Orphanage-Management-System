<?php


if(isset($_GET['editStaff'])){

$edit_id = $_GET['editStaff'];

$get_pro = "select * from staff where staffId='$edit_id'";

$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$name = $row_pro['Name'];
$contact = $row_pro['ContactNo'];
$address = $row_pro['Address'];
$username = $row_pro['username'];   
$id = $row_pro['staffId'];

}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!DOCTYPE html>

<html>

<head>
    <title>Edit Staff</title>

</head>

<body>




    <!--<div class="row">-->
    <!--row starts-->

    <!--<div class="col-lg-12">-->
    <!--col-lg-12 starts-->

    <!--<ol class="breadcrumb">-->
    <!--breadcrumb starts-->

    <!-- <li class="active">
                            <i class="fa fa-dashboard"></i>Staff/Edit Staff
                        </li>-->

    <!--</ol>-->
    <!--breadcrumb Ends-->

    <!--</div>-->
    <!--col-lg-12 Ends-->

    <!--</div>-->
    <!--row Ends-->
    <div id="edit_staff" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Staff</h4>
                </div>
                <div class="modal-body">


                    <?php
                   /* $id=$row_pro['staffId']; 
                    include("includes/db.php");
					$edit=mysqli_query($Con,"select * from staff where staffId='$id'");
					$erow=mysqli_fetch_array($edit);*/
				?>
                    <!--<div class="row">-->
                    <!--2 row starts-->

                    <!--<div class="col-lg-12">-->
                    <!--col-lg-12 starts-->

                    <!-- <div class="panel panel-default">-->
                    <!--panel panel-default starts-->

                    <!--<div class="panel-heading">-->
                    <!--panel-heading starts-->

                    <!--   <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Edit Staff

                            </h3>-->

                    <!--</div>-->
                    <!--panel-heading Ends-->

                    <!--  <div class="panel-body">-->
                    <!--panel-body starts-->



                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->
                        <input type="hidden" id="donorId" name="donorId">
                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="Sname" id="edonarname" class="form-control"
                                    value="<?php echo $name ?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Contact No</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="contactNo" id="econtactNo" class="form-control"
                                    value="<?php echo $contact ?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->





                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Address</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="address" id="eaddress" class="form-control"
                                    value="<?php echo $address ?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">UserName</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="username" id="eusername" class="form-control"
                                    value="<?php echo $username ?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <!--form-group Ends-->





                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary form-control" name="editStaff"
                                    value="Update">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizantal Ends-->

                    <!--</div>-->
                    <!--panel-body Ends-->

                    <!-- </div>-->
                    <!--panel panel-default Ends-->

                    <!--</div>-->
                    <!--col-lg-12 Ends-->

                    <!--</div>-->
                    <!--2 row Ends-->

                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>



</script>


<?php
    if (isset($_POST['editStaff'])) {

     $name = $_POST['Sname'];
     $contact = $_POST['contactNo'];
     $address  =$_POST['address'];
     $username =$_POST['username'];
        $edit_id=$_POST['donorId'];
   

        $insert_staff = "update  staff set Name='$name',ContactNo='$contact',Address='$address',username='$username' where staffId = '$edit_id'";
               

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('Staff updated successfully ')</script>";
            echo "<script> window.open('index.php?viewStaff ','_self')</script>";
        }
    }
    ?>