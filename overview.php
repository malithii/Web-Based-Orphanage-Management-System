<?php
//
//if(!isset($_SESSION['username'])){
//
//echo "<script>window.open('login.php','_self')</script>";
//
//}
//
//else {

?>

<script>
var getlocations, getmonthNames, getDonation, chartstart;
</script>

<div class="row">
    <!-- 1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <h1 class="page-header">Home</h1>

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">



            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<?php

$get_labor = "select count(laborid) from labor ";
$run_labor = mysqli_query($Con,$get_labor);
$row_labor=mysqli_fetch_array($run_labor);
$alllabor = $row_labor['count(laborid)'];

$get_staff = "select count(staffid) from staff ";
$run_staff = mysqli_query($Con,$get_staff);
$row_staff=mysqli_fetch_array($run_staff);
$allstaff = $row_staff['count(staffid)'];

$get_child = "select count(id) from childdetails where gender='Male'";
$run_child = mysqli_query($Con,$get_child);
$row_child=mysqli_fetch_array($run_child);
$allchild = $row_child['count(id)'];

$get_fchild = "select count(id) from childdetails where gender='Female'";
$run_fchild = mysqli_query($Con,$get_fchild);
$row_fchild=mysqli_fetch_array($run_fchild);
$allfchild = $row_fchild['count(id)'];

$get_donation = "select sum(cashAmount) from donationcashdetails ";
$run_donation = mysqli_query($Con,$get_donation);
$row_donation=mysqli_fetch_array($run_donation);
$alldonation = $row_donation['sum(cashAmount)'];

?>






<div class="row">
    <!-- new modified 2 row starts -->
    <div class="container-fluid">
        <div class="col-lg-3 col-md-6">
            <div style="border-radius:5px;background-color:#DFE0DE;padding:10px;">
                <div class="card" align=center>
                    <img src="images/donate.png" style="width:50%;margin:auto 10px;" class="card-img-top"
                        alt="Donation">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:1.5em;font-weight:700;color:#12191D;">Total Donations
                        </h5>
                        <p class="card-text" style="font-size:2em;font-weight:900;color:#37475A;">Rs.
                            <?php echo $alldonation ?>.00 </p>
                        <a href="index.php?viewUsers" class="btn btn-primary" style="background-coclor:#26363E;">View
                            All Donations</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div style="border-radius:5px;background-color:#7C98A9;padding:10px;">
                <div class="card" align=center>
                    <img src="images/man.png" style="width:50%;margin:auto 10px;" class="card-img-top" alt="Children">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:1.5em;font-weight:700;color:#232F3E;">Male Children</h5>
                        <p class="card-text" style="font-size:2em;font-weight:900;color:#37475A;">
                            <?php echo $allchild ?></p>
                        <a href="index.php?viewChild" class="btn btn-primary">View Children List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div style="border-radius:5px;background-color:#F8B0AA;padding:10px;">
                <div class="card" align=center>
                    <img src="images/woman.png" style="width:50%;margin:auto 10px;" class="card-img-top" alt="Children">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:1.5em;font-weight:700;color:#623B76;">Female Children
                        </h5>
                        <p class="card-text" style="font-size:2em;font-weight:900;color:#37475A;">
                            <?php echo $allfchild ?></p>
                        <a href="index.php?viewChild" class="btn btn-primary">View Children List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div style="border-radius:5px;background-color:#FEBD69;padding:10px;">
                <div class="card" align=center>
                    <img src="images/steward.png" style="width:50%;margin:auto 10px;" class="card-img-top"
                        alt="Children">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size:1.5em;font-weight:700;color:#131A22;">Staff Count</h5>
                        <p class="card-text" style="font-size:2em;font-weight:900;color:#37475A;">
                            <?php echo $allstaff ?> </p>
                        <a href="index.php?viewStaff" class="btn btn-primary">View Staff List</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<br><br>

<center>
    <div class="col-md-5 ">
        <input type="text" class="form-control pull-right" value="Select year to get the monthly donations"
            disabled="disabled" required>
    </div>
    <div class="col-md-7">
        <!--col-md-6 starts-->

        <select name="type" id="year" class="form-control" onchange="getlocations();">

            <option>2021</option>
            <option>2020</option>
            <option>2019</option>
            <option>2018</option>

        </select>

    </div>
    <!--col-md-6 Ends-->

</center>
<br><br><br>

<div id="no_chart" class="text-center huge" style="color:lightslategray"></div>
<div id="chart_visual">
    <!-- 4 row starts-->

    <canvas id="bar-chart" width="400" height="100"></canvas>

</div><!-- 4 row ends-->

<br><br>
<div class="row">
    <!-- 3 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-8 Starts -->

        <div class="panel panel-success">
            <!-- panel panel-primary Starts -->

            <div class="panel-heading">
                <!-- panel-heading Starts -->

                <h3 class="panel-title">
                    <!-- panel-title Starts -->

                    Cash Donation Details

                </h3><!-- panel-title Ends -->

            </div><!-- panel-heading Ends -->

            <div class="panel-body">
                <!-- panel-body Starts -->

                <div class="table-responsive">
                    <!-- table-responsive Starts -->

                    <table class="table table-bordered table-hover table-striped">
                        <!-- table table-bordered table-hover table-striped Starts -->

                        <thead>
                            <!-- thead Starts -->

                            <tr>
                                <th>Donor Name:</th>
                                <th>Fund Amount:</th>
                                <th>Contact Number:</th>
                                <th>Date:</th>

                            </tr>

                        </thead><!-- thead Ends -->
                        <?php
  
  
$get_order = "select * from donars d inner join donationcashdetails dcd on d.donarId = dcd.donarid limit 5 ";
$run_order = mysqli_query($Con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){
$id = $row_order['donarId'];
$name = $row_order['donarName'];

$contact = $row_order['contactNo'];

$address = $row_order['Address'];
$date = $row_order['date'];
$amount = $row_order['cashAmount'];
?>
                        <tbody>
                            <!-- tbody Starts -->


                            <tr>
                                <td><?php echo $name?></td>
                                <td><?php echo $amount?></td>
                                <td><?php echo $contact?></td>
                                <td><?php echo substr($date, 0,10) ?></td>


                            </tr>

                            <?php }?>
                        </tbody><!-- tbody Ends -->


                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->
                <div class="text-right">
                    <!-- text-right Starts -->

                    <a href="index.php?viewUsers">

                        View All Donations <i class="fa fa-arrow-circle-right"></i>

                    </a>

                </div><!-- text-right Ends -->



            </div><!-- panel-body Ends -->

        </div><!-- panel panel-primary Ends -->

    </div><!-- col-lg-12 Ends -->



</div>

<script>
var count = 0;


getlocations();

function getlocations() {

    var year = document.getElementById("year").value;
    console.log(year);
    $.ajax({
        url: "findMonth.php",
        method: "POST",
        data: {
            year: year
        },
        dataType: "json",

        success: function(data) {
            window.globalVariable = data;
            count = data.length;
            if (count !== 0) {
                chartvisible();
                chartstart();
            } else {
                noChart();
            }
        }
    });
}

function getmonthNames() {
    var i;
    var data = [];
    for (var i = 0; i < count; i++) {
        data.push(globalVariable[i].month);

    }
    console.log(data);

    return data;

}

function getDonation() {

    var i;
    var data = [];


    for (var i = 0; i < count; i++) {
        data.push(globalVariable[i].amount);
    }

    data.push(0);
    console.log(data);
    return data;

}

function chartstart() {


    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            labels: getmonthNames(),
            datasets: [{
                label: "Amount ",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#F1C40F",
                    "#82C272", "#0087AC", "#FFC9ED", "#9CF168", "#82C272", "#9C2162"
                ],
                data: getDonation()
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Donation Monthly wise'
            }
        }
    });

}

function noChart() {
    document.getElementById('chart_visual').style.display = 'none';
    document.getElementById('no_chart').innerHTML = "No data to visual";
}

function chartvisible() {
    document.getElementById('chart_visual').style.display = 'block';
    document.getElementById('no_chart').innerHTML = "";
}
</script>