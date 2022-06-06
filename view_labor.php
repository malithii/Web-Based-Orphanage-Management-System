<div class="row">
    <!--  1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Labor / View Labor

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row">
    <!-- 2 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <div class="panel panel-default">
            <!-- panel panel-default Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <h3 class="panel-title">
                    <!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw"></i> View Labor

                </h3><!-- panel-title Ends -->


            </div><!-- panel-heading Ends -->

            <div class="panel-body">
                <!-- panel-body Starts -->

                <div class="table-responsive">
                    <!-- table-responsive Starts -->

                    <table class="table table-bordered table-hover table-striped">
                        <!-- table table-bordered table-hover table-striped Starts -->

                        <thead>

                            <tr>
                                <th>NO</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php

$i = 0;

$get_pro = "select * from labor";

$run_pro = mysqli_query($Con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$name = $row_pro['name'];
$contact = $row_pro['contact'];
$address = $row_pro['address'];
$gender = $row_pro['gender'];
$id = $row_pro['laborId'];
$i++;

?>

                            <tr>

                                <td><?php echo $i; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $contact; ?></td>
                                <td><?php echo $address; ?></td>
                                <td><?php echo $gender; ?></td>

                                <td>

                                    <a href="index.php?editLabors=<?php echo $id; ?>">

                                        <i class="fa fa-pencil"> </i> Edit

                                    </a>

                                </td>
                                <td>

                                    <a href="index.php?deleteLabors=<?php echo $id; ?>">

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