<!DOCTYPE html>

<html>

<head>
    <title>Insert Child</title>

</head>

<body>
    <!--
            <div class="row">-->
    <!--row starts-->

    <!-- <div class="col-lg-12">-->
    <!--col-lg-12 starts-->

    <!--<ol class="breadcrumb">-->
    <!--breadcrumb starts-->

    <!--<li class="active">
                        
                        </li>
-->
    <!--</ol>-->
    <!--breadcrumb Ends-->

    <!--</div>-->
    <!--col-lg-12 Ends-->

    <!-- </div>-->
    <!--row Ends-->

    <!--<div class="row">-->
    <!--2 row starts-->

    <!--<div class="col-lg-12">-->
    <!--col-lg-12 starts-->

    <!--<div class="panel panel-default">-->
    <!--panel panel-default starts-->

    <!--<div class="panel-heading">-->
    <!--panel-heading starts-->
    <!--

                            <h3 class="panel-title" style="font-size:20px;">

                              Add Child

                            </h3>
-->

    <!-- </div>-->
    <!--panel-heading Ends-->

    <!--<div class="panel-body">-->
    <!--panel-body starts-->
    <div id="addnew" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Child Details</h4>
                </div>
                <div class="modal-body">
                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="cname" id="childname" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Birth Date </label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="date" name="bdate" id="bdate" class="form-control" required>

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

                                <input type="submit" class="btn btn-primary form-control" name="addchild"
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
    if (isset($_POST['addchild'])) {

     $name = $_POST['cname'];
     $bdate = $_POST['bdate'];
     $gender =$_POST['gender'];
    

        $insert_staff = "insert into childdetails (name,gender,birthdate)"
                . " values ('$name','$gender','$bdate')";

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
          
            
         
            echo "<script> alert('child Added successfully ')</script>";
            echo "<script> window.open('index.php?viewChild ','_self')</script>";
        }
    }
    ?>