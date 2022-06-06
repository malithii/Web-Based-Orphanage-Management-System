<!DOCTYPE html>

<html>

<head>
    <title>Insert Expense</title>

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
                    <h4 class="modal-title">Add Expense Details</h4>
                </div>
                <div class="modal-body">
                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->

                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Date Paid</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="date" name="dpaid" id="dpaid" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Amount</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="amount" id="amount" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">Purpose</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="purpose" id="purpose" class="form-control" required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->









                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary form-control" name="addExpense"
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
    if (isset($_POST['addExpense'])) {

     $dpaid = $_POST['dpaid'];
     $amount = $_POST['amount'];
     $purpose =$_POST['purpose'];
    

        $insert_expense = "insert into expense (date_paid,amount,purpose)"
                . " values ('$dpaid','$amount','$purpose')";

        $run_expense = mysqli_query($Con, $insert_expense);

        if ($run_expense) {
          
            
         
            echo "<script> alert('Expense Added successfully ')</script>";
            echo "<script> window.open('index.php?viewExpense ','_self')</script>";
        }
    }
    ?>