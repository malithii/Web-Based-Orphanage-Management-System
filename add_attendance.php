<!DOCTYPE html>

<html>

<head>
    <title>Insert Attendance</title>

</head>

<body>

  
    <div id="addnew" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Attendance Details</h4>
                </div>
                <div class="modal-body">
                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                 <select name="sname" id="sname" class="form-control">
                                      <option>
                                          -Select a name-  
                                     </option>
                                      <?php 
                                     $sql="select Distinct(s.staffId),s.Name from staff_attendance sa inner join staff s on s.staffId = sa.staffId  ";
                                     
                                     $all_staff = mysqli_query($Con,$sql);

                while ($staff_name = mysqli_fetch_array(
                        $all_staff,MYSQLI_ASSOC)):; 
            ?>
               
                <option value="<?php echo $staff_name["staffId"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $staff_name["Name"];
                        // To show the category name to the     user
                    ?>
                                     </option>
                                     <?php
                                     endwhile;
                                     ?>
                                     
                                </select>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Date</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="date" name="sdate" id="sdate" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->





                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">In Time</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="time" name="itime" id="itime" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Out Time</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="time" name="otime" id="otime" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->






                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary form-control" name="addAttendance"
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

    </body>
</html>


    <?php
     $id;
    if (isset($_POST['addAttendance'])) {
    $name = $_POST['sname'];
    }
     $get_pro = "select staffId from staff where Name='$name' ";

        $run_pro = mysqli_query($Con,$get_pro);

         while($row_pro=mysqli_fetch_array($run_pro)){

        $id = $row_pro['staffId'];
         }
    
    if (isset($_POST['addAttendance'])) {

//     $name = $_POST['sname'];
     $date = $_POST['sdate'];
     $itime  =$_POST['itime'];
     $otime =$_POST['otime'];
     
        $insert_staff = "insert into staff_attendance (staffId,Date,In_time,Out_time)"
                . " values ('$id','$date','$itime','$otime')";

        $run_staff = mysqli_query($Con, $insert_staff);

        if ($run_staff) {
            echo "<script> alert('User Added successfully ')</script>";
            echo "<script> window.open('index.php?viewAttendance ','_self')</script>";
        }
    }
    ?>