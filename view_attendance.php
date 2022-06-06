<!DOCTYPE html>
<html>

<head>
    <title>View Attendance</title>



    <style>
    #myInput {
        background-image: url('/css/icons8-search.gif');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        border-radius: 10px;
        width: 50%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        float: right;
        height: 40px;
        border: 1px solid #ddd;
        /*  margin-bottom: 12px;*/
    }
    </style>
</head>

<body>


    <div class="row">
        <!--  1 row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <ol class="breadcrumb">
                <!-- breadcrumb Starts -->

                <li class="active">



                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!--  1 row Ends -->

    <div class="row">
        <!-- 2 row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <div class="panel panel-success">
                <!-- panel panel-default Starts -->

                <div class="panel-heading">
                    <!-- panel-heading Starts -->


                    <h3 class="panel-title" style="font-size:30px;">
                        <!-- panel-title Starts -->

                        View Attendance

                    </h3><!-- panel-title Ends -->

                    <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span
                                class="glyphicon glyphicon-plus"></span> Add Attendance</a></span>

                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                        title="Type in a name">

                    <br><br>
                </div><!-- panel-heading Ends -->

                <div class="panel-body" style="padding:0;">
                    <!-- panel-body Starts -->

                    <div class="table-responsive">
                        <!-- table-responsive Starts -->

                        <table id="myTable" class="table table-bordered table-hover table-striped">
                            <!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                                <tr>
                                    <th>NO</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>In Time</th>
                                    <th>Out Time</th>
                                   
                                </tr>

                            </thead>

                            <tbody>

                                <?php
                                include("includes/db.php");
                                $i = 0;

                                $get_pro = "select * from staff_attendance sa inner join staff s on s.staffId = sa.staffId ";

                                $run_pro = mysqli_query($Con,$get_pro);

                                while($row_pro=mysqli_fetch_array($run_pro)){

                               $name = $row_pro['Name'];
                                $date = $row_pro['Date'];
                                $in_time = $row_pro['In_time'];
                                $out_time = $row_pro['Out_time'];
                                $id = $row_pro['staff_attendance_id'];
                                $i++;

                                ?>

                                <tr>

                                    <td><?php echo $i; ?></td>

                                    <td><span id="name<?php echo $row_pro['staff_attendance_id']; ?>"><?php echo $name; ?></span>
                                    </td>
                                    <td><span
                                            id="date<?php echo $row_pro['staff_attendance_id']; ?>"><?php echo $date; ?></span>
                                    </td>
                                    <td><span
                                            id="in_time<?php echo $row_pro['staff_attendance_id']; ?>"><?php echo $in_time; ?></span>
                                    </td>
                                    <td><span
                                            id="out_time<?php echo $row_pro['staff_attendance_id']; ?>"><?php echo $out_time; ?></span>
                                    </td>

                                    


                                </tr>

                                <?php } ?>


                            </tbody>


                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->


</body>

</html>

<script>
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>




<?php include('add_attendance.php'); ?>
<!--<//?php include('edit_staff.php'); ?>-->


<script src="custom.js"></script>
<!--<//?php include('staff_edit.php'); ?>-->