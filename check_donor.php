<?php


if(isset($_GET['editStaff'])){

$edit_id = $_GET['editStaff'];

$get_pro = "select * from staff where staffId='$edit_id'";

$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$name = $row_pro['Name'];
$contact = $row_pro['ContactNo'];
$address = $row_pro['Address'];
$username = $row_pro['username'];   
$id = $row_pro['staffId'];

}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!DOCTYPE html>

<html>

<head>
    <title>Check Donor</title>

</head>

<body>



    <div id="checkdonor" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Check Donor</h4>
                </div>
                <div class="modal-body">


                  



                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->
                        <input type="hidden" id="donorId" name="donorId">
                        <div class="form-group">
                            <!--form-group starts-->

                            <label class="col-md-3 control-label">NIC No.</label>

                            <div class="col-md-6">
                                <!--col-md-6 starts-->

                                <input type="text" name="nic" id="dnic" class="form-control"
                                     required>

                            </div>
                            <!--col-md-6 Ends-->

                        </div>
                        <!--form-group Ends-->


                       




                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#cdonor"
                                    >
                                    Enter
                                </button>
                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizantal Ends-->

                    <!--</div>-->
                    <!--panel-body Ends-->

                    <!-- </div>-->
                    <!--panel panel-default Ends-->

                    <!--</div>-->
                    <!--col-lg-12 Ends-->

                    <!--</div>-->
                    <!--2 row Ends-->
                    
                </div>
            </div>
        </div>
    </div>
    <?php
    $name;
    if (isset($_POST['checkDonor'])) {

     $nic = $_POST['nic'];
       
   

        $get_donor = "select * from donars where nic = '$nic'";
               

        $run_donor = mysqli_query($Con, $get_donor);
        
        $row=mysqli_fetch_array($run_donor);
       $name=$row['donorName'];   

        $count = mysqli_num_rows($run_donor);
        
        if ($count==1) {
            echo "<script> 
            console.log($name);
            var proceed = confirm('Are you sure you want to proceed?');
            if (proceed) {
              
            } else {
              //don't proceed
            }
            </script>";
            echo "<script> window.open('index.php?viewStaff ','_self')</script>";
        }
    }
    ?>
    <div id="cdonor" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirm Donor</h4>
                </div>
                <div class="modal-body">


                

                    <form id="insert_form" class="form-horizontal" method="POST">
                        <!-- form-horizantal starts-->
                        <input type="hidden" id="donorId" name="donorId">
                        <div class="row">
                        <div class="form-group">
                            <!--form-group starts-->
                            
                            <label class="col-lg-6 control-label">Donor already exists as <?php echo $name ?>. </label>
                           
                      
                            <label class="col-lg-6 control-label">Do you want to add donation? </label>
                             </div>
                        </div>    
                      
                        <div class="row">

                         <div class="form-group">
                            <!-- form-group Starts -->
                              <div class="col-lg-3">

                                <input type="hidden" class="btn btn-primary form-control" data-target="cdonor"
                                    value="Yes">
                                 
                            </div>
                            <div class="col-lg-3">

                                <input type="submit" class="btn btn-primary form-control" data-target="cdonor"
                                    value="Yes">
                                 
                            </div>
                              <div class="col-lg-3">

                               <input type="submit" class="btn btn-primary form-control" data-target="cdonor"
                                    value="No">

                            </div>
                             
                             <div class="col-lg-3">

                                <input type="hidden" class="btn btn-primary form-control" data-target="cdonor"
                                    value="Yes">
                                 
                            </div>
                        </div>
                    </div>
                             

                    </form><!-- form-horizantal Ends-->

                    <!--</div>-->
                    <!--panel-body Ends-->

                    <!-- </div>-->
                    <!--panel panel-default Ends-->

                    <!--</div>-->
                    <!--col-lg-12 Ends-->

                    <!--</div>-->
                    <!--2 row Ends-->
                    
                </div>
            </div>
        </div>
    </div>

    
    
</body>

</html>



    

