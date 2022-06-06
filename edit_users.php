<?php

if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";


} else {
    ?>

<?php
    if (isset($_GET['editUsers'])) {

        $edit_id = $_GET['editUsers'];

        $get_p = "select * from users where id='$edit_id'";

        $run_edit = mysqli_query($Con, $get_p);

        $row_edit = mysqli_fetch_array($run_edit);

        $uid = $row_edit['id'];

        $roleid = $row_edit['RoleId'];

        $role = "select * from userroles";
        $rolec = mysqli_query($Con, $role);
        $rowc = mysqli_fetch_array($rolec);
              
            $role_name = $rowc['roleName'];

            $name = $row_edit['name'];

            $gender = $row_edit['gender'];

            $picture = $row_edit['picture'];


            $dob = $row_edit['dob'];

            $cno = $row_edit['cno'];

            $address = $row_edit['Address'];

            $email = $row_edit['email'];

            $dor = $row_edit['DOR'];

            $dos = $row_edit['dos'];

            $doe = $row_edit['doe'];
            $username = $row_edit['username'];
            $pass = $row_edit['password'];
        }
        ?>


<!DOCTYPE html>

<html>

<head>

    <title> Edit Products </title>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: 'textarea'
    });
    </script>

</head>

<body>

    <div class="row">
        <!-- row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <ol class="breadcrumb">
                <!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Edit Users

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row">
        <!-- 2 row Starts -->

        <div class="col-lg-12">
            <!--col-lg-12 starts-->

            <div class="panel panel-default">
                <!--panel panel-default starts-->

                <div class="panel-heading">
                    <!--panel-heading starts-->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i>Add users

                    </h3>

                </div>
                <!--panel-heading Ends-->

                <div class="panel-body">
                    <!--panel-body starts-->

                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <!-- form-horizantal starts-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="name" class="form-control" required
                                    value="<?php echo $name; ?>">

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Gender</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="radio" name="gender" value="<?php echo $gender;  ?>" checked>Male

                                <input type="radio" name="gender" value="<?php echo $gender; ?>" required>Female

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->





                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="Date" name="dob" class="form-control" required value="<?php echo $dob; ?>">

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Contact No</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="contact" class="form-control" required
                                    value="<?php echo $cno; ?>">

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->






                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Address </label>

                            <div class="col-md-6">

                                <input type="text" name="address" class="form-control" required
                                    value="<?php echo $address; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Email</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="email" class="form-control" required
                                    value="<?php echo $email; ?>">

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Date Of Register</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="Date" name="dor" class="form-control" required value="<?php echo $dor; ?>">

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Date Of Start</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="Date" name="dos" class="form-control" required value="<?php echo $dos; ?>">

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Date Of End</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="Date" name="doe" class="form-control" required value="<?php echo $doe; ?>">

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">user Type</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <select name="type" class="form-control">


                                    <option value="<?php echo $roleid; ?>"> <?php echo $role_name; ?> </option>

                                    <?php
        $get_cat = "select * from userroles";
        $run_cat = mysqli_query($Con, $get_cat);
        while ($row_cat = mysqli_fetch_array($run_cat)) {
            $cat_id = $row_cat['roleid'];
            $cat_title = $row_cat['roleName'];

            echo"<option value='$cat_id'>$cat_title</option>";
        }
        ?>

                                </select>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Picture</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="file" name="img" class="form-control">
                                <br><img src="images/<?php echo $picture; ?>" width="70" height="70">

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->















                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="update" value="UpdateUsers"
                                    class="btn btn-primary form-control">

                            </div>

                        </div><!-- form-group Ends -->





                    </form><!-- form-horizantal Ends-->

                </div>
                <!--panel-body Ends-->

            </div>
            <!--panel panel-default Ends-->

        </div>
        <!--col-lg-12 Ends-->


    </div><!-- 2 row Ends -->




</body>

</html>

<?php
        if (isset($_POST['update'])) {

           

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        $dor = $_POST['dor'];
        $dos = $_POST['dos'];

        $doe = $_POST['doe'];

        $type = $_POST['type'];
        $username = $_POST['uname'];
        $password = $_POST['pass'];

       
        $picture = $_FILES['img']['name'];

       
        $temp_name = $_FILES['img']['tmp_name'];


        move_uploaded_file($temp_name, "images/$picture");
        
        

        $insert_product = "insert into users (RoleId, name, gender, dob, cno, Address, email, picture, DOR, dos, doe, username,password)"
                . " values ('$type','$name','$gender','$dob','$contact','$address','$email','$picture','$dor','$dos','$doe','$username','$password')";



        $run_product = mysqli_query($Con, $insert_product);

        
    
            if ($run_product) {

                echo "<script> alert('Product has been updated successfully') </script>";

                echo "<script>window.open('index.php?view_products','_self')</script>";
            }
        }
        ?>

<?php } ?>