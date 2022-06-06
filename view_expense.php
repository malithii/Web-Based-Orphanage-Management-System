<!DOCTYPE html>
<html>

<head>
    <title>Expense</title>



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

        <div class="col-lg-6">
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

        <div class="col-lg-6">
            <!-- col-lg-12 Starts -->

            <div class="panel panel-success">
                <!-- panel panel-default Starts -->

                <div class="panel-heading">
                    <!-- panel-heading Starts -->


                    <h3 class="panel-title" style="font-size:30px;">
                        <!-- panel-title Starts -->

                        View Expense

                    </h3><!-- panel-title Ends -->

                    <br>
                    <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span
                                class="glyphicon glyphicon-plus"></span> Add Expense</a></span>

                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for date.."
                        title="Type in a date">

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
                                    <th>Date Paid</th>
                                    <th>Amount</th>
                                    <th>Purpose</th>
                                </tr>

                            </thead>

                            <tbody>

                                <?php
include("includes/db.php");
$i = 0;

$get_pro = "select * from expense";

$run_pro = mysqli_query($Con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){


$amount = $row_pro['Amount'];
$purpose = $row_pro['Purpose'];
$date_paid = $row_pro['Date_paid'];
$id = $row_pro['Expense_ID'];
$i++;

?>

                                <tr>

                                    <td><?php echo $i; ?></td>

                                    <td><span
                                            id="date<?php echo $row_pro['Expense_ID']; ?>"><?php echo $date_paid; ?></span>
                                    </td>
                                    <td><span
                                            id="amount<?php echo $row_pro['Expense_ID']; ?>"><?php echo $amount; ?></span>
                                    </td>
                                    <td><span
                                            id="purpose<?php echo $row_pro['Expense_ID']; ?>"><?php echo $purpose; ?></span>
                                    </td>




                                </tr>

                                <?php } ?>


                            </tbody>


                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

        <div class="col-lg-6 ">
            <!-- col-lg-12 Starts -->

            <div class="panel ">
                <!-- panel panel-default Starts -->

                <!--<div class="panel-heading">-->
                <!-- panel-heading Starts -->


                <!-- panel-title Starts -->



                <br><br>
                <!--</div>-->
                <!-- panel-heading Ends -->

                <div class="panel-body" style="padding:0;">
                    <div>
                        <center>

                            <img src="images/exp.png" width=400px height=400px>
                        </center>
                    </div>

                </div>
            </div>
        </div>
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





<?php include('add_expense.php'); ?>