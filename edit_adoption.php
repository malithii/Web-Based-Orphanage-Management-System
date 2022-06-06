<!--<//?php


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

?>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!DOCTYPE html>

<html>

<head>
    <title>Edit Adoption</title>

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
    <div id="edit_adoption" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Adoption</h4>
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
                        <input type="hidden" id="Adopter_Id" name="adopter_Id">
                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">NIC No.</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="nic" id="enic" class="form-control" value="<?php echo $nic ?>"
                                    required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="aname" id="eaname" class="form-control"
                                    value="<?php echo $name ?>" required>

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

                            <label class="col-md-3 control-label">Contact No</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="contactno" id="econtactno" class="form-control"
                                    value="<?php echo $contactno ?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Child Adopted</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="cadopt" id="ecadopt" class="form-control"
                                    value="<?php echo $cadopt ?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <!--form-group Ends-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Date Adopted</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="adopt_date" id="eadopt_date" class="form-control"
                                    value="<?php echo $adopt_date ?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary form-control" name="editAdoption"
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
    if (isset($_POST['editAdoption'])) {

       $nic = $_POST['nic'];
     $name = $_POST['aname'];
     $contact = $_POST['contactno'];
     $address  =$_POST['address'];
     $adop_date =$_POST['adop_date'];
     $cadopt =$_POST['cadopt'];
   

        $insert_adoption = "update  adoption set Nic_no='$nic',Name='$name',Contact_No='$contact',Address='$address',adopt_date='$adop_date',child_name='$cadopt' where Adopter_Id = '$edit_id'";
               

        $run_adoption = mysqli_query($Con, $insert_adoption);

        if ($run_adoption) {
            echo "<script> alert('Adoption details updated successfully ')</script>";
            echo "<script> window.open('index.php?viewAdoption ','_self')</script>";
        }
    }
    ?>