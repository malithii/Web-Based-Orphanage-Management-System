    <?php
        ?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>Insert Donations</title>






    </head>

    <body>

        <div class="row">
            <!--row starts-->

            <div class="col-lg-9">
                <!--col-lg-12 starts-->

                <ol class="breadcrumb">
                    <!--breadcrumb starts-->

                    <li class="active">
                        <!--<i class="fa fa-dashboard"></i>Donations/Add Donars-->
                    </li>

                </ol>
                <!--breadcrumb Ends-->

            </div>
            <!--col-lg-12 Ends-->

        </div>
        <!--row Ends-->

        <div class="row">
            <!--2 row starts-->

            <div class="col-lg-12">
                <!--col-lg-12 starts-->

                <div class="panel panel-default">
                    <!--panel panel-default starts-->

                    <div class="panel-heading">
                        <!--panel-heading starts-->

                        <h3 class="panel-title" style="font-size:20px;">

                            <!--<i class="fa fa-money fa-fw"></i>-->Add Donors

                        </h3>

                    </div>
                    <!--panel-heading Ends-->

                    <div class="panel-body">
                        <!--panel-body starts-->

                        <form id="insert_form" class="form-horizontal" method="POST">
                            <!-- form-horizantal starts-->

                            <div class="form-group">
                                <!--form-group starts-->

                                <label class="col-md-3 control-label">Donor Name</label>

                                <div class="col-md-6">
                                    <!--col-md-6 starts-->

                                    <input type="text" name="donarname" id="donarname" class="form-control" required>

                                </div>
                                <!--col-md-6 Ends-->

                            </div>
                            <!--form-group Ends-->


                            <div class="form-group">
                                <!--form-group starts-->

                                <label class="col-md-3 control-label">Contact No</label>

                                <div class="col-md-6">
                                    <!--col-md-6 starts-->

                                    <input type="text" name="contactNo" id="contactNo" class="form-control" required>

                                </div>
                                <!--col-md-6 Ends-->

                            </div>
                            <!--form-group Ends-->





                            <div class="form-group">
                                <!--form-group starts-->

                                <label class="col-md-3 control-label">Address</label>

                                <div class="col-md-6">
                                    <!--col-md-6 starts-->

                                    <input type="text" name="address" id="address" class="form-control" required>

                                </div>
                                <!--col-md-6 Ends-->

                            </div>
                            <!--form-group Ends-->






                            <div class="form-group">
                                <!--form-group starts-->

                                <label class="col-md-3 control-label">Donation Type</label>

                                <div class="col-md-6">
                                    <!--col-md-6 starts-->

                                    <select name="type" id="type" class="form-control" required>

                                        <option>Select Donation Type</option>
                                        <option>Cash</option>
                                        <option>Items</option>
                                        <option>Both</option>

                                    </select>

                                </div>
                                <!--col-md-6 Ends-->

                            </div>
                            <!--form-group Ends-->



                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label class="col-md-3 control-label"></label>

                                <div class="col-md-6">

                                    <button type="button" class="btn btn-primary form-control" name="edit1" id="edit1"
                                        style="display: none;" data-toggle="modal">Add Donation</button>
                                    <button type="button" class="btn btn-primary form-control" name="edit2" id="edit2"
                                        style="display: none;" data-toggle="modal" data-target="#Item_Modal">Add
                                        Donation</button>
                                    <button type="button" class="btn btn-primary form-control" name="edit3" id="edit3"
                                        style="display: none;" data-toggle="modal" data-target="#Both_Modal">Add
                                        Donation</button>

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


        <div id="cash_Modal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Insert Cash Donation</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="cashForm">
                            <label>Donar Name</label>
                            <input type="text" name="cashname" id="cashname" class="form-control" />
                            <br />
                            <label>Donated Cash Amount</label>
                            <input type="text" name="cash" id="cash" class="form-control" />
                            <br />

                            <input type="hidden" name="donar_id" id="donar_id" />
                            <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!--########################################################################-->

        <div id="Item_Modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Insert Item Donation</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <!-- panel-body Starts -->

                            <label>Donar Name</label>
                            <input type="text" name="itemname" id="itemname" class="form-control" />
                            <br />

                            <div class="table-responsive">
                                <!-- table-responsive Starts -->

                                <table class="table table-bordered table-hover table-striped">
                                    <!-- table table-bordered table-hover table-striped Starts -->

                                    <span id="result"></span>
                                    <div id="live_data"></div>

                                </table><!-- table table-bordered table-hover table-striped Ends -->

                            </div><!-- table-responsive Ends -->

                        </div><!-- panel-body Ends -->

                    </div>

                </div>
            </div>
        </div>

        <!--########################################################################-->

        <div id="Both_Modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Insert Both Donation</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <!-- panel-body Starts -->

                            <label>Donar Name</label>
                            <input type="text" name="bothname" id="bothname" class="form-control" />
                            <br />

                            <label>Donated Items</label> <br>
                            <div class="table-responsive">
                                <!-- table-responsive Starts -->

                                <table class="table table-bordered table-hover table-striped">
                                    <!-- table table-bordered table-hover table-striped Starts -->

                                    <span id="result"></span>
                                    <div id="live_data_both"></div>

                                </table><!-- table table-bordered table-hover table-striped Ends -->

                            </div><!-- table-responsive Ends -->

                            <form method="post" id="cashForm_both">

                                <label>Donated Cash Amount</label>
                                <input type="text" name="cash" id="both" class="form-control" />
                                <br />

                                <input type="hidden" name="donar_id" id="donar_id_both" />
                                <input type="submit" name="insert" id="insert_both" value="Insert"
                                    class="btn btn-success" />
                            </form>

                        </div><!-- panel-body Ends -->

                    </div>

                </div>
            </div>
        </div>





        <?php //} ?>


        <script text="text/javascript">
        var getResult, itemid, val;
        $(document).ready(function() {
            $('#type').change(function() {
                var val = $('#type').val();

                if (val == 'Cash') {
                    document.getElementById("edit1").style.display = "inline";
                    document.getElementById("edit2").style.display = "none";
                    document.getElementById("edit3").style.display = "none";
                } else if (val == 'Items') {
                    document.getElementById("edit1").style.display = "none";
                    document.getElementById("edit2").style.display = "inline";
                    document.getElementById("edit3").style.display = "none";

                } else if (val == 'Both') {
                    document.getElementById("edit1").style.display = "none";
                    document.getElementById("edit2").style.display = "none";
                    document.getElementById("edit3").style.display = "inline";

                }
            });

            $("#insert").click(function() {
                $.ajax({
                    url: "cashinsert.php",
                    method: "POST",
                    data: $('#cashForm').serialize(),
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        window.open('index.php?viewUsers ', '_self');
                    }
                });

            });



            $("#insert_both").click(function() {



                $.ajax({
                    url: "cashinsert.php",
                    method: "POST",
                    data: $('#cashForm_both').serialize(),
                    success: function(data) {
                        alert(data);
                        window.open('index.php?viewUsers ', '_self');
                    }
                });

            });


            function fetch_data() {
                $.ajax({
                    url: "selectitem.php",
                    method: "POST",
                    data: {
                        id: itemid
                    },
                    success: function(data) {
                        $('#live_data').html(data);
                        alert(data);
                        window.open('index.php?viewUsers ', '_self');
                    }
                });
            }


            function fetch_data_both() {
                $.ajax({
                    url: "selectitemboth.php",
                    method: "POST",
                    data: {
                        id: itemid
                    },
                    success: function(data) {
                        $('#live_data_both').html(data);
                        alert(data);
                        window.open('index.php?viewUsers ', '_self');
                    }
                });
            }





            $("#edit1").click(function() {

                if ($('#donarname').val() == "") {
                    alert("Name is required");
                } else if ($('#contactNo').val() == "") {
                    alert("Contact No is required");
                } else if ($('#address').val() == '') {
                    alert("Address is required");
                } else {

                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        dataType: "json",

                        success: function(data) {
                            //$('#insert_form')[0].reset();                           
                            $('#cashname').val(data.donarName);
                            $('#donar_id').val(data.donarid);
                            $('#cash_Modal').modal('show');
                            itemid = data.donarid;

                        }
                    });
                }
            });

            $("#edit2").click(function() {

                if ($('#donarname').val() == "") {
                    alert("Name is required");
                } else if ($('#address').val() == '') {
                    alert("Address is required");
                } else if ($('#contactNo').val() == '') {
                    alert("Contact No is required");
                } else {

                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        dataType: "json",

                        success: function(data) {
                            //$('#insert_form')[0].reset();                           
                            $('#itemname').val(data.donarName);

                            $('Item_Modal').modal('show');
                            itemid = data.donarid;
                            console.log(itemid);
                            fetch_data();
                        }
                    });
                }
            });


            $("#edit3").click(function() {

                if ($('#donarname').val() == "") {
                    alert("Name is required");
                } else if ($('#address').val() == '') {
                    alert("Address is required");
                } else if ($('#contactNo').val() == '') {
                    alert("Contact No is required");
                } else {

                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        dataType: "json",

                        success: function(data) {
                            //$('#insert_form')[0].reset();                           
                            $('#bothname').val(data.donarName);
                            $('#donar_id_both').val(data.donarid);

                            $('Both_Modal').modal('show');
                            itemid = data.donarid;
                            fetch_data_both();

                        }
                    });
                }
            });










            $(document).on('click', '#btn_add', function() {
                var description = $('#item').text();
                var qty = $('#qty').text();

                if (description === '') {
                    swal("Attention!", "Enter Item name..", "warning");
                    return false;
                }
                if (qty === '') {
                    swal("Attention!", "Enter qty...", "warning");
                    return false;
                }

                $.ajax({
                    url: "insertItems.php",
                    method: "POST",
                    data: {
                        id: itemid,
                        description: description,
                        qty: qty
                    },
                    dataType: "text",
                    success: function(data) {
                        swal(data);
                        swal("Successfull!", "You inserted data!", "success");

                        fetch_data();

                    }
                });
            });

            $(document).on('click', '#btn_add_both', function() {
                var description = $('#itemboth').text();
                var qty = $('#qtyboth').text();

                if (description === '') {
                    swal("Attention!", "Enter Item name..", "warning");
                    return false;
                }
                if (qty === '') {
                    swal("Attention!", "Enter qty...", "warning");
                    return false;
                }

                $.ajax({
                    url: "insertItems.php",
                    method: "POST",
                    data: {
                        id: itemid,
                        description: description,
                        qty: qty
                    },
                    dataType: "text",
                    success: function(data) {
                        swal(data);
                        swal("Successfull!", "You inserted data!", "success");


                        fetch_data_both();
                    }
                });
            });

            $(document).on('click', '.btn_delete', function() {
                var id = $(this).data("id3");
                if (confirm("Are you sure you want to delete this?")) {
                    $.ajax({
                        url: "deleteitems.php",
                        method: "POST",
                        data: {
                            id: id
                        },
                        dataType: "text",
                        success: function(data) {
                            alert(data);
                            fetch_data();
                            fetch_data_both();
                        }
                    });
                }
            });

        });
        </script>

    </body>

    </html>