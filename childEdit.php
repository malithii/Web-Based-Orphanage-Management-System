<!--<//?php


if(isset($_GET['editChild'])){

$edit_id = $_GET['editChild'];

$get_pro = "select * from childdetails where id='$edit_id'";

$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$name = $row_pro['name'];
$bdate = $row_pro['birthdate'];
$gender = $row_pro['gender'];


}

?>-->

<!DOCTYPE html>

<html>

<head>
    <title>Edit Child</title>

</head>

<body>

    <!-- <div class="row">-->
    <!--row starts-->

    <!--<div class="col-lg-12">-->
    <!--col-lg-12 starts-->

    <!--<ol class="breadcrumb">-->
    <!--breadcrumb starts-->

    <!-- <li class="active">
                            <i class="fa fa-dashboard"></i>Child/Edit Child
                        </li>-->

    <!--</ol>-->
    <!--breadcrumb Ends-->

    <!--</div>-->
    <!--col-lg-12 Ends-->

    <!--</div>-->
    <!--row Ends-->

    <!--<div class="row">-->
    <!--2 row starts-->

    <!--<div class="col-lg-12">-->
    <!--col-lg-12 starts-->

    <!--<div class="panel panel-default">-->
    <!--panel panel-default starts-->

    <!--<div class="panel-heading">-->
    <!--panel-heading starts-->

    <!--   <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Add Child

                            </h3>-->

    <!--</div>-->
    <!--panel-heading Ends-->

    <!--<div class="panel-body">-->
    <!--panel-body starts-->
    <div id="edit_child" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Child</h4>
                </div>
                <div class="modal-body">
                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->
                        <input type="hidden" id="childId" name="childId">
                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="cname" id="echildname" class="form-control"
                                    value="<?php echo $name?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Birth Date </label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="date" name="bdate" id="ebdate" class="form-control"
                                    value="<?php echo $bdate?>" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->






                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Gender</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <select name="gender" id="egender" class="form-control">
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

                                <input type="submit" class="btn btn-primary form-control" name="editchild"
                                    value="Update">

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

</body>

</html>

<?php
    if (isset($_POST['editchild'])) {

     $name = $_POST['cname'];
     $bdate = $_POST['bdate'];
     $gender =$_POST['gender'];
    $edit_id= $_POST['childId'];

        $insert_staff = "update childdetails  set name='$name',birthdate='$bdate',gender='$gender' where id= '$edit_id'";
             

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('child updated successfully ')</script>";
            echo "<script> window.open('index.php?viewChild ','_self')</script>";
        }
    }
    ?>