<!DOCTYPE html>

<html>

<head>
    <title>Insert Adoption</title>

</head>

<body>


    <div id="addnew" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Adoption Details</h4>
                </div>
                <div class="modal-body">
                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">NIC No.</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="nic" id="nic" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        
                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="aname" id="aname" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->





                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Address</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="address" id="address" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Contact No</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="contactno" id="contactno" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->


                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Child Adopted</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="cadopt" id="cadopt" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Date Adopted</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="date" name="adop_date" id="adop_date" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->





                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary form-control" name="addAdoption"
                                    value="Insert">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizantal Ends-->
                </div>
            </div>
        </div>
    </div>

    



    <?php
    if (isset($_POST['addAdoption'])) {
        
    $nic = $_POST['nic'];
     $name = $_POST['aname'];
     $contact = $_POST['contactno'];
     $address  =$_POST['address'];
     $adop_date =$_POST['adop_date'];
     $cadopt =$_POST['cadopt'];

        $insert_adoption = "insert into adoption (Name,Nic_no,Contact_no,Address,Date_adopted,Child_Name)"
                . " values ('$name','$nic','$contact','$address','$adop_date','$cadopt')";

        $run_adoption = mysqli_query($Con, $insert_adoption);

        if ($run_adoption) {
            echo "<script> alert('Adopter Added successfully ')</script>";
            echo "<script> window.open('index.php?viewAdoption ','_self')</script>";
        }
    }
    ?>