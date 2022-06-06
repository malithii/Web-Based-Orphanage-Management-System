<!DOCTYPE html>
<html>

<head>
    <title>PHP/MySQLi CRUD Operation using Bootstrap/Modal</title>



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

                        View Staff

                    </h3><!-- panel-title Ends -->

                    <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span
                                class="glyphicon glyphicon-plus"></span> Add Staff</a></span>

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
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Username</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>

                            </thead>

                            <tbody>

                                <?php
                                include("includes/db.php");
                                $i = 0;

                                $get_pro = "select * from staff";

                                $run_pro = mysqli_query($Con,$get_pro);

                                while($row_pro=mysqli_fetch_array($run_pro)){

                                $name = $row_pro['Name'];
                                $contact = $row_pro['ContactNo'];
                                $address = $row_pro['Address'];
                                $username = $row_pro['username'];
                                $id = $row_pro['staffId'];
                                $i++;

                                ?>

                                <tr>

                                    <td><?php echo $i; ?></td>

                                    <td><span id="name<?php echo $row_pro['staffId']; ?>"><?php echo $name; ?></span>
                                    </td>
                                    <td><span
                                            id="contact<?php echo $row_pro['staffId']; ?>"><?php echo $contact; ?></span>
                                    </td>
                                    <td><span
                                            id="address<?php echo $row_pro['staffId']; ?>"><?php echo $address; ?></span>
                                    </td>
                                    <td><span
                                            id="username<?php echo $row_pro['staffId']; ?>"><?php echo $username; ?></span>
                                    </td>

                                    <td>

                                   
                                        <button type="button" class="btn btn-warning edit_staff"
                                            value="<?php echo $row_pro['staffId']; ?>"><i class="fa fa-pencil-square-o">
                                            </i> Edit</button>

                                    </td>
                                    <td>

                                        <a href="index.php?deleteStaff=<?php echo $id; ?>" class="btn btn-danger">
                                            <i class="fa fa-trash-o"> </i> Delete

                                        </a>
                                       
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




<?php include('add_staff.php'); ?>
<?php include('edit_staff.php'); ?>


<script src="custom.js"></script>
<!--<//?php include('staff_edit.php'); ?>-->