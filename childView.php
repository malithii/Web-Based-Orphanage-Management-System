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

            <div class="panel panel-default">
                <!-- panel panel-default Starts -->

                <div class="panel-heading">
                    <!-- panel-heading Starts -->

                    <h3 class="panel-title" style="font-size:30px;">
                        <!-- panel-title Starts -->
                        View Child

                    </h3><!-- panel-title Ends -->

                    <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span
                                class="glyphicon glyphicon-plus"></span> Add Child</a></span>

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
                                    <th>Child Name</th>
                                    <th>Gender</th>
                                    <th>Birth Date</th>
                                    <th>Age</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>

                            </thead>

                            <tbody>

                                <?php

$i = 0;

$get_pro = "select * from childdetails";

$run_pro = mysqli_query($Con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$name = $row_pro['name'];
$bdate = $row_pro['birthdate'];

$gender = $row_pro['gender'];
$id = $row_pro['id'];
$i++;

 $age = date("Y")- substr($bdate,0,4);

?>

                                <tr>

                                    <td><span id="no<?php echo $row_pro['id']; ?>"><?php echo $i; ?></span></td>
                                    <td><span id="name<?php echo $row_pro['id']; ?>"><?php echo $name; ?></span></td>
                                    <td><span id="gender<?php echo $row_pro['id']; ?>"><?php echo $gender; ?></span>
                                    </td>
                                    <td><span id="bdate<?php echo $row_pro['id']; ?>"><?php echo $bdate; ?></span></td>
                                    <td><span id="age<?php echo $row_pro['id']; ?>"><?php echo $age; ?></span></td>


                                    <td>

                                        <!--<a href="index.php?editChild=<//?php echo $id; ?>">-->

                                        <button type="button" class="btn btn-warning edit_child"
                                            value="<?php echo $row_pro['id']; ?>"><i class="fa fa-pencil-square-o"> </i>
                                            Edit</button>


                                        <!--    <i class="fa fa-pencil-square-o">` </i> Edit-->

                                        <!--</a>-->

                                    </td>
                                    <td>

                                        <a href="index.php?deleteChild=<?php echo $id; ?>" class="btn btn-danger">

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




    <?php include('childAdd.php'); ?>
    <?php include('ChildEdit.php'); ?>


    <script src="custom.js"></script>