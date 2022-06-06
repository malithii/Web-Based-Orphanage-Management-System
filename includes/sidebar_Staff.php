<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<link href="../css/bootstrap.min.css" rel="stylesheet">

<link href="../css/style.css" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--
    <link href="fontawesome-free-5.15.4-web/css/fontawesome.min.css" rel="stylesheet">-->


<script src="../js/bootstrap.min.js"></script>
<?php

$uname=$_SESSION['username'];
$user_type=$_SESSION['utype'];
$name=$_SESSION['name'];
    //
    //if(!isset($_SESSION['username'])){
    //
    //echo "<script>window.open('login.php','_self')</script>";
    //
    //}
    //
    //else {
    //
    //


    ?>


<nav class="navbar navbar-inverse navbar-fixed-top " style="background:linear-gradient(to right,#2D388A,#00AEEF);">
    <!-- navbar navbar-inverse navbar-fixed-top Starts -->

    <div class="navbar-header">
        <!-- navbar-header Starts -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <!-- navbar-ex1-collapse Starts -->


            <span class="sr-only">Toggle Navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>


        </button><!-- navbar-ex1-collapse Ends -->
        <a class="navbar-brand sm-0 h1" style="padding-top:0px;padding-left:50px"><img src="images/hand.png" width="50"
                height="50"> </a>

        <a class="navbar-brand mb-0 h1" href="index.php?overview"
            style="color:#fff;padding-left:58px;font-size:25px;padding-top:15px;font-family:roboto;">
            | SRI JINANANDA CHILDREN'S HOME |</a>
        <span style="float:right;font-size:25px;color:#fff;padding-top:30px; padding-left:550px;"><?php echo $user_type ?>: <?php echo $name ?> </span>
    </div><!-- navbar-header Ends -->






    <div class="collapse navbar-collapse navbar-ex1-collapse"
        style="background:linear-gradient(to right,#2D388A,#00AEEF);">
        <!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

        <ul class="nav navbar-nav side-nav">
            <!-- nav navbar-nav side-nav Starts -->


            <br>

            <li>
                <!-- li Starts -->

                <a href="index.php?overview" style="color:#fff;">

                    <i class="fa fa-fw fa-home"></i> Home

                </a>

            </li><!-- li Ends -->

            <li>
                <!-- li Starts -->

                <a href="index.php?viewUsers" data-toggle="collapse" data-target="#donations" style="color:#fff;">

                    <i class="fa fa-fw fa-money"></i> Donations

                    <!--<i class="fa fa-fw fa-caret-down"></i>-->


                </a>

                <!--<ul id="donations" class="collapse">

    <li>
    <a href="index.php?insertUsers"> Add Donations </a>
    </li>

    <li>
    <a href="index.php?viewUsers"> View Donations </a>
    </li>




    </ul>-->

            </li><!-- li Ends -->




            <li>
                <!-- li Starts -->

                <a href="index.php?viewChild" data-toggle="collapse" data-target="#child" style="color:#fff;">

                    <i class="fa fa-fw fa-child"></i> child

                    <!--<i class="fa fa-fw fa-caret-down"></i>-->


                </a>

                <!--<!--ul id="child" class="collapse">

    <li>
    <a href="index.php?insertChild"> Add child </a>
    </li>

    <li>
    <a href="index.php?viewChild"> View child </a>
    </li>

    </ul>-->

            </li><!-- li Ends -->

         

            <li>
                <!-- li Starts -->

                <a href="#" data-toggle="collapse" data-target="#child" style="color:#fff;">

                    <i class="fa fa-fw fa-handshake-o"></i> Adoption

                    <!--<i class="fa fa-fw fa-caret-down"></i>-->


                </a>

          

            </li>

            <li>
                <!-- li Starts -->

                <a href="index.php?viewExpense" data-toggle="collapse" data-target="#child" style="color:#fff;">

                    <i class="fa fa-fw fa-cc"></i> Expenses

                    <!--<i class="fa fa-fw fa-caret-down"></i>-->


                </a>

       

            </li>

            <li class="logout">
                <!-- li Starts -->

                <a href="logout.php" style="color:#fff;">

                    <i class="fa fa-fw fa-sign-out"></i> Log Out

                </a>

            </li><!-- li Ends -->

        </ul><!-- nav navbar-nav side-nav Ends -->

    </div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php //} ?>