<!DOCTYPE html>

<html>

<head>
    <title>Insert Staff</title>

</head>

<body>


    <div id="addnew" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Staff Details</h4>
                </div>
                <div class="modal-body">
                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="Sname" id="donarname" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Contact No</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="contactNo" id="contactNo" class="form-control" required>

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

                            <label class="col-md-3 control-label">UserName</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="username" id="username" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Password</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="password" name="password" id="password" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->





                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary form-control" name="addStaff"
                                    value="Insert">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizantal Ends-->
                </div>
            </div>
        </div>
    </div>

    <!--</div>-->
    <!--panel-body Ends-->

    <!-- </div>-->
    <!--panel panel-default Ends-->

    <!--</div>-->
    <!--col-lg-12 Ends-->

    <!-- </div>-->
    <!--2 row Ends-->



    <?php
    if (isset($_POST['addStaff'])) {

     $name = $_POST['Sname'];
     $contact = $_POST['contactNo'];
     $address  =$_POST['address'];
     $username =$_POST['username'];
     $password = $_POST['password'];

        $insert_staff = "insert into staff (Name,ContactNo,Address,username,password)"
                . " values ('$name','$contact','$address','$username','$password')";

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('User Added successfully ')</script>";
            echo "<script> window.open('index.php?viewStaff ','_self')</script>";
        }
    }
    ?>