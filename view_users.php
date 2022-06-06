<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
    * {
        box-sizing: border-box;
    }

    /* table { box-shadow: 1px 1px 1px 1px #999; }*/

    #myInput {
        /*background-image: url('/css/searchicon.png');*/
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
        margin-bottom: 12px;
    }

    #myTable tr.header {
        background-color: dodgerblue;
        color: white;
    }

    #myTable tr.content:hover {
        background-color: lavender;
    }
    </style>
</head>

<body>
    <br><br>

    <h3 style="font-size:30px;font-weight:bold;">
        <!-- panel-title Starts -->


        View Donations

    </h3><!-- panel-title Ends -->

    <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span
                class="glyphicon glyphicon-plus"></span> Add Donation</a></span>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

    <table id="myTable" class="table table-hover table-dark">
        <thead class="table-primary">
            <tr class="header">
                <th style="width:20%;">Donor name</th>
                <th style="width:20%;">Donor contact</th>
                <th style="width:20%;">Donor address</th>
                <th style="width:10%;">Donation type</th>
                <th style="width:20%;">Date</th>
                <th style="width:10%;">Donation Details</th>

            </tr>
        </thead>

        <?php


        $get_order = "select * from donars ";
        $run_order = mysqli_query($Con,$get_order);

        while($row_order=mysqli_fetch_array($run_order)){
        $id = $row_order['donarId'];
        $name = $row_order['donarName'];

        $contact = $row_order['contactNo'];

        $address = $row_order['Address'];
        $date = $row_order['date'];
        $type = $row_order['donationType'];


          ?>
        <tr class="content">
            <td><?php echo $name?></td>
            <td><?php echo $contact?></td>
            <td><?php echo $address?></td>
            <td><?php echo $type ?></td>
            <td><?php echo substr($date, 0,10) ?></td>
            <td>

                <a href="index.php?viewDonations=<?php echo $id; ?>">

                    <i class="fa fa-eye"> </i> view
                </a>

            </td>
        </tr>
        <?php  } ?>
    </table>

    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
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
    <?php include('donations.php'); ?>
   

</body>

</html>