<!DOCTYPE html>

<html>

<head>
    <title>Insert Labor</title>

</head>

<body>

    <div class="row">
        <!--row starts-->

        <div class="col-lg-12">
            <!--col-lg-12 starts-->

            <ol class="breadcrumb">
                <!--breadcrumb starts-->

                <li class="active">
                    <i class="fa fa-dashboard"></i>Labor/Add Labor
                </li>

            </ol>
            <!--breadcrumb Ends-->

        </div>
        <!--col-lg-12 Ends-->

    </div>
    <!--row Ends-->

    <div class="row">
        <!--2 row starts-->

        <div class="col-lg-12">
            <!--col-lg-12 starts-->

            <div class="panel panel-default">
                <!--panel panel-default starts-->

                <div class="panel-heading">
                    <!--panel-heading starts-->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i>Add Labor

                    </h3>

                </div>
                <!--panel-heading Ends-->

                <div class="panel-body">
                    <!--panel-body starts-->

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

                            <label class="col-md-3 control-label">Gender</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

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
                <!--panel-body Ends-->

            </div>
            <!--panel panel-default Ends-->

        </div>
        <!--col-lg-12 Ends-->

    </div>
    <!--2 row Ends-->



    <?php
    if (isset($_POST['addStaff'])) {

     $name = $_POST['Sname'];
     $contact = $_POST['contactNo'];
     $address  =$_POST['address'];
     $gender =$_POST['gender'];
    

        $insert_staff = "insert into labor (name,contact,address,gender)"
                . " values ('$name','$contact','$address' ,'$gender')";

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('labor Added successfully ')</script>";
            echo "<script> window.open('index.php?viewLabors ','_self')</script>";
        }
    }
    ?>