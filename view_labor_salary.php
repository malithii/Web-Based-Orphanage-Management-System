<html>

<body>




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


                    <div id="live_data"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
$(document).ready(function() {
    function fetch_data() {
        $.ajax({
            url: "selectLabor.php",
            method: "POST",
            success: function(data) {
                $('#live_data').html(data);
            }
        });
    }
    fetch_data();

    function edit_data(id, text, column_name) {
        $.ajax({
            url: "editlaborSalary.php",
            method: "POST",
            data: {
                id: id,
                text: text,
                column_name: column_name
            },
            dataType: "text",
            success: function(data) {
                swal(data);
                swal("Successfull!", "You Updated salary!", "success");
                fetch_data();
            }
        });
    }
    $(document).on('blur', '.salary', function() {
        var id = $(this).data("id4");
        var salary = $(this).text();
        edit_data(id, salary, "salary");
    });

});
</script>